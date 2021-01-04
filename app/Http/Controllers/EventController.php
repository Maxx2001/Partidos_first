<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Event\EventRequets;

use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index(User $user)
    {
        return view('agenda', [
//            'event' => $event->events(),
            'event' => User::find(1)->event
        ]);
    }

    public function show(User $user, $id){
        return view('agenda', [
            'event' => User::find($id)->event
        ]);
    }

    public function create()
    {
        return view('event.create_event');

    }

    public function store(EventRequets $request, User $user)
    {
        Event::create([
            'eventname' => $request['eventname'],
            'user_id' => auth()->id(),
            'location' => $request['location'],
            'date' => $request['date'],
            'start_time' => $request['start_time'],
            'end_time' => $request['end_time']
        ]);

        return redirect("/");
    }

    public function destroy($id)
    {
        Event::destroy($id);

        return redirect('/event');
    }

    public function edit(Event $event, User $user)
    {

        return view('event.edit', compact('event'));
    }

    public function update()
    {

    }

}
