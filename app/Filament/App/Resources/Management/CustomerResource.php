<?php

namespace App\Filament\App\Resources\Management;

use App\Filament\Components\Forms\CustomerForm;
use App\Filament\App\Resources\Management\CustomerResource\Pages;
use App\Filament\Components\Enums\UserSalutationEnum;
use App\Filament\Imports\CustomerImporter;
use App\Models\Customer;
use Filament\Forms\Form;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Pages\Page;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Filament\Tables;
use Filament\Tables\Columns\{ColumnGroup, TextColumn};
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

    // subnavigation
    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Start;

    /**
     * Create a form for the create and edit resource.
     * 
     * @return Form
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema(CustomerForm::schema());
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
            ->paginated([10, 25, 50])
            ->recordUrl(fn(Customer $record): string => self::getUrl('view', [$record]));
    }

    /**
     * Get all available pages for this resource.
     * 
     * @return array
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'view' => Pages\ViewCustomer::route('/{record}'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
            'contacts' => Pages\ManageCustomerContacts::route('/{record}/contacts'),
            'signatures' => Pages\ManageCustomerSignatures::route('/{record}/signatures'),
        ];
    }

    /**
     * Set the sub navigation items.
     * 
     * @return array
     */
    public static function getRecordSubNavigation(Page $page): array
    {
        return $page->generateNavigationItems([
            Pages\ViewCustomer::class,
            Pages\EditCustomer::class,
            Pages\ManageCustomerContacts::class,
            Pages\ManageCustomerSignatures::class
        ]);
    }

    /**
     * How the record is presented on the global search modal.
     * 
     * @return array
     */
    public static function getGlobalSearchResultTitle(Model $record): string | Htmlable
    {
        return "{$record->first_name} {$record->last_name}";
    }

    /**
     * Set the attributes which should be searchable on the global search modal.
     * 
     * @return array
     */
    public static function getGloballySearchableAttributes(): array
    {
        return ['first_name', 'last_name', 'street', 'postalcode', 'city', 'contacts.value'];
    }
}
