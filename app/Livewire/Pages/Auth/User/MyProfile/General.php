<?php

namespace App\Livewire\Pages\Auth\User\MyProfile;

use Livewire\Attributes\Layout;
use Livewire\Component;

class General extends Component
{
    // render html
    #[Layout('components.layout.page.auth.user.my-profile.default')]
    public function render()
    {
        return view('pages.auth.user.my-profile.general');
    }
}
