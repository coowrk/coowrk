<?php

namespace App\Filament\Components\Enums;

use App\Traits\EnumValues;
use Filament\Support\Contracts\HasLabel;

enum ShortLetterWeAskForOptionsEnum: string implements HasLabel
{
    use EnumValues;

    case Call = 'call';
    case Return = 'return';
    case Acknowledgment = 'acknowledgment';
    case Report = 'report';
    case FurtherAction = 'further_action';
    case Statement = 'statement';
    case Examination = 'examination';

    /**
     * Cast the 'input' to a string
     * 
     * @return string
     */
    public function getLabel(): ?string
    {
        return match ($this) {
            self::Call => 'Anruf / Rücksprache',
            self::Return => 'Rückgabe',
            self::Acknowledgment => 'Kenntnisnahme',
            self::Report => 'Bericht',
            self::FurtherAction => 'Weitere veranlassung',
            self::Statement => 'Stellungnahme',
            self::Examination => 'Prüfung'
        };
    }
}
