<?php

namespace App\Http\Controllers;

use App\Models\County;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class MyEventsController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $userid=$user->id;
        $events=Event::where('user_id','=',$userid)->get();

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
        return view('myevents.edit',compact('event','counties'));
    }
    public function update(Request $request,$id){
        $data = new Event;
        $data = Event::find($id);

        $data->eventname=$request->eventname;
        $data->eventdesc=$request->eventdesc;
        $data->eventdate=$request->eventdate;
        $data->eventtime=$request->eventtime;
        $data->eventplace=$request->eventplace;
        $data->counties_id=$request->counties_id;
        $data->image=$request->image;
        $data->eventage=$request->eventage;

        $data->save();
         return redirect()->back();

    }
}
