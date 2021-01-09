<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Invitation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class InvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('invitation.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('invitation.invite_friends', [
            'friends' => User::find(auth()->id())->friends,
            'event_id' => $id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('invitation.invitations', [
            'invitations' => Event::find($id)->invitations
        ]);

    }


    public function show_your_invited_events()
    {
        return view('invitation.your_invited_events',[
            'invitations' => User::find(auth()->id())
                ->inventations
                ->where('status_id', '=', 2)
        ]);
    }

    public function show_your_invites()
    {
        return view('invitation.invites', [
            'invitations' => User::find(auth()->id())
                ->inventations
                ->where('status_id', '=', 1)
        ]);
    }

    /**
 *
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Invitation::destroy($id);

        return Redirect::back();
    }
}
