<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
// Ubah dari {id} menjadi {slug}
Route::get('/product/{slug}', [ProductController::class, 'show']);