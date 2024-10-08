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

        // temporary
    case Content = 'content';
    case BusinessLiability = 'business_liability';
    case CommercialLegalProtection = 'commercial_legal_protection';
    case LossOfIncome = 'loss_of_income';

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

            // temporary
            self::Content => 'Inhalt',
            self::BusinessLiability => 'Betriebs-Haftpflicht',
            self::CommercialLegalProtection => 'Gewerbe-Rechtsschutz',
            self::LossOfIncome => 'Ertragsausfall',
        };
    }
}
