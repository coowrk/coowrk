<?php

namespace App\Traits\Component;

trait HasType
{
    protected static function availableTypes()
    {
        return [
            'button',
            'submit',
            'email',
            'text',
            'password'
        ];
    }

    /**
     * Get type tag.
     * 
     * @return string|bool
     */
    public function getType(): string|bool
    {
        /**
         * Check if type variable is given or
         * if the given url is outgoing.
         */
        if (
            $this->type == null

            /**
             * Check if method urlIsOutgoing is callable in the current class.
             * App\Traits\ComponentHasUrl.php
             */
            || (
                method_exists(get_class(), 'urlIsOutgoing')
                && $this->urlIsOutgoing()
            )
        )
            return false;

        return 'type="' . $this->type . '"';
    }
}
