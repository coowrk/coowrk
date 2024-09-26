<?php

namespace App\Filament\App\Resources\Management\CoverageResource\Pages;

use App\Filament\App\Resources\Management\CoverageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCoverages extends ListRecords
{
    protected static string $resource = CoverageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
