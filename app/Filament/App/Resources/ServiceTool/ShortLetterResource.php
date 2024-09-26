<?php

namespace App\Filament\App\Resources\ServiceTool;

use App\Filament\App\Resources\ServiceTool\ShortLetterResource\Forms\ShortLetterForm;
use App\Filament\App\Resources\ServiceTool\ShortLetterResource\Pages;
use App\Filament\App\Resources\ServiceTool\ShortLetterResource\Tables\ShortLetterTable;
use App\Models\ShortLetter;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;

class ShortLetterResource extends Resource
{
    // tenant
    protected static ?string $tenantOwnershipRelationshipName = 'team';

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

    /**
     * How the record is presented on the global search modal.
     * 
     * @return array
     */
    public static function getGlobalSearchResultTitle(Model $record): string | Htmlable
    {
        return "{$record->title}";
    }

    /**
     * Set the attributes which should be searchable on the global search modal.
     * 
     * @return array
     */
    public static function getGloballySearchableAttributes(): array
    {
        return ['customer.first_name', 'customer.last_name', 'title'];
    }
}
