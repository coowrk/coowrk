<?php

namespace App\Filament\App\Resources\ServiceTool;

use App\Filament\App\Resources\ServiceTool\ShortLetterResource\Pages;
use App\Filament\Components\Forms\ShortLetterForm;
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
        return $form
            ->schema(ShortLetterForm::schema());
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
                // customer
                ColumnGroup::make('Kunde')
                    ->columns([
                        // salutation
                        TextColumn::make('customer.salutation')
                            ->label('Anrede')
                            ->placeholder('Keine Angabe')
                            ->color(Color::Zinc)
                            ->searchable()
                            ->sortable()
                            ->toggleable(),

                        // full_name
                        TextColumn::make('customer.full_name')
                            ->label('Name')
                            ->searchable(['first_name', 'last_name'])
                            ->sortable(['first_name', 'last_name'])
                    ]),

                // short-letter
                ColumnGroup::make('Brief')
                    ->columns([
                        // salutation
                        TextColumn::make('title')
                            ->label('Betreff')
                            ->placeholder('Keine Angabe')
                            ->searchable()
                            ->sortable(),
                    ]),

                // created_at
                TextColumn::make('created_at')
                    ->label('Erstellt am')
                    ->date('d.m.Y')
                    ->color(Color::Zinc)
                    ->alignEnd()
                    ->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->paginated([10, 25, 50]);
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
