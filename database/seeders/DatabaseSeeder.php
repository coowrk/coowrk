<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create users
        \App\Models\User::factory(10)->create();

        // Craete letters
        \App\Models\Letter::factory(10)->create();

        // Root User
        \App\Models\User::factory()->create([
            'name' => 'Nail Ucdu',
            'mail' => 'nailgokturkler@gmail.com',
        ]);
    }
}
