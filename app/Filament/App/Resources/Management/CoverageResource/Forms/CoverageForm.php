<?php

namespace App\Filament\App\Resources\Management\CustomerResource\Forms;

use App\Components\Enums\Coverage\SectionEnum;
use App\Filament\App\Resources\Management\CustomerResource\Forms\CustomerForm;
use App\Models\Customer;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use TomatoPHP\FilamentHelpers\Contracts\FormBuilder;

class CoverageForm extends FormBuilder
{
    public function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Kunde')
                ->aside()
                ->columns(3)
                ->schema([
                    // customer_id
                    Select::make('customer_id')
                        ->label('Kunde')
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
                        ->columnSpan(2),

                    // existing_contracts
                    Toggle::make('existing_contracts')
                        ->label('Bestehende Verträge')
                        ->inline(false)
                ]),

            Section::make('Vertrag')
                ->aside()
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
                        ->columnSpan(2),

                    // coverable_at
                    DatePicker::make('coverable_at')
                        ->label('Umdeckbar')
                        ->native(false)
                        ->displayFormat('d. F Y')
                        ->default(now())
                        ->required()
                        ->columnSpan(2),
                ]),

            Section::make('Status')
                ->aside()
                ->columns(1)
                ->schema([
                    Toggle::make('coverage_done')
                        ->label('Umdeckung abgeschlossen')
                ]),
        ]);
    }
}
