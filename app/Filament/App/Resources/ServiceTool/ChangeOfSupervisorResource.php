<?php

namespace App\Filament\App\Resources\ServiceTool;

use App\Filament\App\Resources\ServiceTool\ChangeOfSupervisorResource\Pages;
use App\Models\ChangeOfSupervisor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ChangeOfSupervisorResource extends Resource
{
    // model data
    protected static ?string $model = ChangeOfSupervisor::class;
    protected static ?string $modelLabel = 'Betreuerwechsel';
    protected static ?string $pluralModelLabel = 'Betreuerwechsel';

    // navigation
    protected static ?string $navigationIcon = 'icon-users';
    protected static ?string $navigationLabel = 'Betreuerwechsel';
    protected static ?string $navigationGroup = 'Service-Tool';
    protected static ?int $navigationSort = 2;

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
            'index' => Pages\ListChangeOfSupervisors::route('/'),
            'create' => Pages\CreateChangeOfSupervisor::route('/create'),
            'edit' => Pages\EditChangeOfSupervisor::route('/{record}/edit'),
        ];
    }
}
