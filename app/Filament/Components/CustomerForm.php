<?php

namespace App\Filament\Components;

use Filament\Forms\Components\{Select, TextInput, Section, Grid};
use Filament\Forms\Get;

class CustomerForm
{
    public static function schema(): array
    {
        return [
            Section::make('Kunde')
                ->description('Name des Kunden.')
                ->schema([
                    Grid::make(5)->schema([
                        Select::make('salutation')
                            ->name('Anrede')
                            ->options([
                                'male' => 'Herr',
                                'female' => 'Frau',
                                'divers' => 'Divers',
                                'company' => 'Unternehmen',
                            ])
                            ->required()
                            ->live(),

                        TextInput::make('first_name')
                            ->name('Vorname')
                            ->columnSpan(2)
                            ->hidden(fn(Get $get): bool => ($get('salutation') == 'company'))
                            ->required(),

                        TextInput::make('first_name')
                            ->name('Name')
                            ->columnSpan(4)
                            ->visible(fn(Get $get): bool => ($get('salutation') == 'company'))
                            ->required(),

                        TextInput::make('last_name')
                            ->name('Nachname')
                            ->columnSpan(2)
                            ->hidden(fn(Get $get): bool => ($get('salutation') == 'company'))
                            ->requiredIf('salutation', ['male', 'female', 'divers'])
                    ]),
                ]),

            Section::make('Adresse')
                ->description('Anschrift des Kunden.')
                ->schema([
                    Grid::make(5)->schema([
                        TextInput::make('street')
                            ->name('Straße')
                            ->columnSpan(4)
                            ->required(),

                        TextInput::make('house_number')
                            ->name('Hausnummer')
                            ->columnSpan(1)
                            ->required(),
                    ]),

                    Grid::make(5)->schema([
                        TextInput::make('postcode')
                            ->name('Postleitzahl')
                            ->columnSpan(1)
                            ->required(),

                        TextInput::make('city')
                            ->name('Stadt')
                            ->columnSpan(3)
                            ->required(),

                        TextInput::make('country')
                            ->name('Land')
                            ->columnSpan(1)
                            ->required(),
                    ])
                ])
        ];
    }
}
