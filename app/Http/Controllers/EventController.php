<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index2(){
        $allevents = Event::all();
        return view('backend.events',compact('allevents'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'blog_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('blog_image')) {
            $data['blog_image'] = $request->file('blog_image')->store('blog_images', 'public');
        }

        Event::create($data);

        return redirect()->route('events.index2')->with('success', 'Events created successfully.');
    }

    
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'blog_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('blog_image')) {
            $data['blog_image'] = $request->file('blog_image')->store('blog_images', 'public');
        }

        $event->update($data);

        return redirect()->route('events.index2')->with('success', 'Event updated successfully.');
    }


    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index2')->with('success', 'Event deleted successfully.');
    }


    



    //
}
