<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Invitation;
use App\Models\User;
use Livewire\Component;

class Notifications extends Component
{
    public function render()
    {
        $events = [];

        $invites = User::find(auth()->id())
            ->inventations
            ->where('status_id', '=', 1);

        foreach ($invites as $invite){
            $events[] = Event::find($invite->event_id);
        }

        return view('livewire.notifications', compact('events'));
    }

    public function accept_invite($id)
    {
        $invitation = Invitation::find($id);

        $invitation->status_id = 2;
        $invitation->save();

        return redirect('/');
    }

    public function decline_invite($id)
    {
        $invitation = Invitation::find($id);

        $invitation->status_id = 3;
        $invitation->save();

        return redirect(route('agenda'));
    }
}
