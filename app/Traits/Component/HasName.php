<?php

namespace App\Traits\Component;

trait HasName
{
    /**
     * Get placeholder tag.
     * 
     * @return string|bool
     */
    public function getName(): string|bool
    {
        if ($this->name == null)
            return false;

        return 'name="' . $this->name . '"';
    }
}
