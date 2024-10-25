<?php

namespace App\View\Components;

use App\Traits\Component\GetAllAvailableTags;
use App\Traits\Component\HasType;
use App\Traits\Component\HasUrl;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    use HasType, HasUrl;
    use GetAllAvailableTags;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $variant = 'primary',
        public string|null $type = null,
        public string|null $url = null,
        public string|null $label = null,
    ) {
        // 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view(
            $this->urlIsOutgoing() ?
                'components.ui.button.linkAsAButton' :
                'components.ui.button.button'
        );
    }
}
