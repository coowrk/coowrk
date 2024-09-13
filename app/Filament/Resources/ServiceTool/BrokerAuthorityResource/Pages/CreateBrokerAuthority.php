<?php

namespace App\Filament\Resources\ServiceTool\BrokerAuthorityResource\Pages;

use App\Filament\Components\CustomerForm;
use App\Filament\Resources\ServiceTool\BrokerAuthorityResource;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
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
            Wizard\Step::make('Makler')
                ->schema([
                    Select::make('broker_authority_agent_id')
                        ->prefixIcon('heroicon-s-user')
                        ->label('Makler')
                        ->relationship(name: 'agent', titleAttribute: 'name')
                        ->searchable()
                        ->preload()
                        ->createOptionForm([
                            Grid::make(1)->schema([
                                FileUpload::make('logo')
                                    ->label('Logo')
                            ]),

                            Grid::make(1)->schema([
                                TextInput::make('name')
                                    ->label('Name')
                                    ->required()
                            ]),

                            Grid::make(5)->schema([
                                TextInput::make('street')
                                    ->label('Straße')
                                    ->columnSpan(4)
                                    ->required(),

                                TextInput::make('house_number')
                                    ->label('Hausnummer')
                                    ->columnSpan(1)
                                    ->required()
                            ]),

                            Grid::make(5)->schema([
                                TextInput::make('postcode')
                                    ->label('Postleitzahl')
                                    ->columnSpan(1)
                                    ->required(),

                                TextInput::make('city')
                                    ->label('Stadt')
                                    ->columnSpan(2)
                                    ->required(),

                                TextInput::make('country')
                                    ->label('Land')
                                    ->default('Deutschland')
                                    ->columnSpan(2)
                                    ->required(),
                            ])
                        ])
                        ->required()
                ]),

            Wizard\Step::make('Kunde')
                ->schema([
                    Select::make('customer_id')
                        ->prefixIcon('heroicon-s-user')
                        ->label('Kunde')
                        ->relationship(name: 'customer', titleAttribute: 'full_name')
                        ->searchable()
                        ->createOptionForm(CustomerForm::schema())
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
