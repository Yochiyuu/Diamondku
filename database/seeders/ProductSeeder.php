<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Kategori ID 1 = Mobile Legend
        Product::create(['category_id' => 1, 'name' => '86 Diamonds', 'price' => 20000]);
        Product::create(['category_id' => 1, 'name' => '172 Diamonds', 'price' => 40000]);
        Product::create(['category_id' => 1, 'name' => '257 Diamonds', 'price' => 60000]);
        Product::create(['category_id' => 1, 'name' => '706 Diamonds', 'price' => 160000]);

        // Kategori ID 2 = Valorant
        Product::create(['category_id' => 2, 'name' => '300VP', 'price' => 45000]);
        Product::create(['category_id' => 2, 'name' => '600VP', 'price' => 90000]);
        Product::create(['category_id' => 2, 'name' => '1120VP', 'price' => 150000]);

    }
}