<?php

namespace App\Filament\App\Resources\ServiceTool\ChangeOfSupervisorResource\Forms;

use App\Filament\App\Resources\Management\CustomerResource\Forms\CustomerForm;
use App\Models\Customer;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use TomatoPHP\FilamentHelpers\Contracts\FormBuilder;

class ChangeOfSupervisorForm extends FormBuilder
{
    public function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Absender')
                ->description('Der Absender ist unser Kunde.')
                ->aside()
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
                ]),

            Section::make('Empfänger')
                ->description('Der Empfänger ist die Gesellschaft.')
                ->aside()
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
                ])
        ]);
    }
}
