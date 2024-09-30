<?php

namespace App\Filament\App\Resources\Management\CustomerResource\Pages;

use App\Filament\App\Resources\Management\CustomerResource;
use App\Filament\App\Resources\Management\CustomerResource\Forms\ManageCustomerSignaturesForm;
use App\Filament\App\Resources\Management\CustomerResource\Tables\ManageCustomerSignaturesTable;
use Filament\Forms\Form;
use Filament\Resources\Pages\ManageRelatedRecords;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Cache;

class ManageCustomerSignatures extends ManageRelatedRecords
{
    // tenant
    protected static ?string $tenantOwnershipRelationshipName = 'team';

    // resource
    protected static string $resource = CustomerResource::class;

    // relationship
    protected static string $relationship = 'signatures';

    // navigation
    protected static ?string $navigationIcon = 'heroicon-m-finger-print';
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
        return 'Unterschriften';
    }

    /**
     * Create a form for the create and edit resource.
     * 
     * @return Form
     */
    public function form(Form $form): Form
    {
        return ManageCustomerSignaturesForm::make($form);
    }

    /**
     * Create a table for the listing resource.
     * 
     * @return Table 
     */
    public function table(Table $table): Table
    {
        return ManageCustomerSignaturesTable::make($table);
    }
}
