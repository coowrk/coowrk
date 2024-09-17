<?php

namespace App\Filament\App\Resources\Management;

use App\Filament\Components\Forms\CustomerForm;
use App\Filament\App\Resources\Management\CustomerResource\Pages;
use App\Filament\Components\Enums\UserSalutationEnum;
use App\Filament\Exports\CustomerExporter;
use App\Filament\Imports\CustomerImporter;
use App\Models\Customer;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Filament\Tables;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Actions\ImportAction;
use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\Layout\Grid;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;

class CustomerResource extends Resource
{
    // model data
    protected static ?string $model = Customer::class;
    protected static ?string $modelLabel = 'Kunde';
    protected static ?string $pluralModelLabel = 'Kunden';

    // navigation
    protected static ?string $navigationIcon = 'heroicon-s-user-group';
    protected static ?string $navigationLabel = 'Kunden';
    protected static ?string $navigationGroup = 'Verwaltung';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(CustomerForm::schema());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // customer
                ColumnGroup::make('Kunde')
                    ->columns([
                        // salutation
                        TextColumn::make('salutation')
                            ->label('Anrede')
                            ->placeholder('Keine Angabe')
                            ->color(Color::Zinc)
                            ->searchable()
                            ->sortable()
                            ->toggleable(),

                        // full_name
                        TextColumn::make('full_name')
                            ->label('Name')
                            ->searchable(['first_name', 'last_name'])
                            ->sortable(['first_name', 'last_name'])
                    ]),

                // address
                ColumnGroup::make('Adresse')
                    ->columns([
                        // street
                        TextColumn::make('street')
                            ->label('Straße')
                            ->color(Color::Zinc)
                            ->formatStateUsing(
                                fn(Customer $record): string => "{$record->street} {$record->house_number}"
                            )
                            ->searchable(['street', 'house_number'])
                            ->sortable()
                            ->toggleable(),

                        // city
                        TextColumn::make('city')
                            ->label('Stadt')
                            ->color(Color::Zinc)
                            ->searchable('city')
                            ->sortable()
                            ->toggleable(),

                        // postalcode
                        TextColumn::make('postalcode')
                            ->label('Postleitzahl')
                            ->color(Color::Zinc)
                            ->searchable('postalcode')
                            ->sortable()
                            ->toggleable()
                    ]),

                // created_at
                TextColumn::make('created_at')
                    ->label('Erstellt am')
                    ->date('d.m.Y')
                    ->color(Color::Zinc)
                    ->alignEnd()
                    ->sortable()
            ])
            ->searchPlaceholder('Suche (Name, Straße, ...)')
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('salutation')
                    ->label('Anrede')
                    ->options(UserSalutationEnum::class)
                    ->native(false)
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->headerActions([
                Tables\Actions\ImportAction::make()
                    ->label('Kunden importieren')
                    ->importer(CustomerImporter::class)
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->paginated([10, 25, 50]);;
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
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }

    // global search results title
    public static function getGlobalSearchResultTitle(Model $record): string | Htmlable
    {
        return "{$record->first_name} {$record->last_name}";
    }

    // global searchable attributes
    public static function getGloballySearchableAttributes(): array
    {
        return ['first_name', 'last_name'];
    }
}
