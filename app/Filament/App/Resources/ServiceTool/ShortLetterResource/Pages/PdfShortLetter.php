<?php

namespace App\Filament\App\Resources\ServiceTool\ShortLetterResource\Pages;

use App\Filament\App\Resources\ServiceTool\ShortLetterResource;
use Filament\Forms\Contracts\HasForms;
use Filament\Resources\Pages\Page;

class PdfShortLetter extends Page implements HasForms
{
    protected static string $resource = ShortLetterResource::class;

    protected static string $view = 'filament.app.resources.short-letter-resource.pages.pdf-short-letter';

    function __invoke()
    {
        return dd(1);
    }
}
