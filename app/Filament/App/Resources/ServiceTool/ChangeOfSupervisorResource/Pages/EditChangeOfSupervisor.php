<?php

namespace App\Filament\App\Resources\ServiceTool\ChangeOfSupervisorResource\Pages;

use App\Filament\App\Resources\ServiceTool\ChangeOfSupervisorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChangeOfSupervisor extends EditRecord
{
    protected static string $resource = ChangeOfSupervisorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
