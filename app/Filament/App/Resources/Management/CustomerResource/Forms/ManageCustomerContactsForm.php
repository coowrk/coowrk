<?php

namespace App\Filament\App\Resources\Management\CustomerResource\Forms;

use App\Components\Enums\Customer\ContactTypeEnum;
use Filament\Forms\Components\{Select, TextInput};
use Filament\Forms\{Get, Form};
use TomatoPHP\FilamentHelpers\Contracts\FormBuilder;

class ManageCustomerContactsForm extends FormBuilder
{
    public function form(Form $form): Form
    {
        return $form->schema([
            // type
            Select::make('type')
                ->name('Kontakttyp')
                ->options(ContactTypeEnum::class)
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
        ]);
    }
}
