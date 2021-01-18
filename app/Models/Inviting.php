<?php

namespace App\Models;


trait Inviting
{
    public function accepted_invites()
    {
        return $this->hasMany(Invitation::class)
            ->where('status_id', '=', 2);
    }

    public function inventations()
    {
        return $this->hasMany(Invitation::class)
            ->where('status_id', '=', 1);
    }
}
