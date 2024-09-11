<?php

namespace App\Filament\Resources\ServiceTool\ShortLetterResource\Pages;

use App\Filament\Resources\ServiceTool\ShortLetterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShortLetters extends ListRecords
{
    protected static string $resource = ShortLetterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
