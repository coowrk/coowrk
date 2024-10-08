<?php

namespace App\Components\Enums\ShortLetter;

use Filament\Support\Contracts\HasLabel;

enum YouReceiveThisProcessOptionsEnum: string implements HasLabel
{
    case ForSignature = 'for_signature';
    case ToRemain = 'to_remain';
    case ForDistribution = 'for_distribution';
    case ForSubmission = 'for_submission';
    case WithThansBack = 'with_thanks_back';
    case Attachments = 'attachments';

    /**
     * Cast the 'input' to a string
     * 
     * @return string
     */
    public function getLabel(): ?string
    {
        return match ($this) {
            self::ForSignature => 'zur Unterschrift',
            self::ToRemain => 'zum Verbleib',
            self::ForDistribution => 'zur Weitergabe',
            self::ForSubmission => 'zur Vorlage',
            self::WithThansBack => 'mit Dank zurück',
            self::Attachments => 'anbei Anlage(n)',
        };
    }
}
