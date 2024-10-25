<?php

namespace App\View\Components;

use App\Traits\Component\GetAllAvailableTags;
use App\Traits\Component\HasError;
use App\Traits\Component\HasName;
use App\Traits\Component\HasPlaceholder;
use App\Traits\Component\HasRequired;
use App\Traits\Component\HasType;
use App\Traits\Component\HasValue;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    use HasType, HasPlaceholder, HasValue, HasName, HasRequired;
    use GetAllAvailableTags;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string|bool $wireLive = false,
        public string|bool $wireBlur = false,
        public string|bool $wireChange = false,
        public string|bool $wireDebounce = false,
        public string|bool $placeholder = false,
        public string|bool $label = false,
        public string|bool $labelHint = false,
        public string|null $name = null,
        public string|null $value = null,
        public string|bool $required = false,
        public string|bool $description = false,
        public string $type = 'text'
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view(
            'components.ui.input.input'
        );
    }
}
