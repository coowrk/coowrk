<?php

namespace App\Filament\App\Resources\ServiceTool\BrokerAttorneyResource\Pages;

use App\Filament\App\Resources\ServiceTool\BrokerAttorneyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBrokerAttorney extends EditRecord
{
    protected static string $resource = BrokerAttorneyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
