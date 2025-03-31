<?php

namespace App\Http\Controllers;

use App\Models\County;
use App\Models\Types;
use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended(route('admin.events.index'));
        }

        return back()->withErrors([
            'username' => 'Invalid credentials',
        ]);
    }

    public function index()
    {
        $users = User::all();
        $events = Event::with(['user', 'county', 'type'])->get();
        return view('admin.events.index', compact('users', 'events'));
    }
    public function create()
    {
        $counties = County::all();
        $types = Types::all();
        $users = User::all();
        
        return view('admin.events.create', compact('counties', 'types', 'users'));
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'eventname' => 'required|string|max:255',
            'eventdesc' => 'required|string',
            'eventdate' => 'required|date',
            'eventtime' => 'required',
            'eventplace' => 'required|string|max:255',
            'counties_id' => 'required|exists:counties,id',
            'types_id' => 'required|exists:types,id',
            'eventage' => 'required|integer|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'user_id' => 'required|exists:users,id'
        ]);
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
            $data['image'] = 'storage/' . $imagePath;
        }
    
        Event::create($data);
    
        return redirect()
            ->route('admin.events.index')
            ->with('success', 'Esemény sikeresen létrehozva.');
    }

    public function edit($id)
{
    $event = Event::findOrFail($id);
    $counties = County::all();
    $types = Types::all();
    
    return view('admin.events.update', compact('event', 'counties', 'types'));
}

public function update(Request $request, $id)
{
    $event = Event::findOrFail($id);
    
    $data = $request->validate([
        'eventname' => 'required|string|max:255',
        'eventdesc' => 'required|string',
        'eventdate' => 'required|date',
        'eventtime' => 'required',
        'eventplace' => 'required|string|max:255',
        'counties_id' => 'required|exists:counties,id',
        'types_id' => 'required|exists:types,id',
        'eventage' => 'required|integer|min:0',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
    ]);

    if ($request->hasFile('image')) {
        
        if ($event->image && file_exists(public_path($event->image))) {
            unlink(public_path($event->image));
        }

        
        $imagePath = $request->file('image')->store('events', 'public');
        $data['image'] = 'storage/' . $imagePath;
    }

    $event->update($data);

    return redirect()
        ->route('admin.events.index')
        ->with('success', 'Esemény sikeresen frissítve.');
}

public function destroy($id)
{
    $event = Event::findOrFail($id);

    
    if ($event->image && file_exists(public_path($event->image))) {
        unlink(public_path($event->image));
    }

    $event->delete();

    return redirect()
        ->route('admin.events.index')
        ->with('success', 'Esemény sikeresen törölve.');
}

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
