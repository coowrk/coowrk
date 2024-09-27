<?php

namespace App\Filament\App\Resources\ServiceTool\ShortLetterResource\Forms;

use App\Components\Enums\ShortLetter\{StatusEnum, WeAskForOptionsEnum, YouReceiveThisProcessOptionsEnum};
use App\Filament\App\Resources\Management\CustomerResource\Forms\{CustomerForm, ManageCustomerSignaturesForm};
use Filament\Forms\Form;
use TomatoPHP\FilamentHelpers\Contracts\FormBuilder;
use App\Models\{Customer, Signature};
use Filament\Forms\Components\{Actions, DatePicker, Fieldset, Grid, Group, Hidden, Placeholder, Section, Select, Textarea, TextInput, ToggleButtons};
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\{Get, Set};
use Illuminate\Support\HtmlString;

class ShortLetterForm extends FormBuilder
{
    public function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(3)
                ->schema([
                    Group::make([
                        Section::make()
                            ->columnSpan(1)
                            ->schema([
                                // customer_id
                                Select::make('customer_id')
                                    ->label('Empfänger')
                                    ->placeholder('Empfänger im System ermitteln')
                                    ->relationship(name: 'team.customers')
                                    ->getOptionLabelFromRecordUsing(fn(Customer $record) => "{$record->first_name} {$record->last_name}")
                                    ->searchable(['first_name', 'last_name'])
                                    ->selectablePlaceholder(false)
                                    ->createOptionForm(fn(Form $form): Form => CustomerForm::make($form))
                                    ->createOptionAction(fn($action) => $action->modalWidth('7xl'))
                                    ->createOptionModalHeading('Empfänger erstellen')
                                    ->required()
                                    ->live()
                            ]),

                        Fieldset::make('Unterschrift')
                            ->schema([
                                // signature_id
                                Hidden::make('signature_id'),

                                // placeholder
                                // signature_image
                                Placeholder::make('signature_image')
                                    ->label('Unterschrift')
                                    ->hiddenLabel(true)
                                    ->visible(fn(Get $get): bool => filled($get('signature_id')))
                                    ->columnSpanFull()
                                    ->content(fn(Get $get): HtmlString => new HtmlString('<img src=' . Signature::find($get('signature_id'))->signature . '>'))
                            ]),

                        Actions::make([
                            // action: create_customer_signature
                            Action::make('create_customer_signature')
                                ->label('Unterschreiben')
                                ->disabled(fn(Get $get): bool => !filled($get('customer_id')))
                                ->modalWidth('5xl')
                                ->form(fn(Form $form): Form => ManageCustomerSignaturesForm::make($form))
                                ->action(fn(Get $get, Set $set, array $data) => $set('data.signature_id', Customer::find($get('data.customer_id', isAbsolute: true))->signatures()->create($data)->id, isAbsolute: true)),

                            // action: search_customer_signature
                            Action::make('search_customer_signature')
                                ->label('Ermitteln')
                                ->disabled(fn(Get $get): bool => !filled($get('customer_id')))
                                ->modalWidth('sm')
                                ->action(fn(Set $set, array $data) => $set('data.signature_id', $data['signature'], isAbsolute: true))
                                ->form([
                                    Select::make('signature')
                                        ->live()
                                        ->searchable()
                                        ->native(false)
                                        ->live()
                                        ->options(fn(Get $get) => Customer::find($get('data.customer_id', isAbsolute: true))->signatures->pluck('name', 'id'))
                                ]),

                            // action: unset_customer_signature
                            Action::make('unset_customer_signature')
                                ->label('Zurücksetzen')
                                ->disabled(fn(Get $get): bool => !filled($get('signature_id')))
                                ->color('danger')
                                ->action(fn(Set $set) => $set('data.signature_id', null, isAbsolute: true))
                        ])->alignEnd(),
                    ])->columnSpan(1),

                    Group::make([
                        Section::make()
                            ->columnSpan(2)
                            ->schema([
                                ToggleButtons::make('status')
                                    ->options(StatusEnum::class)
                                    ->inline()
                                    ->columnSpan(2),
                            ]),

                        Section::make('Kurzbrief')
                            ->collapsible()
                            ->columnSpan(2)
                            ->columns(2)
                            ->schema([
                                // sent_from
                                TextInput::make('sent_from')
                                    ->label('Stadt')
                                    ->required()
                                    ->default(filament()->getTenant()->city),

                                // sent_at
                                DatePicker::make('sent_at')
                                    ->label('Datum')
                                    ->native(false)
                                    ->default(now())
                                    ->displayFormat('d. F Y')
                                    ->required(),

                                // title
                                TextInput::make('title')
                                    ->label('Betreff')
                                    ->columnSpanFull()
                                    ->required(),

                                // description
                                Textarea::make('description')
                                    ->label('Beschreibung')
                                    ->default('Zur Vereinfachung unseres Schriftverkehrs senden wir Ihnen diesen Kurzbrief.')
                                    ->columnSpanFull()
                                    ->rows(3)
                                    ->required(),

                                // we_ask_for_options
                                Select::make('we_ask_for_options')
                                    ->label('Wir bitten um ...')
                                    ->native(false)
                                    ->options(WeAskForOptionsEnum::class)
                                    ->multiple()
                                    ->required(),

                                // you_receive_this_process_options
                                Select::make('you_receive_this_process_options')
                                    ->label('Sie erhalten den Vorgang ...')
                                    ->native(false)
                                    ->options(YouReceiveThisProcessOptionsEnum::class)
                                    ->multiple()
                                    ->required(),
                            ]),
                    ])->columnSpan(2)
                ])
        ]);
    }
}
