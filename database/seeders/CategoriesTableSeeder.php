<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Gruzdinti'],
            ['name' => 'Sriuba'],
            ['name' => 'Salotos'],
            ['name' => 'Makaronai'],
            ['name' => 'Mėsa ir Žuvis'],
            ['name' => 'Picos'],
            ['name' => 'Desertai'],
        ]);
    }
}
