<?php

namespace App\Components\Enums\ShortLetter;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum StatusEnum: string implements HasLabel, HasIcon, HasColor
{
    case NotSendYet = 'not_send_yet';
    case OnThePostWay = 'on_the_post_way';
    case PresumablyWithTheCustomer = 'presumably_with_the_customer';
    case PostalReturn = 'postal_return';
    case Archived = 'archived';

    /**
     * Match the input and return the matching label
     * 
     * @return string
     */
    public function getLabel(): ?string
    {
        return match ($this) {
            self::NotSendYet => 'Noch nicht versendet',
            self::OnThePostWay => 'Auf dem Postweg',
            self::PresumablyWithTheCustomer => 'Mutmaßlich beim Kunden',
            self::PostalReturn => 'Postrückläufer',
            self::Archived => 'Archiviert',
        };
    }

    /**
     * Match the input and return the matching icon
     * 
     * @return string
     */
    public function getIcon(): ?string
    {
        return match ($this) {
            self::NotSendYet => 'heroicon-s-building-office',
            self::OnThePostWay => 'heroicon-s-truck',
            self::PresumablyWithTheCustomer => 'heroicon-s-user',
            self::PostalReturn => 'heroicon-s-backspace',
            self::Archived => 'heroicon-s-archive-box',
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
            self::NotSendYet => 'warning',
            self::OnThePostWay => 'warning',
            self::PresumablyWithTheCustomer => 'success',
            self::PostalReturn => 'danger',
            self::Archived => 'primary',
        };
    }
}
