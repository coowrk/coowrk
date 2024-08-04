<?php

namespace App\Livewire\Pages\Auth\ShortLetter;

use App\Models\ShortLetter;
use Illuminate\Support\Facades\Response;

class Pdf
{
    // properties
    public ShortLetter $short_letter;

    // render pdf
    public function __invoke($id)
    {
        // fetch data
        $this->short_letter = ShortLetter::findOrFail($id);

        // return pdf
        return Response::make(
            file_get_contents($this->short_letter->pdf_path),
            200,
            [
                'Content-type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="Kurzbrief.pdf"'
            ]
        );
    }
}
