<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/product/{slug}', [ProductController::class, 'show']);
Route::post('/checkout', [TransactionController::class, 'store'])->name('checkout');