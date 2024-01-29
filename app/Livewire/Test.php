<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public function render()
    {
        return view('livewire.test');
    }

    public function test()
    {
        $this->dispatch('notification.show', 'success', 'Account erfolgreich erstellt!', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ');
    }
}
