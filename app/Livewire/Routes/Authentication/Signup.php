<?php

namespace App\Livewire\Routes\Authentication;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Signup extends Component
{
    #[Layout('layouts.authentication')]
    public function render()
    {
        return view('routes.authentication.signup');
    }
}
