<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new user.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('Name', 'admin');
        $email = $this->ask('E-Mail', 'admin@admin.com');
        $password = $this->ask('Password', 'password');

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);

        $this->info('Created user.');
    }
}
