<?php

namespace App\Filament\App\Resources\Management\CustomerResource\Forms;

use App\Components\Enums\User\SalutationEnum;
use Filament\Forms\Components\{Select, TextInput, Section, Grid};
use Filament\Forms\{Get, Form};
use TomatoPHP\FilamentHelpers\Contracts\FormBuilder;

class CustomerForm extends FormBuilder
{
    public function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Kunde')
                ->schema([
                    Grid::make([1, 'lg' => 5])->schema([
                        Select::make('salutation')
                            ->name('Anrede')
                            ->options(SalutationEnum::class)
                            ->native(false)
                            ->required()
                            ->live(),

                        TextInput::make('first_name')
                            ->name('Vorname')
                            ->columnSpan([1, 'lg' => 2])
                            ->hidden(fn(Get $get): bool => ($get('salutation') == 'company'))
                            ->required(),

                        TextInput::make('first_name')
                            ->name('Name')
                            ->columnSpan([1, 'lg' => 4])
                            ->visible(fn(Get $get): bool => ($get('salutation') == 'company'))
                            ->required(),

                        TextInput::make('last_name')
                            ->name('Nachname')
                            ->columnSpan([1, 'lg' => 2])
                            ->hidden(fn(Get $get): bool => ($get('salutation') == 'company'))
                            ->required(fn(Get $get): bool => !($get('salutation') == 'company'))
                    ]),
                ]),

            Section::make('Adresse')
                ->schema([
                    Grid::make([1, 'sm' => 2, 'lg' => 5])->schema([
                        TextInput::make('street')
                            ->name('Straße')
                            ->columnSpan([1, 'lg' => 4])
                            ->required(),

                        TextInput::make('house_number')
                            ->name('Hausnummer')
                            ->columnSpan(1)
                            ->required(),
                    ]),

                    Grid::make([1, 'sm' => 2, 'lg' => 5])->schema([
                        TextInput::make('postalcode')
                            ->name('Postleitzahl')
                            ->columnSpan(1)
                            ->required(),

                        TextInput::make('city')
                            ->name('Stadt')
                            ->columnSpan([1, 'lg' => 3])
                            ->default(filament()->getTenant()->city)
                            ->required(),

                        TextInput::make('country')
                            ->name('Land')
                            ->columnSpan([1, 'sm' => 2, 'lg' => 1])
                            ->default(filament()->getTenant()->country)
                            ->required(),
                    ])
                ])
        ]);
    }
}
