<?php

namespace App\Livewire\Modals;

use Illuminate\Support\Str;
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
        $this->notifications =
            Arr::prepend(
                $this->notifications,
                array(
                    "key" => Str::random(20),
                    "type" => $type,
                    "title" => $title,
                    "text" => $text,
                    "created_at" => now()
                )
            );
    }

    public function close(string $id)
    {
        // $this->notifications = Arr::pull($this->notifications, "key", $id);

        // return dd($this->notifications);

        return dd(array_search($id, $this->notifications));
    }
}
