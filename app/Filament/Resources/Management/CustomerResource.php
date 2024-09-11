<?php

namespace App\Filament\Resources\Management;

use App\Filament\Resources\Management\CustomerResource\Pages;
use App\Models\Customer;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Infolists\Components\Grid as InfolistGrid;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CustomerResource extends Resource
{
    // model data
    protected static ?string $model = Customer::class;
    protected static ?string $modelLabel = 'Kunde';
    protected static ?string $pluralModelLabel = 'Kunden';

    // navigation
    protected static ?string $navigationIcon = 'heroicon-s-user-group';
    protected static ?string $navigationLabel = 'Kunden';
    protected static ?string $navigationGroup = 'Verwaltung';

    // form
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
            ]);
    }

    // table
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Stack::make([
                    TextColumn::make('first_name')
                        ->weight(FontWeight::Medium)
                        ->state(function (Customer $customer) {
                            return "{$customer->first_name} {$customer->last_name}";
                        })
                        ->searchable(['first_name', 'last_name']),

                    TextColumn::make('street')
                        ->state(function (Customer $customer) {
                            return "{$customer->street} {$customer->house_number}";
                        })
                        ->color('gray')
                        ->searchable(),

                    TextColumn::make('city')
                        ->state(function (Customer $customer) {
                            return "{$customer->postcode} {$customer->city}";
                        })
                        ->color('gray')
                        ->searchable(['postcode', 'city']),
                ])
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    // infolist
    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                InfolistGrid::make([])
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}
