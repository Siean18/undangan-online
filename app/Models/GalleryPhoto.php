<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryPhoto extends Model
{
    protected $fillable = ['invitation_id', 'photo_path', 'type'];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
