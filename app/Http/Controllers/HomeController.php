<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Popup;
use App\Models\Post;
use App\Models\Program;

use App\Models\Testimonial;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {

        // PopUp

        $popup = Popup::get();


        //Navigation
        $navPrograms = Program::orderBy('title', 'DESC')->get();
        //Notice Board
        $noticeBoard = Post::orderBy('updated_at', 'DESC')->limit(12)->get();
        $noticeBoard = Post::orderBy('updated_at', 'DESC')->limit(6)->get();
        //Courses
        $coursesPreview = Course::orderBy('updated_at', 'DESC')->limit(3)->get();
        //Events
        $eventBoard = Event::orderBy('date', 'ASC')
            ->where('date', '>', now())
            ->limit(4)
            ->get();

        // Programs
        $programs = Program::orderBy('id', 'ASC')->get();

        // Testimonial
        $testimonmials = Testimonial::limit(6)->get();

        // Hero 
        $photo = Gallery::latest('updated_at')->first();
        return isset($photo) ?
            view('pages.homepage')
            ->with([
                'photo' => $photo,
                'popup' => $popup,
                'navPrograms' => $navPrograms,
                'noticeBoard' => $noticeBoard,

                'eventBoard' => $eventBoard,
                'programs' => $programs,
                'testimonials' => $testimonmials
            ]) :

            redirect('404');
    }
}
