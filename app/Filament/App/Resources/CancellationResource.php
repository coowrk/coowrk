<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\CancellationResource\Pages;
use App\Filament\App\Resources\CancellationResource\RelationManagers;
use App\Models\Cancellation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CancellationResource extends Resource
{
    protected static ?string $model = Cancellation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
