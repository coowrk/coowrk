<?php

namespace App\Filament\App\Resources\ServiceTool\InformationAttorneyResource\Pages;

use App\Filament\App\Resources\ServiceTool\InformationAttorneyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInformationAttorneys extends ListRecords
{
    protected static string $resource = InformationAttorneyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
