<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;
use App\Models\GalleryPhoto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InvitationController extends Controller
{
    public function index()
    {
        $invitations = auth()->user()->invitations;
        return view('dashboard', compact('invitations'));
    }

    public function create()
    {
        return view('invitation.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'bride_name' => 'required|string|max:255',
            'groom_name' => 'required|string|max:255',
            'slug' => 'required|string|unique:invitations,slug',
            'template' => 'required|string|in:classic,modern',
            'event_date' => 'required|date',
            'akad_time' => 'required|string',
            'resepsi_time' => 'required|string',
            'location_name' => 'required|string',
            'address' => 'required|string',
            'google_maps_link' => 'nullable|url',
            'bg_music' => 'nullable|mimes:mp3,wav|max:10240', // 10MB max
            'main_bg' => 'nullable|image|max:10240', // 10MB max
            'social_links' => 'nullable|array',
            'bank_accounts' => 'nullable|array',
        ]);

        if ($request->hasFile('bg_music')) {
            $validated['bg_music_path'] = $request->file('bg_music')->store('music', 'public');
        }

        $invitation = auth()->user()->invitations()->create($validated);

        if ($request->hasFile('main_bg')) {
            $path = $request->file('main_bg')->store('gallery', 'public');
            $invitation->photos()->create([
                'photo_path' => $path,
                'type' => 'main_bg'
            ]);
        }

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('gallery', 'public');
                $invitation->photos()->create([
                    'photo_path' => $path,
                    'type' => 'prewedding'
                ]);
            }
        }

        return redirect()->route('dashboard')->with('success', 'Undangan berhasil dibuat!');
    }

    public function show($slug)
    {
        $invitation = Invitation::where('slug', $slug)->with(['photos', 'rsvps'])->firstOrFail();
        $rsvps = $invitation->rsvps()->orderBy('created_at', 'desc')->get();
        return view('invitation.templates.' . ($invitation->template ?? 'classic'), compact('invitation', 'rsvps'));
    }

    public function edit(Invitation $invitation)
    {
        $this->authorize('update', $invitation);
        return view('invitation.edit', compact('invitation'));
    }

    public function update(Request $request, Invitation $invitation)
    {
        $this->authorize('update', $invitation);
        
        $validated = $request->validate([
            'bride_name' => 'required|string|max:255',
            'groom_name' => 'required|string|max:255',
            'slug' => 'required|string|unique:invitations,slug,' . $invitation->id,
            'template' => 'required|string|in:classic,modern',
            'event_date' => 'required|date',
            'akad_time' => 'required|string',
            'resepsi_time' => 'required|string',
            'location_name' => 'required|string',
            'address' => 'required|string',
            'google_maps_link' => 'nullable|url',
            'bg_music' => 'nullable|mimes:mp3,wav|max:10240',
            'main_bg' => 'nullable|image|max:10240',
            'social_links' => 'nullable|array',
            'bank_accounts' => 'nullable|array',
        ]);

        if ($request->hasFile('bg_music')) {
            if ($invitation->bg_music_path) {
                Storage::disk('public')->delete($invitation->bg_music_path);
            }
            $validated['bg_music_path'] = $request->file('bg_music')->store('music', 'public');
        }

        $invitation->update($validated);

        if ($request->hasFile('main_bg')) {
            // Delete old main background
            $oldMainBg = $invitation->photos()->where('type', 'main_bg')->first();
            if ($oldMainBg) {
                Storage::disk('public')->delete($oldMainBg->photo_path);
                $oldMainBg->delete();
            }

            $path = $request->file('main_bg')->store('gallery', 'public');
            $invitation->photos()->create([
                'photo_path' => $path,
                'type' => 'main_bg'
            ]);
        }

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('gallery', 'public');
                $invitation->photos()->create([
                    'photo_path' => $path,
                    'type' => 'prewedding'
                ]);
            }
        }

        return redirect()->route('dashboard')->with('success', 'Undangan berhasil diperbarui!');
    }
}
