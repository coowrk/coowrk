<?php

namespace App\Livewire\Routes\Authentication;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    #[Layout('layouts.authentication')]
    public function render()
    {
        return view('routes.authentication.login');
    }
}
