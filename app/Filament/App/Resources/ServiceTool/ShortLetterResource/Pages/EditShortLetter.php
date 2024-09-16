<?php

namespace App\Filament\App\Resources\ShortLetterResource\Pages;

use App\Filament\App\Resources\ServiceTool\ShortLetterResource;
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
