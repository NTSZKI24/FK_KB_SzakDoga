<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\Types;
use App\Models\County;
use Illuminate\Http\Request;


class EventController extends Controller
{
    public function index(Request $request)
{
    $query = Event::query()
    ->with(['county', 'type'])
    ->whereDate('eventdate', '>=', now()->format('Y-m-d'))
    ->orderBy('eventdate', 'asc');

    $events = $query->get();
    $counties = County::all();
    $types = Types::all();

    return view('frontend.master', compact('events', 'counties', 'types'));
}
    public function create()
    {
        
        $counties = County::all();
        $types = Types::all();
        return view("events.create", compact('counties', 'types'));
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
            'types_id' => 'required',
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
    public function filter(Request $request)
    {
        $query = Event::query()
            ->with(['county', 'type', 'user'])
            ->whereDate('eventdate', '>=', now()->format('Y-m-d'))
            ->orderBy('eventdate', 'asc');
    
        // County filter (multiple)
        if ($request->filled('county')) {
            $query->whereIn('counties_id', (array)$request->county);
        }
    
        // Type filter (multiple)
        if ($request->filled('type')) {
            $query->whereIn('types_id', (array)$request->type);
        }
    
        // Date range filter
        if ($request->filled('date_from')) {
            $query->whereDate('eventdate', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('eventdate', '<=', $request->date_to);
        }
    
        // Time range filter
        if ($request->filled('time_from')) {
            $query->whereTime('eventtime', '>=', $request->time_from);
        }
        if ($request->filled('time_to')) {
            $query->whereTime('eventtime', '<=', $request->time_to);
        }
    
        // Age range filter
        if ($request->filled('age_from')) {
            $query->where('eventage', '>=', $request->age_from);
        }
        if ($request->filled('age_to')) {
            $query->where('eventage', '<=', $request->age_to);
        }
    
        $events = $query->get();
        $counties = County::all();
        $types = Types::all();
    
        return view('frontend.master', compact('events', 'counties', 'types'));
    }
}
