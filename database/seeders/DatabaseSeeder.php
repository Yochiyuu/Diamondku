<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Pastikan nama file gambarnya nanti disamakan dengan yang ada di sini
        Category::create(['name' => 'Mobile Legends', 'image_url' => '.jpg']);
        Category::create(['name' => 'Valorant', 'image_url' => 'cover_valo.jpg']);
        Category::create(['name' => 'Free Fire', 'image_url' => 'cover_ff.jpg']);
        Category::create(['name' => 'PUBG Mobile', 'image_url' => 'cover_pubg.jpg']);
        Category::create(['name' => 'Genshin Impact', 'image_url' => 'cover_genshin.jpg']);
    }
}