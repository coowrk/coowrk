<?php

namespace App\Filament\App\Resources\ServiceTool\CancellationResource\Pages;

use App\Filament\App\Resources\ServiceTool\CancellationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCancellation extends EditRecord
{
    // resource
    protected static string $resource = CancellationResource::class;

    /**
     * Set the header actions for this resource.
     * 
     * @return array
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
