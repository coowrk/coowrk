<?php

namespace App\Filament\App\Pages\Tenancy;

use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\EditTenantProfile;

class EditTeamProfile extends EditTenantProfile
{
    // navigation title
    public static function getLabel(): string
    {
        return 'Einstellungen';
    }

    // page title
    public function getTitle(): string
    {
        return "{$this->data['name']} - Einstellungen";
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(3)
                    ->schema([
                        Section::make()
                            ->columnSpan(1)
                            ->schema([
                                TextInput::make('name')
                                    ->label('Team'),

                                TextInput::make('id')
                                    ->label('Identifikation')
                                    ->disabled(),
                            ]),

                        Section::make('Adresse')
                            ->columnSpan(2)
                            ->columns(2)
                            ->schema([
                                TextInput::make('street')
                                    ->label('Straße'),

                                TextInput::make('house_number')
                                    ->label('Hausnummer'),

                                TextInput::make('postalcode')
                                    ->label('Postleitzahl'),

                                TextInput::make('city')
                                    ->label('Stadt'),

                                TextInput::make('country')
                                    ->label('Land'),
                            ])
                    ])
            ]);
    }
}
