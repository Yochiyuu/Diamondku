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
        // Validasi input
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'target_id'  => 'required|string',
            'email'      => 'required|email',
            'phone'      => 'required|string',
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
        // Pastikan menggunakan Secret Key (xnd_development_...) bukan Public Key
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