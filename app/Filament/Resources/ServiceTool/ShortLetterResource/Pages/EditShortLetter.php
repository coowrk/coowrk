<?php

namespace App\Filament\Resources\ServiceTool\ShortLetterResource\Pages;

use App\Filament\Resources\ServiceTool\ShortLetterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShortLetter extends EditRecord
{
    protected static string $resource = ShortLetterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
