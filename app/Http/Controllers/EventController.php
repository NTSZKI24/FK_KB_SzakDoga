<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\County;
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
        $counties = County::all();
        return view("events.create", compact('counties'));
    }    
    public function search(Request $request)
    {
        $search = $request->query('search');
        if ($search) {
            $events = Event::where('eventname', 'LIKE', "%{$search}%")->get();
        } else {
            $events = Event::all();
        }
        return view('events.index', compact('events'));
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
            'counties_id' => 'required',
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
