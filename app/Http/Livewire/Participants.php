<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\User;
use Livewire\Component;

class Participants extends Component
{
    public $events;

    public function render()
    {
        $events = $this->events
            ->invitations
        ->where('status_id', '=', 2);

        $participants = [];

        foreach ($events as $event)
        {
            $participants[] = User::find($event->user_id);
        }
        return view('livewire.events.participants', compact('participants'));
    }
}
