<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Post;
use App\Models\Staff;
use App\Models\Program;
use App\Models\Testimonial;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        //Notice Board
        $noticeBoard = Post::orderBy('updated_at', 'DESC')->limit(12)->get();
        //Events
        $eventBoard=Event::orderBy('date', 'ASC')
        ->where('date', '>', now())
        ->limit(4)
        ->get();
        //board of Directors
        $director = Staff::where('designation', 'Director');
        $chancellor = Staff::where('designation', 'Chancellor');
        $viceChancellor = Staff::where('designation', 'Vice Chancellor');

        // Programs
        $programs=Program::orderBy('title','DESC')->get();

        // Testimonial
        $testimonmials=Testimonial::limit(6)->get();

        $boardOfDirectors = $director->union($chancellor)->union($viceChancellor)->get();
        return view('pages.homepage')
        ->with([
            'noticeBoard' => $noticeBoard,
            'boardOfDirectors'=> $boardOfDirectors,
            'eventBoard' => $eventBoard,
            'programs'=>$programs,
            'testimonials'=>$testimonmials
        ]);
    }
}
