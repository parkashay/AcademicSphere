<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Event;
use App\Models\Post;
use App\Models\Program;
use App\Models\Staff;
class HomeController extends Controller
{
    public function index(){

        //Notice Board
        $noticeBoard = Post::orderBy('updated_at', 'DESC')->limit(12)->get();
        $noticeBoard = Post::orderBy('updated_at', 'DESC')->limit(6)->get();
        //Courses
        $coursesPreview = Course::orderBy('updated_at', 'DESC')->limit(3)->get();
        //Events
        $eventBoard = Event::orderBy('date', 'DESC')->limit(3)->get();
        //Programs
        $programsPreview = Program::orderBy('created_at', 'DESC')->limit(6)->get();
        //board of Directors
        $director = Staff::where('designation', 'Director');
        $chancellor = Staff::where('designation', 'Chancellor');
        $viceChancellor = Staff::where('designation', 'Vice Chancellor');

        // Programs
        $programs=Program::orderBy('title','DESC')->get();

        // Testimonial

        $boardOfDirectors = $director->union($chancellor)->union($viceChancellor)->get();
        return view('pages.homepage')
        ->with([
            'noticeBoard' => $noticeBoard,
            'boardOfDirectors'=> $boardOfDirectors,
            'eventBoard' => $eventBoard,
            'programs'=>$programs,
        ]);
    }
}
