<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Category::create(['name' => 'Mobile Legends', 'slug' => 'mobile-legends', 'image_url' => 'mobilelegends_fav.png']);
        Category::create(['name' => 'Valorant', 'slug' => 'valorant', 'image_url' => 'valorant_fav.png']);
        Category::create(['name' => 'Free Fire', 'slug' => 'free-fire', 'image_url' => 'freefire_fav.png']);
        Category::create(['name' => 'PUBG Mobile', 'slug' => 'pubg-mobile', 'image_url' => 'cover_pubg.jpg']);
        Category::create(['name' => 'Genshin Impact', 'slug' => 'genshin-impact', 'image_url' => 'cover_genshin.jpg']);

        $this->call([
            ProductSeeder::class,
        ]);
    }
}