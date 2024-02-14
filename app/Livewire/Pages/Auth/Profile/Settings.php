<?php

namespace App\Livewire\Pages\Auth\Profile;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Security extends Component
{
    public function render(): View
    {
        return view('livewire.pages.auth.profile.settings');
    }
}
