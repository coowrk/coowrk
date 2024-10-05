<?php

namespace App\Filament\App\Resources\Management\CustomerResource\Pages;

use App\Filament\App\Resources\Management\CustomerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomers extends ListRecords
{
    // resource
    protected static string $resource = CustomerResource::class;

    /**
     * Set the header actions for this resource.
     * 
     * @return array
     */
    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}
