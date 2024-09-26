<?php

namespace App\Filament\App\Resources\Management;

use App\Filament\App\Resources\Management\CustomerResource\Pages;
use App\Filament\App\Resources\Management\CustomerResource\Forms\CustomerForm;
use App\Filament\App\Resources\Management\CustomerResource\Tables\CustomerTable;
use App\Models\Customer;
use Filament\Forms\Form;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Pages\Page;
use Filament\Resources\Resource;
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
    protected static ?int $navigationSort = 0;

    // subnavigation
    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Start;

    /**
     * Create a form for the create and edit resource.
     * 
     * @return Form
     */
    public static function form(Form $form): Form
    {
        return CustomerForm::make($form);
    }

    /**
     * Create a table for the listing resource.
     * 
     * @return Table 
     */
    public static function table(Table $table): Table
    {
        return CustomerTable::make($table);
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
