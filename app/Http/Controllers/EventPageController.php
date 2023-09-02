<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventPageController extends Controller
{
    public function index(){
        //TODO: get only those events that are due
        $events = Event::orderBy('date', 'ASC')->get();
        return view('pages.events')->with(['events' => $events]);
    }

    public function singleEvent(string $id){
        $singleEvent = Event::find($id);
        return view('pages.single-event')->with(['singleEvent' => $singleEvent]);
    }
}
