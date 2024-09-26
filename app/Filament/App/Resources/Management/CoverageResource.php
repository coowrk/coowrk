<?php

namespace App\Filament\App\Resources\Management;

use App\Filament\App\Resources\Management\CoverageResource\Pages;
use App\Filament\App\Resources\CoverageResource\RelationManagers;
use App\Filament\App\Resources\Management\CoverageResource\Tables\CoverageTable;
use App\Filament\App\Resources\Management\CustomerResource\Forms\CoverageForm;
use App\Models\Coverage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CoverageResource extends Resource
{
    // model data
    protected static ?string $model = Coverage::class;
    protected static ?string $modelLabel = 'Umdeckung';
    protected static ?string $pluralModelLabel = 'Umdeckungen';

    // navigation
    protected static ?string $navigationIcon = 'heroicon-s-arrows-right-left';
    protected static ?string $navigationLabel = 'Umdeckungen';
    protected static ?string $navigationGroup = 'Verwaltung';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return CoverageForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return CoverageTable::make($table);
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
            'index' => Pages\ListCoverages::route('/'),
            'create' => Pages\CreateCoverage::route('/create'),
            'edit' => Pages\EditCoverage::route('/{record}/edit'),
        ];
    }

    /**
     * How the record is presented on the global search modal.
     * 
     * @return array
     */
    public static function getGlobalSearchResultTitle(Model $record): string | Htmlable
    {
        return "{$record->contract_number}";
    }

    /**
     * Set the extra attributes which will be presented on the global search modal.
     * 
     * @return array
     */
    public static function getGlobalSearchResultDetails(Model $record): array
    {
        return [
            'Ablaufdatum' => $record->expiration_at,
            'Umdeckdatum' => $record->coverable_at,
        ];
    }

    /**
     * Set the attributes which should be searchable on the global search modal.
     * 
     * @return array
     */
    public static function getGloballySearchableAttributes(): array
    {
        return ['customer.first_name', 'customer.last_name', 'contract_number'];
    }
}
