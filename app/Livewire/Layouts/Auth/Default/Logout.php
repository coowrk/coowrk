<?php

namespace App\Livewire\Layouts\Auth\Default;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    // Render view
    public function render()
    {
        return view('livewire.layouts.auth.default.logout');
    }

    // Logout
    public function logout(): void
    {
        // Log user out
        Auth::logout();

        // Delete session local
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        // Redirect to login
        $this->redirect(route('login'));
    }
}
