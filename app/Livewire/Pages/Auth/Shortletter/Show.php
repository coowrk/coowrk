<?php

namespace App\Livewire\Pages\Auth\ShortLetter;

use App\Models\Customer;
use App\Models\ShortLetter;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use function Spatie\LaravelPdf\Support\pdf;
use Livewire\Component;

class Show extends Component
{
    // properties
    #[Url()]
    public $id;

    public ShortLetter $short_letter;
    public User $user;
    public Customer $customer;

    // render html
    #[Layout('components.layouts.pages.auth.default')]
    public function render()
    {
        return view('pages.auth.short-letter.show');
    }

    // fetch data
    public function mount()
    {
        // set short letter
        $this->short_letter = ShortLetter::findOrFail($this->id);

        // set customer and user data
        $this->user = User::find($this->short_letter->user_id);
        $this->customer = Customer::find($this->short_letter->customer_id);
    }

    public function download()
    {
        return pdf()
            ->view('pdf.template.shortletter')
            ->format('a4')
            ->name('invoice-2023-04-10.pdf');
    }
}
