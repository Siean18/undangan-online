<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rsvp;

class RsvpController extends Controller
{
    public function store(Request $request, $invitationId)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'guests' => 'required|integer|min:1',
            'status' => 'required|in:attending,not_attending',
            'message' => 'nullable|string',
        ]);

        $validated['invitation_id'] = $invitationId;

        Rsvp::create($validated);

        return back()->with('success', 'RSVP Anda telah terkirim. Terima kasih!');
    }
}
