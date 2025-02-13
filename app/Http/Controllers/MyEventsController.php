<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class MyEventsController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $userid=$user->id;
        $data=Event::where('user_id','=',$userid)->get();

        $events = Event::all();
        return view('myevents.index',compact('data'));
    }
    public function delete($id)
    {
        $event = Event::find($id);

        $event->delete();

        return redirect()->back();
    }
}
