<?php

namespace App\Filament\Components\Forms;

use App\Filament\Components\Enums\ShortLetterWeAskForOptionsEnum;
use App\Filament\Components\Enums\ShortLetterYouReceiveThisProcessOptionsEnum;
use App\Models\Customer;
use Filament\Forms\Components\{DatePicker, Grid, Group, Section, Select, Textarea, TextInput};
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Collection;
use Livewire\Component;
use Saade\FilamentAutograph\Forms\Components\SignaturePad;

class ShortLetterForm
{
    public static function schema(): array
    {
        return [
            Grid::make(3)
                ->schema([
                    Section::make()
                        ->columnSpan(1)
                        ->schema([
                            Select::make('customer_id')
                                ->label('Empfänger')
                                ->placeholder('Empfänger im System ermitteln')
                                ->relationship(name: 'team.customers')
                                ->getOptionLabelFromRecordUsing(fn(Customer $record) => "{$record->first_name} {$record->last_name}")
                                ->searchable(['first_name', 'last_name'])
                                ->selectablePlaceholder(false)
                                ->createOptionForm(CustomerForm::schema())
                                ->createOptionAction(fn($action) => $action->modalWidth('7xl'))
                                ->createOptionModalHeading('Empfänger erstellen')
                                ->required()
                                ->live()
                                ->afterStateUpdated(function (Component $livewire, string $state) {
                                    $livewire->customer_signatures = Customer::find($state)->signatures->pluck('name', 'id');
                                })
                        ]),

                    Group::make([
                        Section::make('Kurzbrief')
                            ->collapsible()
                            ->columnSpan(2)
                            ->columns(2)
                            ->schema([
                                TextInput::make('sent_from')
                                    ->label('Stadt')
                                    ->required()
                                    ->default(filament()->getTenant()->city),

                                DatePicker::make('sent_at')
                                    ->label('Datum')
                                    ->native(false)
                                    ->default(now())
                                    ->displayFormat('d. F Y')
                                    ->required(),

                                TextInput::make('title')
                                    ->label('Betreff')
                                    ->columnSpanFull()
                                    ->required(),

                                Textarea::make('description')
                                    ->label('Beschreibung')
                                    ->default('Zur Vereinfachung unseres Schriftverkehrs senden wir Ihnen diesen Kurzbrief.')
                                    ->columnSpanFull()
                                    ->rows(3)
                                    ->required(),

                                Select::make('we_ask_for_options')
                                    ->label('Wir bitten um ...')
                                    ->native(false)
                                    ->options(ShortLetterWeAskForOptionsEnum::class)
                                    ->multiple()
                                    ->required(),

                                Select::make('you_receive_this_process_options')
                                    ->label('Sie erhalten den Vorgang ...')
                                    ->native(false)
                                    ->options(ShortLetterYouReceiveThisProcessOptionsEnum::class)
                                    ->multiple()
                                    ->required(),
                            ]),

                        Section::make('Unterschrift')
                            ->headerActions([
                                Action::make('search_customer_signature')
                                    ->label('Unterschrift ermitteln')
                                    ->disabled(fn(Get $get): bool => !filled($get('customer_id')))
                                    ->modalWidth('sm')
                                    ->form([
                                        Select::make('signature')
                                            ->live()
                                            ->searchable()
                                            ->native(false)
                                            ->options(fn(Component $livewire): Collection => $livewire->customer_signatures)
                                    ])
                            ])
                            ->schema([
                                SignaturePad::make('signature')
                                    ->label('Unterschrift')
                                    ->columnSpan(2)
                                    ->confirmable()
                            ])
                    ])->columnSpan(2)
                ])
        ];
    }
}
