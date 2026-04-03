<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Kategori ID 1 = Mobile Legend
        $mlProducts = [
            ['name' => 'Weekly Diamond Pass', 'price' => 28000],
            ['name' => '86 Diamonds', 'price' => 20000],
            ['name' => '172 Diamonds', 'price' => 40000],
            ['name' => '257 Diamonds', 'price' => 60000],
            ['name' => '344 Diamonds', 'price' => 80000],
            ['name' => '429 Diamonds', 'price' => 100000],
            ['name' => '514 Diamonds', 'price' => 120000],
            ['name' => '706 Diamonds', 'price' => 160000],
        ];
        foreach ($mlProducts as $prod) {
            Product::firstOrCreate(['category_id' => 1, 'name' => $prod['name']], ['price' => $prod['price']]);
        }

        // Kategori ID 2 = Valorant
        $valoProducts = [
            ['name' => '125 VP', 'price' => 15000],
            ['name' => '420 VP', 'price' => 50000],
            ['name' => '700 VP', 'price' => 80000],
            ['name' => '1375 VP', 'price' => 150000],
            ['name' => '2400 VP', 'price' => 250000],
            ['name' => '4000 VP', 'price' => 400000],
            ['name' => '8150 VP', 'price' => 800000],
        ];
        foreach ($valoProducts as $prod) {
            Product::firstOrCreate(['category_id' => 2, 'name' => $prod['name']], ['price' => $prod['price']]);
        }

        // Kategori ID 3 = Free Fire
        $ffProducts = [
            ['name' => '70 Diamonds', 'price' => 10000],
            ['name' => '140 Diamonds', 'price' => 20000],
            ['name' => '355 Diamonds', 'price' => 50000],
            ['name' => '720 Diamonds', 'price' => 100000],
            ['name' => '1450 Diamonds', 'price' => 200000],
            ['name' => '2180 Diamonds', 'price' => 300000],
            ['name' => 'Weekly Membership', 'price' => 30000],
            ['name' => 'Monthly Membership', 'price' => 100000],
        ];
        foreach ($ffProducts as $prod) {
            Product::firstOrCreate(['category_id' => 3, 'name' => $prod['name']], ['price' => $prod['price']]);
        }

        // Kategori ID 4 = PUBG Mobile
        $pubgProducts = [
            ['name' => '60 UC', 'price' => 15000],
            ['name' => '325 UC', 'price' => 75000],
            ['name' => '660 UC', 'price' => 150000],
            ['name' => '1800 UC', 'price' => 350000],
            ['name' => '3850 UC', 'price' => 700000],
            ['name' => '8100 UC', 'price' => 1400000],
        ];
        foreach ($pubgProducts as $prod) {
            Product::firstOrCreate(['category_id' => 4, 'name' => $prod['name']], ['price' => $prod['price']]);
        }

        // Kategori ID 5 = Genshin Impact
        $genshinProducts = [
            ['name' => 'Blessing of the Welkin Moon', 'price' => 79000],
            ['name' => '60 Genesis Crystals', 'price' => 16000],
            ['name' => '330 Genesis Crystals', 'price' => 79000],
            ['name' => '1090 Genesis Crystals', 'price' => 249000],
            ['name' => '2240 Genesis Crystals', 'price' => 479000],
            ['name' => '3280 Genesis Crystals', 'price' => 799000],
            ['name' => '6480 Genesis Crystals', 'price' => 1599000],
        ];
        foreach ($genshinProducts as $prod) {
            Product::firstOrCreate(['category_id' => 5, 'name' => $prod['name']], ['price' => $prod['price']]);
        }
    }
}