<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => "Videojuegos"
        ]);
        DB::table('categories')->insert([
            'name' => "Hogar"
        ]);
        DB::table('categories')->insert([
            'name' => "Ropa"
        ]);
        DB::table('categories')->insert([
            'name' => "Electronicos"
        ]);
        DB::table('categories')->insert([
            'name' => "Belleza e Higiene"
        ]);
        DB::table('categories')->insert([
            'name' => "Mascotas"
        ]);
        DB::table('categories')->insert([
            'name' => "Juguetes"
        ]);
    }
}
