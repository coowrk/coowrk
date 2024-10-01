<?php

namespace App\Filament\App\Resources\ServiceTool\ShortLetterResource\Pages;

use App\Filament\App\Resources\ServiceTool\ShortLetterResource;
use App\Models\ShortLetter;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Resources\Pages\Page;

class PdfShortLetter extends Page
{
    // resource
    protected static string $resource = ShortLetterResource::class;



    public function __invoke()
    {
        return Pdf::loadView('pdf.short-letter', [
            'data' => ShortLetter::with(['customer', 'user'])->findOrFail(request('record'))
        ])->stream();
    }
}
