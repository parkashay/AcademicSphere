<?php

namespace App\Http\Controllers;

use App\Models\Calender;
use Illuminate\Http\Request;

class CallendarController extends Controller
{
    public function index()
    {
        $calendars = Calender::paginate(10);
        return view('pages.calendar')->with('calendars', $calendars);
    }
}
