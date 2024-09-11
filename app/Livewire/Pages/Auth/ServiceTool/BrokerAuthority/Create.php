<?php

namespace App\Livewire\Pages\Auth\ServiceTool\BrokerAuthority;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    // render html
    #[Layout('components.layout.page.auth.default')]
    public function render()
    {
        return view('pages.auth.service-tool.broker-authority.create');
    }
}
