<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        return view('event.create_event');
    }

    public function create(Request $request)
    {
        $event = new Event();
        $event->eventname = request('eventname');
        $event->host =  Auth::user()->username;
        $event->location = request('location');
        $event->date = request('date');
        $event->start_time = request('start_time');
        $event->end_time = request('end_time');

        $event->save();
    }

    public function show(Event $event)
    {
        return view('agenda',[
            'event' => Event::all()
        ]);
    }
}
