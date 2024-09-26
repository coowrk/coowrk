<?php

namespace App\Filament\App\Resources\ServiceTool;

use App\Filament\App\Resources\ServiceTool\ShortLetterResource\Forms\ShortLetterForm;
use App\Filament\App\Resources\ServiceTool\ShortLetterResource\Pages;
use App\Filament\App\Resources\ServiceTool\ShortLetterResource\Tables\ShortLetterTable;
use App\Models\ShortLetter;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Filament\Tables;
use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\TextColumn;
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
    protected static ?string $navigationGroup = 'Service-Tool';
    protected static ?int $navigationSort = 4;

    /**
     * Create a form for the create and edit resource.
     * 
     * @return Form
     */
    public static function form(Form $form): Form
    {
        return ShortLetterForm::make($form);
    }

    /**
     * Create a table for the listing resource.
     * 
     * @return Table 
     */
    public static function table(Table $table): Table
    {
        return ShortLetterTable::make($table);
    }

    /**
     * Get all available pages for this resource.
     * 
     * @return array
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListShortLetters::route('/'),
            'create' => Pages\CreateShortLetter::route('/create'),
            'edit' => Pages\EditShortLetter::route('/{record}/edit'),
        ];
    }
}
