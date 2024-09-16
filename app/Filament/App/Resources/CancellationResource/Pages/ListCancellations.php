<?php

namespace App\Filament\App\Resources\CancellationResource\Pages;

use App\Filament\App\Resources\CancellationResource;
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
