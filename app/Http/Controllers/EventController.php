<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use Illuminate\Http\Request;


class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view("events.index", compact("events"));
    }
    public function create()
    {
        return view("events.create");
    }
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $data = $request->validate([
            'eventname' => 'required|string|max:255',
            'eventdesc' => 'required|string',
            'eventdate' => 'required|date',
            'eventtime' => 'required|date_format:H:i',
            'eventplace'=> 'required|string',
            'eventage' => 'required|integer',
            'image'=> 'nullable|mimes:png,jpg,jpeg',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/events/';
            $file->move($path, $filename);
            $data['image'] = $path . $filename;
        }

        $data['user_id'] = Auth::id();
        $newEvent = Event::create($data);
        return redirect()->route('events.index');
    }
}
