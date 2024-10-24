<?php

namespace App\Traits\Component;

trait HasValue
{
    /**
     * Get the value tag.
     * 
     * @return string|bool
     */
    public function getValue(): string|bool
    {
        if ($this->value == null)
            return false;

        return 'value="' . $this->value . '"';
    }
}
