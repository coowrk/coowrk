<?php

namespace App\Livewire\Modals;

use Livewire\Component;
use Livewire\Attributes\On;

class SlideOver extends Component
{
    public bool $show = false;
    public string $title;
    public string $component;

    public function render()
    {
        return view('components.modals.slide-over');
    }

    #[On('slide-over.show')]
    public function show(string $title, string $component)
    {
        return dd(1);
        $this->show = true;
        $this->title = $title;
        $this->component = $component;
        $this->render();
    }
}
