<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventPageController extends Controller
{
    public function index(){
       
        $events = Event::orderBy('date', 'DESC')
        ->paginate(15);
        return view('pages.events')->with(['events' => $events]);
    }

    public function singleEvent(string $id){
        $relatedEvents=Event::where('id','!=',$id)->limit(5)->get();
        $singleEvent = Event::find($id);
        return view('pages.single-event')->with(['singleEvent' => $singleEvent, "relatedEvents"=>$relatedEvents]);
    }

    
}
