<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Events extends Component
{
    public function render()
    {
        $invited_events = [];

        $inventations = Auth::user()
            ->accepted_invites;

        foreach ($inventations as $inventation){
            $invited_events[] = Event::find($inventation->event_id);

        }
        $events = Auth::user()->event;

        return view('livewire.events.events', [
            'invited_events' => $invited_events,
            'events' => $events
        ]);

    }

}
