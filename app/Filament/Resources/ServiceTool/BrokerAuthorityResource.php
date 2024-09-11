<?php

namespace App\Filament\Resources\ServiceTool;

use App\Filament\Resources\ServiceTool\BrokerAuthorityResource\Pages;
use App\Models\BrokerAuthority;
use App\Models\Customer;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BrokerAuthorityResource extends Resource
{
    protected static ?string $model = BrokerAuthority::class;
    protected static ?string $modelLabel = 'Maklervollmacht';
    protected static ?string $pluralModelLabel = 'Maklervollmächte';

    // navigation
    protected static ?string $navigationIcon = 'heroicon-s-envelope';
    protected static ?string $navigationLabel = 'Maklervollmächte';
    protected static ?string $navigationGroup = 'Service-Tools';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

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
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListBrokerAuthorities::route('/'),
            'create' => Pages\CreateBrokerAuthority::route('/create'),
            'edit' => Pages\EditBrokerAuthority::route('/{record}/edit'),
        ];
    }
}
