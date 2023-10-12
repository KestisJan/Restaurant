<?php

namespace Database\Seeders;

use Database\Factories\MeniuItemsFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MeniuCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('meniu')->insert([
            ['name' => 'Brusketa'],
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
