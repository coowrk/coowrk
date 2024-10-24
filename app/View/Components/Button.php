<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;

class Button extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $variant = 'primary',
        public $url = null,
    ) {
        // 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.button');
    }

    public function getUrl()
    {
        if ($this->url == null)
            return false;

        if (Str::startsWith($this->url, ['']))
            $wire = "wire:navigate";

        $href = 'href="' . $this->url . '"';

        return "{$wire} {$href}";
    }
}
