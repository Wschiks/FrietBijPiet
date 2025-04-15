<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Alle users verwijderen
        DB::table('users')->truncate();

        // Admin user toevoegen
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' => Hash::make('adminadmin'),
        ]);

        // Producten seeden
        $this->call([
            ProductSeeder::class,
        ]);
    }
}
