<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RootUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->create([
                'first_name' => 'Nail',
                'last_name' => 'Ucdu',
                'mail' => 'nailgokturkler@gmail.com',
            ]);
    }
}
