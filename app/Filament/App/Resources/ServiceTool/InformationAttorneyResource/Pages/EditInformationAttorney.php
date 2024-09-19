<?php

namespace App\Filament\App\Resources\ServiceTool\InformationAttorneyResource\Pages;

use App\Filament\App\Resources\ServiceTool\InformationAttorneyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInformationAttorney extends EditRecord
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
            Actions\DeleteAction::make(),
        ];
    }
}
