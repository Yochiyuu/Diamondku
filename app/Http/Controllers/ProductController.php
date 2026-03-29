<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug) // Parameter diganti jadi $slug
    {
        // Cari kategori yang slug-nya sesuai dengan URL, ambil beserta produknya
        $category = Category::with('products')->where('slug', $slug)->firstOrFail();
        
        return view('product', compact('category'));
    }
}