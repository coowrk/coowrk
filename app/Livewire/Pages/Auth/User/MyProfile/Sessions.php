<?php

namespace App\Livewire\Pages\Auth\User\MyProfile;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Sessions extends Component
{
    // properties
    public $sessions = [];

    // render html
    #[Layout('components.layout.page.auth.user.my-profile.default')]
    public function render()
    {
        return view('pages.auth.user.my-profile.sessions');
    }

    // fetch data
    public function mount()
    {
        $this->sessions = auth()->user()->sessions;
    }
}
