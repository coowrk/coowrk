<?php

namespace App\Filament\Resources\Management;

use App\Filament\Components\CustomerForm;
use App\Filament\Resources\Management\CustomerResource\Pages;
use App\Models\Customer;
use Filament\Forms\Form;
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
            ->schema(CustomerForm::schema());
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
            ->schema([]);
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
            'view' => Pages\ViewCustomer::route('/{record}'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}
