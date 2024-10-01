<?php

namespace App\Components\Enums\Coverage;

use Filament\Support\Contracts\HasLabel;

enum SectionCompanyEnum: string implements HasLabel
{
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
            self::Content => 'Inhalt',
            self::BusinessLiability => 'Betriebs-Haftpflicht',
            self::CommercialLegalProtection => 'Gewerbe-Rechtsschutz',
            self::LossOfIncome => 'Ertragsausfall',
        };
    }
}
