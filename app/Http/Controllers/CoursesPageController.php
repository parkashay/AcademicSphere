<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesPageController extends Controller
{

    public function index()
    {

        $courses = Course::orderBy('title', "ASC")->paginate(20);

        return isset($courses) ?
            view(
                'pages.courses',

                [
                    'courses' => $courses,
                ]

            )
            : redirect('/learning-materials');
    }

    public function singleMaterial(string $category)
    {
        $singleMaterial = Course::where('title', '=', $category)->first();

        return isset($singleMaterial) ?
            view(
                'pages.single-learning-category',

                [
                    'singleMaterial' => $singleMaterial,
                ]

            )
            : redirect('/learning-materials');

    }
}
