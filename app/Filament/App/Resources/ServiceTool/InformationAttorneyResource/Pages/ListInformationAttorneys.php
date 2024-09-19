<?php

namespace App\Filament\App\Resources\ServiceTool\InformationAttorneyResource\Pages;

use App\Filament\App\Resources\ServiceTool\InformationAttorneyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInformationAttorneys extends ListRecords
{
    // resource
    protected static string $resource = InformationAttorneyResource::class;

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
