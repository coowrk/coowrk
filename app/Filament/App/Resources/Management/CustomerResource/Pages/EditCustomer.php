<?php

namespace App\Filament\App\Resources\Management\CustomerResource\Pages;

use App\Filament\App\Resources\Management\CustomerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Contracts\Support\Htmlable;

class EditCustomer extends EditRecord
{
    // resource
    protected static string $resource = CustomerResource::class;

    // navigation
    protected static ?string $navigationIcon = 'heroicon-s-paint-brush';

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
        return 'Bearbeiten';
    }

    /**
     * Set the header actions for this resource.
     * 
     * @return array
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
