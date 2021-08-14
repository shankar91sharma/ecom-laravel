<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Immune Health',
                'price'=>'1950',
                'category'=>'Vritilife Ayurvedic',
                'gallery'=>'http://herbalifeallinone.com/assets/images/products/vritilife-ayurvedic/vritilife-immune-health.jpg',
                'description'=>'Standardized extracts of Tulasi',
            ],
            [
                'name'=>'Beta Heart Vanilla',
                'price'=>'1560',
                'category'=>'Targeted Nutrition',
                'gallery'=>'http://herbalifeallinone.com/assets/images/products/Target-Nutrition/Beta-Heart-Vanilla.jpg',
                'description'=>'Nutritious powder containing Oat beta-glucan as key ingredient',
            ]
        ]);
    }
}
