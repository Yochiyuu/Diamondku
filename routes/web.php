<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/product/{slug}', [ProductController::class, 'show']);
Route::post('/checkout', [TransactionController::class, 'store'])->name('checkout');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/track-order', [TransactionController::class, 'trackOrder'])->name('track.order');
Route::post('/track-order', [TransactionController::class, 'findOrder'])->name('track.find');