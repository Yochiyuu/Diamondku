<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::post('/transaction', [TransactionController::class, 'store'])->name('transaction.store');



