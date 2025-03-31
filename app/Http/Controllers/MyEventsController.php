<?php

namespace App\Http\Controllers;

use App\Models\County;
use App\Models\Types;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class MyEventsController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $userid=$user->id;
        $events=Event::where('user_id','=',$userid)->whereDate('eventdate', '>=', now()->format('Y-m-d'))->get();

        return view('myevents.index',compact('events'));
    }
    public function destroy($id)
    {
        $event = Event::find($id);

        $event->delete();

        return redirect()->route('myevents.index');
    }
    public function edit($id){
        $event = Event::find($id);
        $counties = County::all();
        $types = Types::all();
        
        return view('myevents.edit', compact('event', 'counties', 'types'));
    }
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        
        $data = $request->validate([
            'eventname' => 'required',
            'eventdesc' => 'required',
            'eventdate' => 'required',
            'eventtime' => 'required',
            'counties_id' => 'required',
            'types_id' => 'required',
            'eventplace' => 'required',
            'eventage' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);
    
        
        if ($request->hasFile('image')) {
            
            $imagePath = $request->file('image')->store('event_images', 'public');
            $data['image'] = 'storage/' . $imagePath;
    
            
            if ($event->image && file_exists(public_path($event->image))) {
                unlink(public_path($event->image));
            }
        } else {
            
            $data['image'] = $request->current_image;
        }
    
        $event->update($data);
    
        return redirect()->route('myevents.index')->with('success', 'Event updated successfully');
    }
}
