<?php

namespace App\Filament\Resources\ServiceTool\ShortLetterResource\Pages;

use App\Filament\Resources\ServiceTool\ShortLetterResource;
use App\Models\User;
use Filament\Actions;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Get;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateShortLetter extends CreateRecord
{
    use HasWizard;

    protected static string $resource = ShortLetterResource::class;

    protected function getSteps(): array
    {
        return [
            Wizard\Step::make('Kunde')
                ->schema([
                    Select::make('customer')
                        ->label('Kunde')
                        ->relationship(name: 'customer', titleAttribute: 'full_name')
                        ->searchable()
                        ->createOptionForm([
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
                                ]),
                        ])
                        ->required()
                ]),

            Wizard\Step::make('Brief')
                ->schema([
                    TextInput::make('reason')
                        ->name('Betreff')
                        ->maxLength(255)
                        ->required(),

                    TextInput::make('description')
                        ->name('Beschreibung')
                        ->maxLength(255)
                        ->required(),
                ]),

            Wizard\Step::make('Aktion')
                ->schema([
                    Grid::make()
                        ->schema([
                            CheckboxList::make('we_ask_for')
                                ->label('Der Kunde wird um ... gebeten')
                                ->options([
                                    'call' => 'Anruf / Rücksprache',
                                    'acknowledgment' => 'Kenntnisnahme',
                                    'completion' => 'Erledigung',
                                    'statement' => 'Stellungnahme',
                                    'return' => 'Rückgabe',
                                    'report' => 'Bericht',
                                    'prompt' => 'Weitere Veranlassung',
                                    'check' => 'Prüfung'
                                ])->columns(2)
                                ->columnSpan(2),

                            CheckboxList::make('go_in_action')
                                ->label('Der Kunde erhält den Vorgang ...')
                                ->options([
                                    'signature' => 'zur Unterschrift',
                                    'remain' => 'zum Verbleib',
                                    'passing' => 'zur Weitergabe',
                                    'forward' => 'zur Vorlage',
                                    'thanks' => 'mit Dank zurück',
                                ])->columnSpan(1),
                        ])->columns(3)
                ])
        ];
    }
}
