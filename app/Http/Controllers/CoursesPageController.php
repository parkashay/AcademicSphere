<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesPageController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('pages.courses')->with('courses', $courses);
    }
    public function singleCourse(string $id)
    {
        $singleCourse = Course::find($id);
        return view('pages.single-course')->with('singleCourse', $singleCourse);
    }
}
