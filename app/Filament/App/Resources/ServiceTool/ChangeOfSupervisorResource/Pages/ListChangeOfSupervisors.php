<?php

namespace App\Filament\App\Resources\ServiceTool\ChangeOfSupervisorResource\Pages;

use App\Filament\App\Resources\ServiceTool\ChangeOfSupervisorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChangeOfSupervisors extends ListRecords
{
    protected static string $resource = ChangeOfSupervisorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
