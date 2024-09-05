<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'first_name' => 'Administrator',
            'last_name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ])->settings()->create();

        Company::create([
            'name' => 'Allianz Deutschland AG',
            'street' => 'Königinstraße',
            'house_number' => '28',
            'postcode' => '80802',
            'city' => 'München',
            'country' => 'Germany'
        ]);
    }
}
