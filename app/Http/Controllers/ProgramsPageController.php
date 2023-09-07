<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramsPageController extends Controller
{
    public function singleProgram(string $id)
    {
        $singleProgram = Program::find($id);

        // related posts
        $otherPrograms = Program::where('id', '!=', $id)->limit(9)->get();
        return isset($singleProgram) ?
            view(
                'pages.programs',

                [
                    'singleProgram' => $singleProgram,
                    'otherPrograms' => $otherPrograms
                ]

            )
            : redirect('/');
    }
}
