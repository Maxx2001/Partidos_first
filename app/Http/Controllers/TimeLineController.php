<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class TimeLineController extends Controller
{
    public function index(Event $event)
    {
        return view('timeline', [
            'event' => $event->events()
        ]);
    }
}
