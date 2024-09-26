<?php

namespace App\Components\Enums\Coverage;

use Filament\Support\Contracts\HasLabel;

enum SectionEnum: string implements HasLabel
{
    case ResidentialBuildings = 'residential_buildings';
    case HouseholdIems = 'household_items';
    case Liability = 'liability';
    case Glass = 'glass';
    case LegalProtection = 'legal_protection';

    /**
     * Cast the 'input' to a string
     * 
     * @return string
     */
    public function getLabel(): ?string
    {
        return match ($this) {
            self::ResidentialBuildings => 'Wohngebäude',
            self::HouseholdIems => 'Hausrat',
            self::Liability => 'Haftpflicht',
            self::Glass => 'Glas',
            self::LegalProtection => 'Rechtsschutz',
        };
    }
}
