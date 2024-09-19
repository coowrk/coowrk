<?php

namespace App\Filament\App\Resources\ServiceTool\ChangeOfSupervisorResource\Pages;

use App\Filament\App\Resources\ServiceTool\ChangeOfSupervisorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChangeOfSupervisors extends ListRecords
{
    // resource
    protected static string $resource = ChangeOfSupervisorResource::class;

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
