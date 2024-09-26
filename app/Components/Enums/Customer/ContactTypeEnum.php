<?php

namespace App\Components\Enums\Customer;

use Filament\Support\Contracts\HasLabel;

enum ContactTypeEnum: string implements HasLabel
{
    case Telephone = 'telephone';
    case TelephonePrivate = 'telephone_private';
    case TelephoneBusiness = 'telephone_business';
    case Email = 'email';
    case EmailPrivate = 'email_private';
    case EmailBusiness = 'email_business';

    /**
     * Cast the 'input' to a string
     * 
     * @return string
     */
    public function getLabel(): ?string
    {
        return match ($this) {
            self::Telephone => 'Telefon',
            self::TelephonePrivate => 'Telefon Privat',
            self::TelephoneBusiness => 'Telefon Geschäftlich',
            self::Email => 'E-Mail',
            self::EmailPrivate => 'E-Mail Privat',
            self::EmailBusiness => 'E-Mail Geschäftlich',
        };
    }
}
