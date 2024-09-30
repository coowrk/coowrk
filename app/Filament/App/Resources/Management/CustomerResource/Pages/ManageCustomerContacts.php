<?php

namespace App\Filament\App\Resources\Management\CustomerResource\Pages;

use App\Filament\App\Resources\Management\CustomerResource;
use App\Filament\App\Resources\Management\CustomerResource\Forms\ManageCustomerContactsForm;
use App\Filament\App\Resources\Management\CustomerResource\Tables\ManageCustomerContactsTable;
use Filament\Forms\Form;
use Filament\Resources\Pages\ManageRelatedRecords;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Cache;

class ManageCustomerContacts extends ManageRelatedRecords
{
    // tenant
    protected static ?string $tenantOwnershipRelationshipName = 'team';

    // resource
    protected static string $resource = CustomerResource::class;

    // relationship
    protected static string $relationship = 'contacts';

    // navigation
    protected static ?string $navigationIcon = 'heroicon-s-at-symbol';
    protected static ?string $navigationGroup = 'Verknüpfungen';

    /**
     * Set the breadcrumbs for this resource.
     * 
     * @return array
     */
    public function getBreadcrumbs(): array
    {
        return [
            CustomerResource::getUrl('index') => 'Kunden',
            CustomerResource::getUrl('view', [$this->record->id]) => $this->record->full_name,
            $this->getNavigationLabel()
        ];
    }

    /**
     * Set the resource page title.
     * 
     * @return string|Htmlable
     */
    public function getTitle(): string | Htmlable
    {
        return $this->record->full_name;
    }

    /**
     * Set the navigation label for this resource.
     * 
     * @return string
     */
    public static function getNavigationLabel(): string
    {
        return 'Kontaktmöglichkeiten';
    }

    /**
     * Create a form for the create and edit resource.
     * 
     * @return Form
     */
    public function form(Form $form): Form
    {
        return ManageCustomerContactsForm::make($form);
    }

    /**
     * Create a table for the listing resource.
     * 
     * @return Table 
     */
    public function table(Table $table): Table
    {
        return ManageCustomerContactsTable::make($table);
    }
}
