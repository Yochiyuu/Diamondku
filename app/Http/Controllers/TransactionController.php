<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'target_id' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'referral_code' => 'nullable|string',
        ]);

        $product = Product::findOrFail($request->product_id);
        $order_id = 'TRX-' . time();

        $transaction = Transaction::create([
            'order_id' => $order_id,
            'product_id' => $product->id,
            'target_id' => $request->target_id,
            'email' => $request->email,
            'phone' => $request->phone,
            'referral_code' => $request->referral_code,
            'amount' => $product->price,
            'status' => 'pending',
        ]);

        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false);
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => $order_id,
                'gross_amount' => $product->price,
            ],
            'customer_details' => [
                'first_name' => $request->target_id,
                'email' => $request->email,
                'phone' => $request->phone,
            ],
            'item_details' => [[
                'id' => $product->id,
                'price' => $product->price,
                'quantity' => 1,
                'name' => $product->name
            ]]
        ];

        $snapToken = Snap::getSnapToken($params);
        $transaction->update(['snap_token' => $snapToken]);

        return response()->json(['snap_token' => $snapToken]);
    }
}