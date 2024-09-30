<?php

namespace App\Filament\App\Resources\ServiceTool\ShortLetterResource\Pages;

use App\Filament\App\Resources\ServiceTool\ShortLetterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShortLetter extends EditRecord
{
    // resource
    protected static string $resource = ShortLetterResource::class;

    /**
     * Set the header actions for this resource.
     * 
     * @return array
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('Pdf')
                ->url(PdfShortLetter::getUrl([$this->record->id])),
            Actions\DeleteAction::make(),
        ];
    }
}
