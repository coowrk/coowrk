<?php

namespace App\Components\Enums\Company;

use Filament\Support\Contracts\HasLabel;

enum ContactTypeEnum: string implements HasLabel
{
    case Telephone = 'telephone';
    case Email = 'email';

    /**
     * Cast the 'input' to a string
     * 
     * @return string
     */
    public function getLabel(): ?string
    {
        return match ($this) {
            self::Telephone => 'Telefon',
            self::Email => 'E-Mail',
        };
    }
}
