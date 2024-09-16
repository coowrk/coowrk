<?php

namespace App\Filament\Components\Forms;

use App\Filament\Components\Enums\UserSalutationEnum;
use Filament\Forms\Components\{Select, TextInput, Section, Grid};
use Filament\Forms\Get;

class CustomerForm
{
    public static function schema(): array
    {
        return [
            Section::make('Kunde')
                ->schema([
                    Grid::make([1, 'lg' => 5])->schema([
                        Select::make('salutation')
                            ->name('Anrede')
                            ->options(UserSalutationEnum::class)
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
                            ->requiredIf('salutation', ['male', 'female', 'divers'])
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
                            ->required(),

                        TextInput::make('country')
                            ->name('Land')
                            ->columnSpan([1, 'sm' => 2, 'lg' => 1])
                            ->required(),
                    ])
                ])
        ];
    }
}
