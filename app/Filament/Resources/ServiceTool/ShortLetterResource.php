<?php

namespace App\Filament\Resources\ServiceTool;

use App\Filament\Resources\ServiceTool\ShortLetterResource\Pages;
use App\Models\ShortLetter;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ShortLetterResource extends Resource
{

    // model data
    protected static ?string $model = ShortLetter::class;
    protected static ?string $modelLabel = 'Kurzbrief';
    protected static ?string $pluralModelLabel = 'Kurzbriefe';

    // navigation
    protected static ?string $navigationIcon = 'heroicon-s-envelope';
    protected static ?string $navigationLabel = 'Kurzbriefe';
    protected static ?string $navigationGroup = 'Service-Tools';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([]);
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
            'index' => Pages\ListShortLetters::route('/'),
            'create' => Pages\CreateShortLetter::route('/create'),
            'edit' => Pages\EditShortLetter::route('/{record}/edit'),
        ];
    }
}
