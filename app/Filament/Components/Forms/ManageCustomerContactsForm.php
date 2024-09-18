<?php

namespace App\Filament\Components\Forms;

use App\Filament\Components\Enums\CustomerContactTypeEnum;
use Filament\Forms\Components\{Select, TextInput};
use Filament\Forms\Get;

class ManageCustomerContactsForm
{
    public static function schema(): array
    {
        return [
            // type
            Select::make('type')
                ->name('Kontakttyp')
                ->options(CustomerContactTypeEnum::class)
                ->native(false)
                ->required()
                ->live()
                ->columnSpanFull(),

            // value
            TextInput::make('value')
                ->label('Kontakt')
                ->disabled(fn(Get $get) => !$get('type'))
                ->tel(fn(Get $get) => in_array($get('type'), ['telephone', 'telephone_private', 'telephone_business']))
                ->email(fn(Get $get) => in_array($get('type'), ['email', 'email_private', 'email_business']))
                ->required()
                ->columnSpanFull()
        ];
    }
}
