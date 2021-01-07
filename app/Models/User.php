<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function event()
    {
       return $this->hasMany(Event::class);
    }

    public function friends()
    {
        return $this->hasMany(Friends::class);

    }

    public function inventations()
    {
        return $this->hasMany(Invitation::class);
    }


    //show a list of potential friends who are not yet friends


}
