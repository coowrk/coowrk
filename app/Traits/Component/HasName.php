<?php

namespace App\Traits\Component;

trait HasName
{
    /**
     * Get name tag.
     * 
     * @param string $this->name receives this parameter from parent class. 
     * @return string|bool
     */
    public function getName(): string|bool
    {
        if ($this->name == null)
            return false;

        $tag['id'] = 'id="' . $this->name . '"';
        $tag['name'] = 'name="' . $this->name . '"';
        $tag['wire'] = 'wire:model.live="' . $this->name . '"';

        if ($this->wireDebounce != false)
            $tag['debounce'] = '.debounce.' . $this->wireDebounce . 'ms';

        if ($this->wireLive == true)
            $tag['wire'] = 'wire:model.live' . $tag['debounce'] . '="' . $this->name . '"';

        if ($this->wireBlur == true)
            $tag['wire'] = 'wire:model.blur="' . $this->name . '"';

        if ($this->wireChange == true)
            $tag['wire'] = 'wire:model.change="' . $this->name . '"';

        return "{$tag['id']} {$tag['name']} {$tag['wire']}";
    }

    /**
     * Get placeholder tag.
     * 
     * @param string $this->name receives this parameter from parent class. 
     * @return string|bool
     */
    public function getNameRaw(): string|bool
    {
        return $this->name;
    }
}
