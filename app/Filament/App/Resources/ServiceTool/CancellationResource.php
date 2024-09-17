<?php

namespace App\Filament\App\Resources\ServiceTool;

use App\Filament\App\Resources\ServiceTool\CancellationResource\Pages;
use App\Models\Cancellation;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CancellationResource extends Resource
{
    // model data
    protected static ?string $model = Cancellation::class;
    protected static ?string $modelLabel = 'Kündigung';
    protected static ?string $pluralModelLabel = 'Kündigungen';

    // navigation
    protected static ?string $navigationIcon = 'heroicon-s-user-group';
    protected static ?string $navigationLabel = 'Kündigungen';
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
            'index' => Pages\ListCancellations::route('/'),
            'create' => Pages\CreateCancellation::route('/create'),
            'edit' => Pages\EditCancellation::route('/{record}/edit'),
        ];
    }
}
