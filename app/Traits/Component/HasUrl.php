<?php

namespace App\Traits\Component;

use Illuminate\Support\Str;

trait HasUrl
{
    /**
     * Check if the given url is outgoing or pointing to the current website.
     * 
     * @return bool
     */
    public function urlIsOutgoing(): bool
    {
        /**
         * Check if the url starts with {needles}
         */
        if (
            !Str::startsWith($this->url, ['http://', 'https://'])
            || Str::startsWith($this->url, [url()->current()])
        )
            return false;

        return true;
    }

    /**
     * Get the url tag.
     * 
     * @return string|bool
     */
    public function getUrl(): string|bool
    {
        /**
         * Check if url is set.
         */
        if ($this->url == null)
            return false;

        $wire = "wire:navigate";
        $href = 'href="' . $this->url . '"';

        if (! $this->urlIsOutgoing())
            return "{$wire} {$href}";

        return $href;
    }
}
