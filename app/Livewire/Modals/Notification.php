<?php

namespace App\Livewire\Modals;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Livewire\Component;
use Livewire\Attributes\On;

class Notification extends Component
{
    public array $notifications;

    public function render()
    {
        return view('components.modals.notification');
    }

    #[On('notification.show')]
    public function show(string $type, string $title, string $text)
    {
        $this->notifications = Arr::prepend($this->notifications, [
            "key" => Carbon::now()->getPreciseTimestamp(4),
            "type" => $type,
            "title" => $title,
            "text" => $text,
        ]);
    }
}
