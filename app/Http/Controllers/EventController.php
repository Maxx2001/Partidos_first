<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use App\Http\Requests\Event\EventRequets;
use Spatie\Activitylog\Models\Activity;

use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index(User $user)
    {
        return view('agenda', [
            'event' => User::find(1)->event
        ]);
    }

    public function show_your_created_events()
    {
        return view('event.created_events', [
            'event' => User::find(auth()->id())->event
        ]);
    }

//    public function show(User $user, $id){
//        return view('event.created_events', [
//            'event' => User::find($id)->event
//        ]);
//    }

    public function create()
    {
        return view('event.create_event');

    }

    public function store(EventRequets $request)
    {
        $event = Event::create([
            'eventname' => $request['eventname'],
            'user_id' => auth()->id(),
            'location' => $request['location'],
            'date' => $request['date'],
            'start_time' => $request['start_time'],
            'end_time' => $request['end_time']
        ]);

        activity()
            ->performedOn($event)
            ->causedBy(auth()->id())
            ->withProperties($event->toArray())
            ->log('Een nieuw event');

        return redirect('/your_created_events');
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

    public function update(EventRequets $request, Event $event)
    {
        $attributes = $request->validated();

        $event->update($attributes);
        return redirect(route('your_created_events'));

    }

}
