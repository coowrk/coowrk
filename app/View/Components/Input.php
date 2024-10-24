<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string|bool $placeholder = false,
        public string|null $value = null,
        public string $type = 'text'
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.input');
    }

    public function getPlaceholder()
    {
        if ($this->placeholder == null)
            return;

        return 'placeholder="' . $this->placeholder . '"';
    }

    public function getValue()
    {
        if ($this->value == null)
            return;

        return 'value="' . $this->value . '"';
    }

    public function getType()
    {
        return "type={$this->type}";
    }
}
