<?php

namespace App\Traits\Component;

trait GetAllAvailableTags
{
    /**
     * Get placeholder tag.
     * 
     * @return string|bool
     */
    public function getAllAvailableTags(): string|array|bool
    {
        return implode(
            " ",
            [
                method_exists(get_class(), 'getPlaceholder') ? $this->getPlaceholder() : null,
                method_exists(get_class(), 'getType') ? $this->getType() : null,
                method_exists(get_class(), 'getUrl') ? $this->getUrl() : null,
                method_exists(get_class(), 'getValue') ? $this->getValue() : null,
                method_exists(get_class(), 'getName') ? $this->getName() : null,
            ]
        );
    }
}
