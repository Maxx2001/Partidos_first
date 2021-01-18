<?php

namespace App\Http\Livewire;

use App\Models\Invitation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Notifications extends Component
{
    public function render()
    {
        $events = [];

        $invites = Auth::user()
            ->inventations;


        return view('livewire.notifications', compact('invites'));
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
