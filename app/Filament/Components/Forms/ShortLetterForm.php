<?php

// TODO
// ! Kunden die über Select erstellt werden, werden ohne team_id abgespeichert
// ! Ebenfalls werden alle Kunden ohne berücksichtigung auf team_id gelistet

namespace App\Filament\Components\Forms;

use App\Filament\Components\Enums\ShortLetterWeAskForOptionsEnum;
use App\Filament\Components\Enums\ShortLetterYouReceiveThisProcessOptionsEnum;
use App\Models\Customer;
use Filament\Facades\Filament;
use Filament\Forms\Components\{DatePicker, Grid, Section, Select, Textarea, TextInput};

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
                                // ->createOptionUsing(fn($data) => Filament::getTenant()->customers()->create($data))
                                ->createOptionForm(CustomerForm::schema())
                                ->createOptionAction(fn($action) => $action->modalWidth('7xl'))
                                ->createOptionModalHeading('Empfänger erstellen')
                                ->required()
                        ]),

                    Section::make('Kurzbrief')
                        ->collapsible()
                        ->columnSpan(2)
                        ->columns(2)
                        ->schema([
                            TextInput::make('sent_from')
                                ->label('Stadt')
                                ->required(),

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
                                ->required()
                        ])
                ])
        ];
    }
}
