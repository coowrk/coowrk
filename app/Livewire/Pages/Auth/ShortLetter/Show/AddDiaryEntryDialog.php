<?php

namespace App\Livewire\Pages\Auth\ShortLetter\Show;

use App\Models\ShortLetter;
use App\Models\ShortLetterFeed;
use Illuminate\Support\Arr;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AddDiaryEntryDialog extends Component
{
    // properties
    public $show = false;

    #[Validate(['nullable', 'in:1,3,5,6'])]
    public $new_status;

    #[Validate(['required_if:new_status,6', 'max:255'])]
    public $comment;

    public $short_letter;

    public $status_options = [
        [
            'id' => '1',
            'title' => 'Erledigt',
            'icon' => '<path clip-rule="evenodd" d="M16.403 12.652a3 3 0 0 0 0-5.304 3 3 0 0 0-3.75-3.751 3 3 0 0 0-5.305 0 3 3 0 0 0-3.751 3.75 3 3 0 0 0 0 5.305 3 3 0 0 0 3.75 3.751 3 3 0 0 0 5.305 0 3 3 0 0 0 3.751-3.75Zm-2.546-4.46a.75.75 0 0 0-1.214-.883l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" fill-rule="evenodd" />'
        ],
        [
            'id' => '3',
            'title' => 'Auf dem Postweg',
            'icon' => '<path d="M6.5 3c-1.051 0-2.093.04-3.125.117A1.49 1.49 0 0 0 2 4.607V10.5h9V4.606c0-.771-.59-1.43-1.375-1.489A41.568 41.568 0 0 0 6.5 3ZM2 12v2.5A1.5 1.5 0 0 0 3.5 16h.041a3 3 0 0 1 5.918 0h.791a.75.75 0 0 0 .75-.75V12H2Z" /> <path d="M6.5 18a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3ZM13.25 5a.75.75 0 0 0-.75.75v8.514a3.001 3.001 0 0 1 4.893 1.44c.37-.275.61-.719.595-1.227a24.905 24.905 0 0 0-1.784-8.549A1.486 1.486 0 0 0 14.823 5H13.25ZM14.5 18a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z" />'
        ],
        [
            'id' => '5',
            'title' => 'Postrückläufer',
            'icon' => '<path clip-rule="evenodd" d="M15.312 11.424a5.5 5.5 0 0 1-9.201 2.466l-.312-.311h2.433a.75.75 0 0 0 0-1.5H3.989a.75.75 0 0 0-.75.75v4.242a.75.75 0 0 0 1.5 0v-2.43l.31.31a7 7 0 0 0 11.712-3.138.75.75 0 0 0-1.449-.39Zm1.23-3.723a.75.75 0 0 0 .219-.53V2.929a.75.75 0 0 0-1.5 0V5.36l-.31-.31A7 7 0 0 0 3.239 8.188a.75.75 0 1 0 1.448.389A5.5 5.5 0 0 1 13.89 6.11l.311.31h-2.432a.75.75 0 0 0 0 1.5h4.243a.75.75 0 0 0 .53-.219Z" fill-rule="evenodd" />'
        ],
        [
            'id' => '6',
            'title' => 'Rückmeldung vom Kunden',
            'icon' => '<path d="M3.505 2.365A41.369 41.369 0 0 1 9 2c1.863 0 3.697.124 5.495.365 1.247.167 2.18 1.108 2.435 2.268a4.45 4.45 0 0 0-.577-.069 43.141 43.141 0 0 0-4.706 0C9.229 4.696 7.5 6.727 7.5 8.998v2.24c0 1.413.67 2.735 1.76 3.562l-2.98 2.98A.75.75 0 0 1 5 17.25v-3.443c-.501-.048-1-.106-1.495-.172C2.033 13.438 1 12.162 1 10.72V5.28c0-1.441 1.033-2.717 2.505-2.914Z" /> <path d="M14 6c-.762 0-1.52.02-2.271.062C10.157 6.148 9 7.472 9 8.998v2.24c0 1.519 1.147 2.839 2.71 2.935.214.013.428.024.642.034.2.009.385.09.518.224l2.35 2.35a.75.75 0 0 0 1.28-.531v-2.07c1.453-.195 2.5-1.463 2.5-2.915V8.998c0-1.526-1.157-2.85-2.729-2.936A41.645 41.645 0 0 0 14 6Z" />'
        ]
    ];


    // render html
    public function render()
    {
        return view('pages.auth.short-letter.show.add-diary-entry-dialog');
    }

    // visibility state event
    #[On('change.short-letter.show.add-diary-entry-dialog.visibility.state')]
    public function changeShortLetterShowAddDiaryEntryDialogVisibilityState()
    {
        $this->show = true;
    }

    // add diary entry
    public function addDiaryEntry()
    {
        // validate input data
        $this->validate();

        // fetch short-letter data
        $short_letter = ShortLetter::find($this->short_letter);

        // if status changed
        if ($this->new_status) {
            // update status
            $short_letter->update([
                'status' => $this->new_status
            ]);

            // create feed
            $short_letter->feed()
                ->create([
                    'user_id' => auth()->user()->id,
                    'new_status' => $this->new_status,
                    'title' => 'pages/auth/short-letter.feed.changed-state'
                ]);
        }

        // if comment exists
        if ($this->comment)
            $short_letter->feed()
                ->create([
                    'short_letter_id' => $this->short_letter,
                    'user_id' => auth()->user()->id,
                    'title' => 'pages/auth/short-letter.feed.comment',
                    'comment' => $this->comment
                ]);

        // reset formular
        $this->reset('new_status', 'comment', 'show');
    }

    // set status of short-letter
    public function setStatus($id)
    {
        $this->new_status = $id;
    }
}
