<?php

namespace App\Filament\Components\Forms;

use Filament\Forms\Components\TextInput;
use Saade\FilamentAutograph\Forms\Components\SignaturePad;

class ManageCustomerSignaturesForm
{
    public static function schema(): array
    {
        return [
            // type
            TextInput::make('name')
                ->label('Name')
                ->required()
                ->columnSpanFull(),

            // value
            SignaturePad::make('signature')
                ->label('Unterschrift')
                ->required()
                ->columnSpanFull(),
        ];
    }
}
