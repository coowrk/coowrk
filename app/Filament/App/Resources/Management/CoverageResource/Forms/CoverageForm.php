<?php

namespace App\Filament\App\Resources\Management\CoverageResource\Forms;

use App\Components\Enums\Coverage\ExistingContractsEnum;
use App\Components\Enums\Coverage\SectionEnum;
use App\Filament\App\Resources\Management\CustomerResource\Forms\CustomerForm;
use App\Models\Customer;
use Carbon\Carbon;
use Filament\Forms\{Form, Set};
use Filament\Forms\Components\{DatePicker, Grid, Group, Section, Select, TextInput, ToggleButtons};
use TomatoPHP\FilamentHelpers\Contracts\FormBuilder;

class CoverageForm extends FormBuilder
{
    public function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(3)
                ->schema([
                    Group::make([
                        Section::make()
                            ->schema([
                                // customer_id
                                Select::make('customer_id')
                                    ->label('Kunde')
                                    ->placeholder('Empfänger im System ermitteln')
                                    ->relationship(name: 'team.customers')
                                    ->getOptionLabelFromRecordUsing(fn(Customer $record) => "{$record->first_name} {$record->last_name}")
                                    ->searchable(['first_name', 'last_name'])
                                    ->selectablePlaceholder(false)
                                    ->createOptionForm(fn(Form $form): Form => CustomerForm::make($form))
                                    ->createOptionAction(fn($action) => $action->modalWidth('7xl'))
                                    ->createOptionModalHeading('Empfänger erstellen')
                                    ->required()
                                    ->live(),
                            ]),

                        Section::make()
                            ->columns(1)
                            ->schema([
                                ToggleButtons::make('existing_contracts')
                                    ->label('Bestehende Verträge vorhanden?')
                                    ->boolean()
                                    ->grouped()
                                    ->default('0')
                                    ->options(ExistingContractsEnum::class)
                            ]),
                    ]),

                    Group::make([
                        Section::make('Vertrag')
                            ->columns(4)
                            ->schema([
                                // contract_number
                                TextInput::make('contract_number')
                                    ->label('Vertragsnummer')
                                    ->columnSpan(1)
                                    ->required(),

                                // sections
                                Select::make('sections')
                                    ->label('Sparte(n)')
                                    ->native(false)
                                    ->multiple()
                                    ->options(SectionEnum::class)
                                    ->columnSpan(3),

                                // expiration_at
                                DatePicker::make('expiration_at')
                                    ->label('Ablauf')
                                    ->native(false)
                                    ->displayFormat('d. F Y')
                                    ->required()
                                    ->columnSpan(2)
                                    ->live()
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('coverable_at', Carbon::parse($state)->subYear(1))),

                                // coverable_at
                                DatePicker::make('coverable_at')
                                    ->label('Umdeckbar')
                                    ->native(false)
                                    ->displayFormat('d. F Y')
                                    ->required()
                                    ->columnSpan(2),
                            ]),
                    ])->columnSpan(2)
                ]),
        ]);
    }
}
