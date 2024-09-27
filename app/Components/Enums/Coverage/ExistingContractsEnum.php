<?php

namespace App\Components\Enums\Coverage;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum ExistingContractsEnum: string implements HasLabel, HasColor
{
    case Yes = '1';
    case No = '0';

    /**
     * Cast the 'input' to a string
     * 
     * @return string
     */
    public function getLabel(): ?string
    {
        return match ($this) {
            self::Yes => 'Ja',
            self::No => 'Nein',
        };
    }

    /**
     * Match the input and return the matching color
     * 
     * @return string
     */
    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Yes => 'success',
            self::No => 'danger',
        };
    }
}
