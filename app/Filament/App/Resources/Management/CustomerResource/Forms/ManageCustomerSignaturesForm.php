<?php

namespace App\Filament\App\Resources\Management\CustomerResource\Forms;

use Filament\Forms\Components\TextInput;
use Saade\FilamentAutograph\Forms\Components\SignaturePad;

class ManageCustomerSignaturesForm
{
    public static function schema(): array
    {
        return [
            // name
            TextInput::make('name')
                ->label('Name')
                ->required()
                ->columnSpanFull(),

            // signature
            SignaturePad::make('signature')
                ->label('Unterschrift')
                ->required()
                ->columnSpanFull()
                ->confirmable(),
        ];
    }
}
