<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Modal extends Component
{
    public string $type;
    public string $title;
    public string $text;
    public bool $show = false;

    public function render()
    {
        return view('components.modal');
    }

    #[On('modal.show')]
    public function show(string $type, string $title, string $text)
    {
        $this->type = $type;
        $this->title = $title;
        $this->text = $text;
        $this->show = true;
        $this->render();
    }
}
