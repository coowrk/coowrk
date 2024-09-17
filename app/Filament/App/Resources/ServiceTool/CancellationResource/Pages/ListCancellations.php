<?php

namespace App\Filament\App\Resources\ServiceTool\CancellationResource\Pages;

use App\Filament\App\Resources\ServiceTool\CancellationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCancellations extends ListRecords
{
    protected static string $resource = CancellationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
