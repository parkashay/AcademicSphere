<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Event;
use App\Models\Post;
use App\Models\Program;

use App\Models\Testimonial;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){

        //Notice Board
        $noticeBoard = Post::orderBy('updated_at', 'DESC')->limit(12)->get();
        $noticeBoard = Post::orderBy('updated_at', 'DESC')->limit(6)->get();
        //Courses
        $coursesPreview = Course::orderBy('updated_at', 'DESC')->limit(3)->get();
        //Events

        $eventBoard=Event::orderBy('date', 'ASC')
        ->where('date', '>', now())
        ->limit(4)
        ->get();

 

        // Programs
        $programs=Program::orderBy('title','DESC')->get();

        // Testimonial
        $testimonmials=Testimonial::limit(6)->get();

     
        return view('pages.homepage')
        ->with([
            'noticeBoard' => $noticeBoard,
           
            'eventBoard' => $eventBoard,
            'programs'=>$programs,
            'testimonials'=>$testimonmials
        ]);
    }
}
