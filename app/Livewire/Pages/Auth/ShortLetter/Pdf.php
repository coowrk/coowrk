<?php

namespace App\Livewire\Pages\Auth\ShortLetter;

use App\Models\ShortLetter;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class Pdf
{
    // properties
    public ShortLetter $short_letter;

    // render pdf
    public function __invoke($id)
    {
        // fetch data
        $this->short_letter = ShortLetter::with('created_by:id,first_name,last_name')
            ->select(['id', 'user_id', 'salutation', 'first_name', 'last_name', 'street', 'house_number', 'city', 'postcode', 'reason', 'options'])
            ->findOrFail($id);

        // return pdf
        return FacadePdf::loadView('pages.auth.short-letter.pdf', [
            'short_letter' => json_encode($this->short_letter),
            'we_ask_for' => json_encode($this->short_letter->all_options('we_ask_for')),
            'cause_for_letter' => json_encode($this->short_letter->all_options('cause_for_letter'))
        ])
            ->stream('Kurzbrief.pdf');
    }
}
