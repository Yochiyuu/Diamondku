<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Xendit\Configuration;
use Xendit\Invoice\InvoiceApi;
use Xendit\Invoice\CreateInvoiceRequest;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input ditambah dengan payment_method
        $request->validate([
            'product_id'     => 'required|exists:products,id',
            'target_id'      => 'required|string',
            'email'          => 'required|email',
            'phone'          => 'required|string',
            'payment_method' => 'required|string|in:QRIS,DANA,OVO,SHOPEEPAY,LINKAJA',
        ]);

        $product = Product::findOrFail($request->product_id);
        $order_id = 'TRX-' . time();

        // 1. Simpan transaksi ke database
        $transaction = Transaction::create([
            'order_id'      => $order_id,
            'product_id'    => $product->id,
            'target_id'     => $request->target_id,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'amount'        => $product->price,
            'status'        => 'pending',
        ]);

        // 2. Konfigurasi Xendit
        Configuration::setXenditKey('xnd_development_WeE9Je5ZTEEMMkCOh8Lw7QQ8TMzg8Rkmhrjyp3TcUdRAbyzZGKDOYFGSiHNpdzHx');
        
        $apiInstance = new InvoiceApi();

        $create_invoice_request = new CreateInvoiceRequest([
            'external_id' => $order_id,
            'description' => "Top Up " . $product->name . " - ID: " . $request->target_id,
            'amount'      => (float) $product->price,
            'customer'    => [
                'email' => $request->email,
                'mobile_number' => $request->phone,
            ],
            // Parameter ini yang mengunci dan langsung mengarah ke metode pembayaran spesifik
            'payment_methods' => [$request->payment_method],
            'success_redirect_url' => url('/'), 
        ]);

        try {
            // 3. Buat Invoice di Xendit
            $result = $apiInstance->createInvoice($create_invoice_request);

            // Update kolom snap_token dengan URL invoice dari Xendit
            $transaction->update(['snap_token' => $result['invoice_url']]);

            return response()->json(['payment_url' => $result['invoice_url']]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}