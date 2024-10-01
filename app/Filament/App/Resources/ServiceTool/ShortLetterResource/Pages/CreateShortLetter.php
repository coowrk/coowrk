<?php

namespace App\Filament\App\Resources\ServiceTool\ShortLetterResource\Pages;

use App\Filament\App\Resources\ServiceTool\ShortLetterResource;
use Filament\Resources\Pages\CreateRecord;

class CreateShortLetter extends CreateRecord
{
    // resource
    protected static string $resource = ShortLetterResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }
}
