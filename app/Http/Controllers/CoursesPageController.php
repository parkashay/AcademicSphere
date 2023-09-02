<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesPageController extends Controller
{
    public function index(){
        return view('pages.courses');
    }
}
