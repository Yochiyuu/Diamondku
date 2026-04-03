<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Category::firstOrCreate(['slug' => 'mobile-legends'], ['name' => 'Mobile Legends', 'image_url' => 'mobilelegends_fav.png']);
        Category::firstOrCreate(['slug' => 'valorant'], ['name' => 'Valorant', 'image_url' => 'valorant_fav.png']);
        Category::firstOrCreate(['slug' => 'free-fire'], ['name' => 'Free Fire', 'image_url' => 'freefire_fav.png']);
        Category::firstOrCreate(['slug' => 'pubg-mobile'], ['name' => 'PUBG Mobile', 'image_url' => 'pubgmobile_fav.png']);
        Category::firstOrCreate(['slug' => 'genshin-impact'], ['name' => 'Genshin Impact', 'image_url' => 'genshinimpact_fav.png']);

        $this->call([
            ProductSeeder::class,
            UpdateCategorySeeder::class,
        ]);
    }
}