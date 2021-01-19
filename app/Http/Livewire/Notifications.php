<?php

namespace App\Http\Livewire;

use App\Models\FriendRequest;
use App\Models\Invitation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Notifications extends Component
{
    public function render()
    {
        $invites = Auth::user()
            ->inventations;

        $friend_requests = FriendRequest::all()
            ->where("friend_id", "=", auth()->id())
            ->where('status', '=', 1);

        return view('livewire.notifications', [
            'invites' => $invites,
            'friend_requests' => $friend_requests
        ]);
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
