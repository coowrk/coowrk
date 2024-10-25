<?php

namespace App\Traits\Component;

trait HasRequired
{
    /**
     * Get the required tag.
     * 
     * @return string|bool
     */
    public function getRequired(): string|bool
    {
        if ($this->required == false)
            return false;

        return 'required';
    }
}
