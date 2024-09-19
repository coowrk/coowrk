<?php

namespace App\Filament\App\Resources\ServiceTool;

use App\Filament\App\Resources\ServiceTool\BrokerAttorneyResource\Pages;
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
    protected static ?string $navigationIcon = 'icon-shield-exclamation';
    protected static ?string $navigationLabel = 'Maklervollmächte';
    protected static ?string $navigationGroup = 'Service-Tool';
    protected static ?int $navigationSort = 0;

    /**
     * Create a form for the create and edit resource.
     * 
     * @return Form
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    /**
     * Create a table for the listing resource.
     * 
     * @return Table 
     */
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

    /**
     * Get all available pages for this resource.
     * 
     * @return array
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBrokerAttorneys::route('/'),
            'create' => Pages\CreateBrokerAttorney::route('/create'),
            'edit' => Pages\EditBrokerAttorney::route('/{record}/edit'),
        ];
    }
}
