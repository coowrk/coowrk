<?php

namespace App\Filament\App\Resources\ServiceTool\ShortLetterResource\Pages;

use App\Filament\App\Resources\ServiceTool\ShortLetterResource;
use App\Models\ShortLetter;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Resources\Pages\Page;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;

class PdfShortLetter extends Page
{
    use InteractsWithRecord;

    protected static string $resource = ShortLetterResource::class;

    protected static string $view = 'filament.app.resources.short-letter-resource.pages.pdf-short-letter';

    public function mount(int | string $record): void
    {
        $this->record = ShortLetter::with('customer')->findOrFail($record);
    }

    function booted()
    {
        Pdf::loadView('pdf.short-letter', [
            'short_letter' => $this->record
        ])->stream();
    }
}
