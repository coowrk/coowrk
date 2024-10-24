<?php

namespace App\View\Components;

use App\Traits\Component\GetAllAvailableTags;
use App\Traits\Component\HasName;
use App\Traits\Component\HasPlaceholder;
use App\Traits\Component\HasType;
use App\Traits\Component\HasValue;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    use HasType, HasPlaceholder, HasValue, HasName;
    use GetAllAvailableTags;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string|bool $placeholder = false,
        public string|null $value = null,
        public string|null $name = null,
        public string $type = 'text'
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.input.input');
    }
}
