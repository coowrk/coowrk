<?php

namespace App\Livewire\Pages\Auth\Cancellation;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    // render html
    #[Layout('components.layouts.pages.auth.default')]
    public function render()
    {
        return view('pages.auth.cancellation.index');
    }
}
