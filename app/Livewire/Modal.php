<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Modal extends Component
{
    public string $message;
    public bool $show = false;

    public function render()
    {
        return view('components.modal');
    }

    #[On('modal.show')]
    public function modalShow(string $text)
    {
        $this->message = $text;
        $this->show = true;
        $this->render();
    }
}
