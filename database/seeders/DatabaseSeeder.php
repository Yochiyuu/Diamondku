<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Category::create(['name' => 'Mobile Legends', 'image_url' => '']);
        Category::create(['name' => 'Free Fire', 'image_url' => '']);
    }
}
