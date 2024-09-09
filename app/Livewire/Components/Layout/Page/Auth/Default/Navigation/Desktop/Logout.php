<?php

namespace App\Livewire\Components\Layout\Page\Auth\Default\Navigation\Desktop;

use Livewire\Component;

class Logout extends Component
{
    // render html
    public function render()
    {
        return view('components.layout.page.auth.default.navigation.desktop.logout');
    }

    // logout user
    public function logout()
    {
        // logout
        auth()->logout();

        // redirect to login
        $this->redirectRoute('login');
    }
}
