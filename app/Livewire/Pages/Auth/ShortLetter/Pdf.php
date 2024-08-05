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
        $this->short_letter = ShortLetter::findOrFail($id);

        // return pdf
        return FacadePdf::loadView('pdf.templates.shortletter', [
            'salutation' => $this->short_letter->salutation,
            'first_name' => $this->short_letter->first_name,
            'last_name' => $this->short_letter->last_name,
            'street' => $this->short_letter->street,
            'house_number' => $this->short_letter->house_number,
            'postcode' => $this->short_letter->postcode,
            'city' => $this->short_letter->city,
            'reason' => $this->short_letter->reason,
            'we_ask_for' => json_encode($this->short_letter->all_options('we_ask_for')),
            'cause_for_letter' => json_encode($this->short_letter->all_options('cause_for_letter')),
            'options' => json_encode($this->short_letter->options)
        ])
            ->addInfo(['Title', 'test'])
            ->stream('Kurzbrief.pdf');
    }
}
