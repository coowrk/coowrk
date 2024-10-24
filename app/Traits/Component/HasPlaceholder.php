<?php

namespace App\Traits\Component;

trait HasPlaceholder
{
    /**
     * Get placeholder tag.
     * 
     * @return string|bool
     */
    public function getPlaceholder(): string|bool
    {
        if ($this->placeholder == null)
            return false;

        return 'placeholder="' . $this->placeholder . '"';
    }
}
