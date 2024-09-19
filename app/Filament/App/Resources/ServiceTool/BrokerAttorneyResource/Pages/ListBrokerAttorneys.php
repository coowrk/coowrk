<?php

namespace App\Filament\App\Resources\ServiceTool\BrokerAttorneyResource\Pages;

use App\Filament\App\Resources\ServiceTool\BrokerAttorneyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBrokerAttorneys extends ListRecords
{
    // resource
    protected static string $resource = BrokerAttorneyResource::class;

    /**
     * Set the header actions for this resource.
     * 
     * @return array
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
