<?php

namespace App\Filament\Components\Enums;

use Filament\Support\Contracts\HasLabel;

enum UserSalutationEnum: string implements HasLabel
{
    case Male = 'male';
    case Female = 'female';
    case Divers = 'divers';
    case Company = 'company';
    case NotSpecified = 'not_specified';

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
