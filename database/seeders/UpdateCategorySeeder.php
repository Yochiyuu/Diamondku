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
            [
                'name' => 'Roblox', 'image_url' => 'roblox_fav.png', 'type' => 'game',
                'products' => [
                    ['name' => '40 Robux', 'price' => 8000],
                    ['name' => '80 Robux', 'price' => 16000],
                    ['name' => '400 Robux', 'price' => 79000],
                    ['name' => '800 Robux', 'price' => 159000],
                    ['name' => '1700 Robux', 'price' => 329000],
                    ['name' => '4500 Robux', 'price' => 799000],
                ]
            ],
            [
                'name' => 'Call of Duty Mobile', 'image_url' => 'codm_fav.jpg', 'type' => 'game',
                'products' => [
                    ['name' => '31 CP', 'price' => 5000],
                    ['name' => '62 CP', 'price' => 10000],
                    ['name' => '316 CP', 'price' => 50000],
                    ['name' => '632 CP', 'price' => 100000],
                    ['name' => '1373 CP', 'price' => 200000],
                    ['name' => '2059 CP', 'price' => 300000],
                    ['name' => 'Premium Pass', 'price' => 150000],
                ]
            ],
            [
                'name' => 'Honor of Kings', 'image_url' => 'hok_fav.jpg', 'type' => 'game',
                'products' => [
                    ['name' => '8 Tokens', 'price' => 1500],
                    ['name' => '16 Tokens', 'price' => 3000],
                    ['name' => '80 Tokens', 'price' => 15000],
                    ['name' => '240 Tokens', 'price' => 45000],
                    ['name' => '400 Tokens', 'price' => 75000],
                    ['name' => '1200 Tokens', 'price' => 225000],
                    ['name' => 'Weekly Card', 'price' => 15000],
                ]
            ],
            [
                'name' => 'Clash of Clans', 'image_url' => 'coc_fav.jpg', 'type' => 'game',
                'products' => [
                    ['name' => '80 Gems', 'price' => 15000],
                    ['name' => '500 Gems', 'price' => 79000],
                    ['name' => '1200 Gems', 'price' => 159000],
                    ['name' => '2500 Gems', 'price' => 329000],
                    ['name' => '6500 Gems', 'price' => 799000],
                    ['name' => 'Gold Pass', 'price' => 119000],
                ]
            ],
            [
                'name' => 'eFootball', 'image_url' => 'efootball_fav.jpg', 'type' => 'game',
                'products' => [
                    ['name' => '130 Coins', 'price' => 16000],
                    ['name' => '520 Coins', 'price' => 50000],
                    ['name' => '1040 Coins', 'price' => 100000],
                    ['name' => '2130 Coins', 'price' => 200000],
                    ['name' => '3250 Coins', 'price' => 300000],
                    ['name' => '5700 Coins', 'price' => 500000],
                ]
            ],
            [
                'name' => 'Last War: Survival', 'image_url' => 'lastwar_fav.jpg', 'type' => 'game',
                'products' => [
                    ['name' => '100 Diamonds', 'price' => 15000],
                    ['name' => '500 Diamonds', 'price' => 75000],
                    ['name' => '1000 Diamonds', 'price' => 150000],
                    ['name' => '2000 Diamonds', 'price' => 300000],
                    ['name' => '5000 Diamonds', 'price' => 750000],
                    ['name' => 'Monthly Pass', 'price' => 150000],
                ]
            ],
            [
                'name' => 'EA SPORTS FC Mobile', 'image_url' => 'fcmobile_fav.jpg', 'type' => 'game',
                'products' => [
                    ['name' => '100 FC Points', 'price' => 15000],
                    ['name' => '500 FC Points', 'price' => 75000],
                    ['name' => '1050 FC Points', 'price' => 150000],
                    ['name' => '2200 FC Points', 'price' => 300000],
                    ['name' => '5750 FC Points', 'price' => 750000],
                    ['name' => 'Star Pass', 'price' => 150000],
                ]
            ],
            [
                'name' => 'Hay Day', 'image_url' => 'hayday_fav.jpg', 'type' => 'game',
                'products' => [
                    ['name' => '50 Diamonds', 'price' => 15000],
                    ['name' => '130 Diamonds', 'price' => 35000],
                    ['name' => '275 Diamonds', 'price' => 79000],
                    ['name' => '570 Diamonds', 'price' => 159000],
                    ['name' => '1500 Diamonds', 'price' => 329000],
                    ['name' => 'Farm Pass', 'price' => 79000],
                ]
            ],
            [
                'name' => 'Brawl Stars', 'image_url' => 'brawlstars_fav.jpg', 'type' => 'game',
                'products' => [
                    ['name' => '30 Gems', 'price' => 29000],
                    ['name' => '80 Gems', 'price' => 79000],
                    ['name' => '170 Gems', 'price' => 159000],
                    ['name' => '360 Gems', 'price' => 329000],
                    ['name' => '950 Gems', 'price' => 799000],
                    ['name' => 'Brawl Pass', 'price' => 119000],
                ]
            ],
            [
                'name' => 'Coin Master', 'image_url' => 'coinmaster_fav.png', 'type' => 'game',
                'products' => [
                    ['name' => '100 Spins', 'price' => 15000],
                    ['name' => '400 Spins', 'price' => 50000],
                    ['name' => '1000 Spins', 'price' => 100000],
                    ['name' => '2500 Spins', 'price' => 200000],
                    ['name' => '6000 Spins', 'price' => 400000],
                    ['name' => '15000 Spins', 'price' => 800000],
                ]
            ],

            // Kategori Membership Baru
            [
                'name' => 'Netflix', 'image_url' => 'netflix_fav.jpg', 'type' => 'membership',
                'products' => [
                    ['name' => 'Paket Mobile (1 Bulan)', 'price' => 54000],
                    ['name' => 'Paket Basic (1 Bulan)', 'price' => 65000],
                    ['name' => 'Paket Standard (1 Bulan)', 'price' => 120000],
                    ['name' => 'Paket Premium (1 Bulan)', 'price' => 186000],
                    ['name' => 'Paket Mobile (3 Bulan)', 'price' => 162000],
                    ['name' => 'Paket Basic (3 Bulan)', 'price' => 195000],
                ]
            ],
            [
                'name' => 'Spotify Premium', 'image_url' => 'spotify_fav.jpg', 'type' => 'membership',
                'products' => [
                    ['name' => 'Student (1 Bulan)', 'price' => 27500],
                    ['name' => 'Individual (1 Bulan)', 'price' => 54990],
                    ['name' => 'Duo (1 Bulan)', 'price' => 71490],
                    ['name' => 'Family (1 Bulan)', 'price' => 86900],
                    ['name' => 'Individual (3 Bulan)', 'price' => 165000], 
                    ['name' => 'Individual (1 Tahun)', 'price' => 549000],
                ]
            ],
            [
                'name' => 'YouTube Premium', 'image_url' => 'youtube_fav.jpg', 'type' => 'membership',
                'products' => [
                    ['name' => 'Student (1 Bulan)', 'price' => 35000],
                    ['name' => 'Individual (1 Bulan)', 'price' => 59000],
                    ['name' => 'Family (1 Bulan)', 'price' => 99000],
                    ['name' => 'Individual (3 Bulan)', 'price' => 177000],
                    ['name' => 'Individual (1 Tahun)', 'price' => 590000],
                ]
            ],
            [
                'name' => 'Disney+ Hotstar', 'image_url' => 'disnep_fav.jpg', 'type' => 'membership',
                'products' => [
                    ['name' => 'Basic (1 Bulan)', 'price' => 65000],
                    ['name' => 'Premium (1 Bulan)', 'price' => 119000],
                    ['name' => 'Basic Promo (3 Bulan)', 'price' => 150000],
                    ['name' => 'Basic (1 Tahun)', 'price' => 450000],
                    ['name' => 'Premium (1 Tahun)', 'price' => 799000],
                ]
            ],
            [
                'name' => 'Vidio Premier', 'image_url' => 'vidio_fav.jpeg', 'type' => 'membership',
                'products' => [
                    ['name' => 'Platinum (30 Hari)', 'price' => 39000],
                    ['name' => 'Platinum (1 Tahun)', 'price' => 269000],
                    ['name' => 'Diamond Mobile (30 Hari)', 'price' => 59000],
                    ['name' => 'Diamond All Screen (30 Hari)', 'price' => 79000],
                    ['name' => 'Diamond Mobile (1 Tahun)', 'price' => 429000],
                    ['name' => 'Diamond All Screen (1 Tahun)', 'price' => 569000],
                ]
            ],
        ];

        foreach ($newCategories as $cat) {
            $category = Category::firstOrCreate([
                'slug' => Str::slug($cat['name'])
            ], [
                'name' => $cat['name'],
                'image_url' => $cat['image_url'],
                'type' => $cat['type'],
            ]);

            foreach ($cat['products'] as $prod) {
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