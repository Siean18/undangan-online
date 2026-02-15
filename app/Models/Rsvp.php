<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    protected $fillable = ['invitation_id', 'name', 'guests', 'status', 'message'];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
