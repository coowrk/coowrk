<?php

namespace App\Filament\App\Resources\BrokerAuthorityResource\Pages;

use App\Filament\App\Resources\BrokerAuthorityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBrokerAuthorities extends ListRecords
{
    protected static string $resource = BrokerAuthorityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
