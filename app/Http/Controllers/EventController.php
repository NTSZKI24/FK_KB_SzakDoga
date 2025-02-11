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
        $data = $request->validate([
            'eventname' => '',
            'eventdesc' => '',
            'eventdate' => '',
            'eventtime' => '',
            'eventage' => '',
        ]);
        $data['user_id'] = Auth::id();
        $newEvent = Event::create($data);
        return redirect()->route('events.index');
    }
}
