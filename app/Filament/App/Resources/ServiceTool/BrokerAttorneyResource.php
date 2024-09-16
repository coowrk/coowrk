<?php

namespace App\Filament\App\Resources\ServiceTool;

use App\Filament\App\Resources\BrokerAttorneyResource\Pages;
use App\Models\BrokerAttorney;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BrokerAttorneyResource extends Resource
{
    // model data
    protected static ?string $model = BrokerAttorney::class;
    protected static ?string $modelLabel = 'Maklervollmacht';
    protected static ?string $pluralModelLabel = 'Maklervollmächte';

    // navigation
    protected static ?string $navigationIcon = 'heroicon-s-user-group';
    protected static ?string $navigationLabel = 'Maklervollmächte';
    protected static ?string $navigationGroup = 'Service-Tool';

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
                //
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
            'index' => Pages\ListBrokerAttorneys::route('/'),
            'create' => Pages\CreateBrokerAttorney::route('/create'),
            'edit' => Pages\EditBrokerAttorney::route('/{record}/edit'),
        ];
    }
}
