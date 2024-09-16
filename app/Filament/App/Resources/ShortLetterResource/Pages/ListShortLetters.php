<?php

namespace App\Filament\App\Resources\ShortLetterResource\Pages;

use App\Filament\App\Resources\ShortLetterResource;
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
