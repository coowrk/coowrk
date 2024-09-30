<?php

namespace App\Filament\App\Resources\Management\CustomerResource\Forms;

use Filament\Forms\Components\TextInput;
use Saade\FilamentAutograph\Forms\Components\SignaturePad;
use Filament\Forms\Form;
use TomatoPHP\FilamentHelpers\Contracts\FormBuilder;

class ManageCustomerSignaturesForm extends FormBuilder
{
    public function form(Form $form): Form
    {
        return $form->schema([
            // name
            TextInput::make('name')
                ->label('Name')
                ->required()
                ->columnSpanFull(),

            // signature
            SignaturePad::make('signature')
                ->label('Unterschrift')
                ->exportPenColor('#000')
                ->required()
                ->columnSpanFull()
                ->confirmable(),
        ]);
    }
}
