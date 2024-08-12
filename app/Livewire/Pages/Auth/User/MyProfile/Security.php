<?php

namespace App\Livewire\Pages\Auth\User\MyProfile;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Security extends Component
{
    // render html
    #[Layout('components.layouts.pages.auth.user.my-profile.default')]
    public function render()
    {
        return view('pages.auth.user.my-profile.security');
    }
}
