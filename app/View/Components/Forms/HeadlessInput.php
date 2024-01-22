<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeadlessInput extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $type = "text",
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.headless-input');
    }
}
