<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Opp Mobile',
                'price' => '900',
                'category' => 'Mobile',
                'description' => 'A smarphone with 8gb ram and much more feature',
                'galery' => 'https://www.begawei.com/wp-content/uploads/2018/10/oppo-k1-f.jpg',
            ],
            [
                'name' => 'Samsung Mobile',
                'price' => '1000',
                'category' => 'Mobile',
                'description' => 'A smarphone with 8gb ram and much more feature',
                'galery' => 'https://carisinyal.com/wp-content/uploads/2020/08/Samsung-Galaxy-Note20-2.jpg',
            ],
            [
                'name' => 'LG TV',
                'price' => '1000',
                'category' => 'TV',
                'description' => 'A smart tv with much more feature',
                'galery' => 'https://www.lg.com/id/images/tv/md06125496/gallery/43LM5500PTA_DZ01.jpg',
            ],
            [
                'name' => 'Samsung Mobile',
                'price' => '1000',
                'category' => 'fridge',
                'description' => 'A fidge with much more feature',
                'galery' => 'https://www.lg.com/in/images/refrigerators/md06236076/gallery/Z01_GL-S292RPZY-Refrigerators-Front-View-DZ-01.jpg',
            ]                      
        ]);
    }
}
