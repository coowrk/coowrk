<?php

namespace App\Console\Commands;

use App\Models\Administrator;
use Illuminate\Console\Command;

class MakeAdministrator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:administrator';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new administrator.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('Name', 'admin');
        $email = $this->ask('E-Mail', 'admin@admin.com');
        $password = $this->secret('Password');

        Administrator::create([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);

        $this->info('Created administrator.');
    }
}
