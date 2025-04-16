<?php

namespace Database\Seeders;
//php artisan db:seed
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->truncate(); // eerst leegmaken

        DB::table('products')->insert([
            ['name' => 'Friet', 'price' => 3.00,'description' => "bla bla bla bla"],
            ['name' => 'Kaassoufflé', 'price' => 2.00,'description' => "bla bla "],
            ['name' => 'Frikandel', 'price' => 2.00,'description' => "bla bla blaaaaaaa"],
            ['name' => 'Bitterballen', 'price' => 3.00,'description' => "blaaaaaaa bla bla"],
            ['name' => 'FrietBijPietSpecial', 'price' => 4.00, 'description' => "bla blaaaa bla"],
            ['name' => 'VicKroket', 'price' => 2.00, 'description' => "blaaa blaaa blaaa" ],
        ]);
    }
}
