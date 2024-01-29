<?php

namespace App\Livewire\Modals;

use Livewire\Component;
use Livewire\Attributes\On;

class Notification extends Component
{
    public bool $show = false;
    public string $type;
    public string $title;
    public string $text;

    public function render()
    {
        return view('components.modals.notification');
    }

    #[On('notification.show')]
    public function show(string $type, string $title, string $text)
    {
        $this->type = $type;
        $this->title = $title;
        $this->text = $text;
        $this->show = true;
        $this->render();
    }
}
