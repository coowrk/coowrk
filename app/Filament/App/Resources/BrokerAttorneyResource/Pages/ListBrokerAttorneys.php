<?php

namespace App\Filament\App\Resources\BrokerAttorneyResource\Pages;

use App\Filament\App\Resources\BrokerAttorneyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBrokerAttorneys extends ListRecords
{
    protected static string $resource = BrokerAttorneyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
