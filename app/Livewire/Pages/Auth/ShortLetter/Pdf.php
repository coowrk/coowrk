<?php

namespace App\Livewire\Pages\Auth\ShortLetter;

use App\Models\ShortLetter;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class Pdf
{
    // properties
    public ShortLetter $short_letter;

    public $options_available = [
        'we_ask_for' => [
            'anruf-ruecksprache' => 'Anruf / Rücksprache',
            'rueckgabe' => 'Rückgabe',
            'kenntnisnahme' => 'Kenntnisnahme',
            'bericht' => 'Bericht',
            'erledigung' => 'Erledigung',
            'weitere-veranlassung' => 'Weitere Veranlassung',
            'stellungnahme' => 'Stellungnahme',
            'pruefung' => 'Prüfung'
        ],
        'cause_for_letter' => [
            'zur-unterschrift' => 'zur Unterschrift',
            'zum-verbleib' => 'zum Verbleib',
            'zur-weitergabe' => 'zur Weitergabe',
            'zur-vorlage' => 'zur Vorlage',
            'mit-dank-zurueck' => 'mit Dank zurück',
            'anbei-anlagen' => 'Anbei Anlagen'
        ]
    ];

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
            'we_ask_for' => json_encode($this->options_available['we_ask_for']),
            'cause_for_letter' => json_encode($this->options_available['cause_for_letter']),
            'options' => json_encode($this->short_letter->options)
        ])
            ->addInfo(['Title', 'test'])
            ->stream('Kurzbrief.pdf');
    }
}
