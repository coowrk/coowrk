<?php

namespace App\Filament\App\Resources\InformationAttorneyResource\Pages;

use App\Filament\App\Resources\InformationAttorneyResource;
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
