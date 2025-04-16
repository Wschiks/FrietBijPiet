<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->truncate(); // eerst leegmaken

        DB::table('products')->insert([
            ['name' => 'Friet', 'price' => 3.00],
            ['name' => 'Kaassoufflé', 'price' => 2.00],
            ['name' => 'Frikandel', 'price' => 2.00],
            ['name' => 'Bitterballen', 'price' => 3.00],
            ['name' => 'FrietBijPietSpecial', 'price' => 4.00],
            ['name' => 'VicKroket', 'price' => 2.00],
        ]);
    }
}
