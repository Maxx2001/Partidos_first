<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class InvitationController extends Controller
{
    public function create($id)
    {
        $friends = [];

        $friend_list = Auth::user()
            ->friends
            ->where('status', "=", "2");

        foreach ($friend_list as $friend)
        {
            if ($friend->user_id == auth()->id())
            {
                $friend->user_id = $friend->friend_id;
            }
            $friends[] = User::find($friend->user_id);
        }

        return view('invitation.invite_friends', [
            'friends' => $friends,
            'event_id' => $id
        ]);
    }

    public function store(Request $request, Invitation $invitation)
    {
        Invitation::create([
            'user_id' => $request['friend_id'],
            'event_id' => $request['event_id'],
            'status_id' => 1
        ]);

        return Redirect::back();
    }

    public function accept_invite($id)
    {
        $invitation = Invitation::find($id);

        $invitation->status_id = 2;
        $invitation->save();

        return redirect('/invitations');
    }

    public function decline_invite($id)
    {
        $invitation = Invitation::find($id);

        $invitation->status_id = 3;
        $invitation->save();

        return redirect('/invitations');
    }

    public function destroy($id)
    {
        Invitation::destroy($id);

        return Redirect::back();
    }
}
