<?php

namespace App\Livewire\Pages\Guest\Authentication;

use Livewire\Attributes\Layout;
use Livewire\Component;

class SignIn extends Component
{
    #[Layout('components.layouts.pages.guest.authentication')]
    public function render()
    {
        return view('pages.guest.authentication.sign-in');
    }
}
