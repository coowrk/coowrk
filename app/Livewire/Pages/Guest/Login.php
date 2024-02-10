<?php

namespace App\Livewire\Pages\Guest;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Login extends Component
{
    #[Validate('required|email')]
    public string $mail;

    #[Validate('required')]
    public string $password;

    public function render(): View
    {
        return view('livewire.pages.guest.login');
    }

    public function submit()
    {
        // Validate
        $this->validate();

        // If Authentication failes redirect back
        if (!Auth::attempt($this->only(['mail', 'password'])))
            return $this->addError('mail', __('auth.failed'));

        // Redirect to home
        return $this->redirectRoute('home');
    }
}
