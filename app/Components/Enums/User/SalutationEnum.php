<?php

namespace App\Components\Enums\User;

use Filament\Support\Contracts\HasLabel;

enum SalutationEnum: string implements HasLabel
{
    case Male = 'male';
    case Female = 'female';
    case Divers = 'divers';
    case Company = 'company';
    case NotSpecified = 'not_specified';

    /**
     * Cast the 'input' to a string
     * 
     * @return string
     */
    public function getLabel(): ?string
    {
        return match ($this) {
            self::Male => 'Herr',
            self::Female => 'Frau',
            self::Divers => 'Divers',
            self::Company => 'Unternehmen',
            self::NotSpecified => 'Keine Angabe',
        };
    }
}
