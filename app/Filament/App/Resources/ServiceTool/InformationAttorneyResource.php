<?php

namespace App\Filament\App\Resources\ServiceTool;

use App\Filament\App\Resources\ServiceTool\InformationAttorneyResource\Pages;
use App\Models\InformationAttorney;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class InformationAttorneyResource extends Resource
{
    // model data
    protected static ?string $model = InformationAttorney::class;
    protected static ?string $modelLabel = 'Auskunftsvollmacht';
    protected static ?string $pluralModelLabel = 'Auskunftsvollmächte';

    // navigation
    protected static ?string $navigationIcon = 'heroicon-s-user-group';
    protected static ?string $navigationLabel = 'Auskunftsvollmächte';
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
            'index' => Pages\ListInformationAttorneys::route('/'),
            'create' => Pages\CreateInformationAttorney::route('/create'),
            'edit' => Pages\EditInformationAttorney::route('/{record}/edit'),
        ];
    }
}
