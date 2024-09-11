<?php

namespace App\Filament\Resources\ServiceTool\BrokerAuthorityResource\Pages;

use App\Filament\Resources\ServiceTool\BrokerAuthorityResource;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Get;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;
use Saade\FilamentAutograph\Forms\Components\SignaturePad;

class CreateBrokerAuthority extends CreateRecord
{
    use HasWizard;

    protected static string $resource = BrokerAuthorityResource::class;

    // mutate create record
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }

    protected function getSteps(): array
    {
        return [
            Wizard\Step::make('Kunde')
                ->schema([
                    Select::make('customer_id')
                        ->prefixIcon('heroicon-s-user')
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

            Wizard\Step::make('Ort und Datum')
                ->schema([
                    Grid::make()
                        ->schema([
                            TextInput::make('signed_city')
                                ->label('Ort')
                                ->prefixIcon('heroicon-s-globe-alt')
                                ->required()
                                ->columnSpan(1),

                            DatePicker::make('signed_at')
                                ->label('Datum')
                                ->prefixIcon('heroicon-s-calendar-date-range')
                                ->displayFormat('d.m.Y')
                                ->native(false)
                                ->afterStateHydrated(fn(DatePicker $component, ?string $state) => $component->state(now()->toDateString()))
                                ->required()
                                ->columnSpan(1)
                        ])->columns(2)
                ]),

            Wizard\Step::make('Unterschrift')
                ->schema([
                    SignaturePad::make('signature')
                        ->required()
                        ->confirmable()
                ])
        ];
    }
}
