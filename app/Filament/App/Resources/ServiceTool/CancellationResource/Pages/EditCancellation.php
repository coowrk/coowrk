<?php

namespace App\Filament\App\Resources\CancellationResource\Pages;

use App\Filament\App\Resources\ServiceTool\CancellationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCancellation extends EditRecord
{
    protected static string $resource = CancellationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
