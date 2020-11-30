<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        return view('event.create_event');
    }

    public function create(Request $request, User $user)
    {
        $request->validate([
            'eventname' => 'required|max:255',
            'location' => 'required|max:255',
            'date' => 'required|max:255',
            'start_time' => 'required|max:255',
            'end_time' => 'nullable|after:time_start',
        ]);


        $event = new Event();
        $event->eventname = $request['eventname'];
        $event->host =  Auth::user()->username;
        $event->location = $request['location'];
        $event->date = $request['date'];
        $event->start_time = $request['start_time'];
        $event->end_time = request('end_time');

        $event->save();

        return redirect("/");
    }

    public function show(Event $event)
    {
        return view('agenda',[
            'event' => $event->events()
        ]);
    }

    public function destroy($id)
    {
        $event = Event::find($id);

        $event->delete();

        return redirect('/agenda');
    }

    public function edit(Event $event, User $user)
    {

        return view('event.edit', compact('event'));
    }

}
