<?php

namespace App\Filament\Resources\ServiceTool\BrokerAuthorityResource\Pages;

use App\Filament\Resources\ServiceTool\BrokerAuthorityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBrokerAuthority extends EditRecord
{
    protected static string $resource = BrokerAuthorityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
