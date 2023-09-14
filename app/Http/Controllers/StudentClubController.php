<?php

namespace App\Http\Controllers;

use App\Models\StudentClub;
use Illuminate\Http\Request;

class StudentClubController extends Controller
{
    public function index()
    {
        $clubs = StudentClub::all();

        return isset($clubs) ?
            view(
                'pages.student-clubs',

                [
                    'clubs' => $clubs,
                ]

            )
            : redirect('/');
    }
}
