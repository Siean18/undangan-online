<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $fillable = [
        'user_id', 'slug', 'template', 'bride_name', 'groom_name', 'event_date', 
        'akad_time', 'resepsi_time', 'location_name', 'address', 
        'google_maps_link', 'love_story', 'bg_music_path', 'theme_color',
        'dress_code', 'special_notes', 'social_links', 'bank_accounts',
        'bride_photo_path', 'groom_photo_path'
    ];

    protected $casts = [
        'love_story' => 'array',
        'event_date' => 'date',
        'social_links' => 'array',
        'bank_accounts' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rsvps()
    {
        return $this->hasMany(Rsvp::class);
    }

    public function photos()
    {
        return $this->hasMany(GalleryPhoto::class);
    }

    public function mainBackground()
    {
        return $this->hasOne(GalleryPhoto::class)->where('type', 'main_bg');
    }

    public function preweddingPhotos()
    {
        return $this->hasMany(GalleryPhoto::class)->where('type', 'prewedding');
    }
}
