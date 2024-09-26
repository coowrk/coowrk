<?php

// !
// TODO: CLUSTER mit Navigation. (Einstellungen -> Allgemein, Mitglieder, Öffnungszeiten)

namespace App\Filament\App\Pages\Tenancy;

use Filament\Forms\Components\{Grid, Section, TextInput};
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

    /**
     * Create a form for the create and edit resource.
     * 
     * @return Form
     */
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

                        Grid::make(1)
                            ->columnSpan(2)
                            ->schema([
                                Section::make('Adresse')
                                    ->columns(4)
                                    ->schema([
                                        TextInput::make('street')
                                            ->label('Straße')
                                            ->columnSpan(3),

                                        TextInput::make('house_number')
                                            ->label('Hausnummer'),

                                        TextInput::make('postalcode')
                                            ->label('Postleitzahl'),

                                        TextInput::make('city')
                                            ->label('Stadt')
                                            ->columnSpan(2),

                                        TextInput::make('country')
                                            ->label('Land'),
                                    ]),
                            ])
                    ])
            ]);
    }
}
