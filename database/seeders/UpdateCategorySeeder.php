<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UpdateCategorySeeder extends Seeder
{
    public function run()
    {
        $newCategories = [
            // Kategori 10 Game Baru
            ['name' => 'Roblox', 'image_url' => 'roblox.png', 'type' => 'game'],
            ['name' => 'Call of Duty Mobile', 'image_url' => 'codm.png', 'type' => 'game'],
            ['name' => 'Honor of Kings', 'image_url' => 'hok.png', 'type' => 'game'],
            ['name' => 'Clash of Clans', 'image_url' => 'coc.png', 'type' => 'game'],
            ['name' => 'eFootball', 'image_url' => 'efootball.png', 'type' => 'game'],
            ['name' => 'Last War: Survival', 'image_url' => 'lastwar.png', 'type' => 'game'],
            ['name' => 'EA SPORTS FC Mobile', 'image_url' => 'fcmobile.png', 'type' => 'game'],
            ['name' => 'Hay Day', 'image_url' => 'hayday.png', 'type' => 'game'],
            ['name' => 'Brawl Stars', 'image_url' => 'brawlstars.png', 'type' => 'game'],
            ['name' => 'Coin Master', 'image_url' => 'coinmaster.png', 'type' => 'game'],

            // Kategori Membership Baru
            ['name' => 'Netflix', 'image_url' => 'netflix.png', 'type' => 'membership'],
            ['name' => 'Spotify Premium', 'image_url' => 'spotify.png', 'type' => 'membership'],
            ['name' => 'YouTube Premium', 'image_url' => 'youtube.png', 'type' => 'membership'],
            ['name' => 'Disney+ Hotstar', 'image_url' => 'disney.png', 'type' => 'membership'],
            ['name' => 'Vidio Premier', 'image_url' => 'vidio.png', 'type' => 'membership'],
        ];

        foreach ($newCategories as $cat) {
            // Buat kategori jika belum ada
            $category = Category::firstOrCreate([
                'slug' => Str::slug($cat['name'])
            ], [
                'name' => $cat['name'],
                'image_url' => $cat['image_url'],
                'type' => $cat['type'],
            ]);

            // Bikin daftar pilihan nominal/paket secara otomatis
            if ($cat['type'] == 'game') {
                $products = [
                    ['name' => '100 Credits / Coins', 'price' => 15000],
                    ['name' => '250 Credits / Coins', 'price' => 35000],
                    ['name' => '500 Credits / Coins', 'price' => 65000],
                    ['name' => '1000 Credits / Coins', 'price' => 120000],
                ];
            } else {
                $products = [
                    ['name' => '1 Bulan Membership', 'price' => 45000],
                    ['name' => '3 Bulan Membership', 'price' => 120000],
                    ['name' => '6 Bulan Membership', 'price' => 230000],
                    ['name' => '1 Tahun Membership', 'price' => 450000],
                ];
            }

            // Masukkan produk ke database, diikat dengan kategori masing-masing
            foreach ($products as $prod) {
                Product::firstOrCreate([
                    'category_id' => $category->id,
                    'name' => $prod['name']
                ], [
                    'price' => $prod['price']
                ]);
            }
        }
    }
}