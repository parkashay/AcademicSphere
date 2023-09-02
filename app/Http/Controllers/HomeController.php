<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Post;
use App\Models\Staff;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        //Notice Board
        $noticeBoard = Post::orderBy('updated_at', 'DESC')->limit(6)->get();
        //Events
        $eventBoard = Event::orderBy('date', 'DESC')->limit(3)->get();
        //board of Directors
        $director = Staff::where('designation', 'Director');
        $chancellor = Staff::where('designation', 'Chancellor');
        $viceChancellor = Staff::where('designation', 'Vice Chancellor');
        $boardOfDirectors = $director->union($chancellor)->union($viceChancellor)->get();
        return view('pages.homepage')
        ->with([
            'noticeBoard' => $noticeBoard,
            'boardOfDirectors'=> $boardOfDirectors,
        ]);
    }
}
