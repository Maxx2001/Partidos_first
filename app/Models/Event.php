<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function events()
    {
        //change to show only events with user id
        return Event::orderBy('date', 'asc')
            ->latest()
            ->get();
    }

}
