<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => "Apple iPhone 13 (128 GB) - Azul - Distribuidor autorizado",
            'description'=> "Iphon nuevo con mucha pila",
            'price' => 15999,
            'priceOff' => null,
            'stock' => 3,
            'image' => null,
            'sku' => '12345',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "Smart Tv Hisense A4 Series 43 A4h Led Full Hd 43 120hz 2022",
            'description'=> "Tele con pantalla Led de 43 pulgadas",
            'price' => 4099,
            'priceOff' => 48,
            'stock' => 3,
            'image' => null,
            'sku' => '54321',
            'category_id' => 1
        ]);
    }
}
