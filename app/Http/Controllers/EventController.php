<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderByDesc('event_date')->orderBy('start_time')->get();

        return view('backend.events', compact('events'));
    }

    public function store(Request $request)
    {
        $data = $this->validatedData($request);
        $data['published'] = $request->boolean('published');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('event_images', 'public');
        }

        Event::create($data);

        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    public function update(Request $request, Event $event)
    {
        $data = $this->validatedData($request);
        $data['published'] = $request->boolean('published');

        if ($request->hasFile('image')) {
            if ($event->image) {
                Storage::disk('public')->delete($event->image);
            }
            $data['image'] = $request->file('image')->store('event_images', 'public');
        }

        $event->update($data);

        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    public function destroy(Event $event)
    {
        if ($event->image) {
            Storage::disk('public')->delete($event->image);
        }

        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }

    private function validatedData(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:5000'],
            'event_date' => ['required', 'date'],
            'start_time' => ['nullable', 'date_format:H:i'],
            'location' => ['required', 'string', 'max:255'],
            'join_url' => ['nullable', 'url', 'max:2048'],
            'recording_url' => ['nullable', 'url', 'max:2048'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);
    }
}
