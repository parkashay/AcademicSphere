<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramsPageController extends Controller
{
    public function index(){
        $programs = Program::all();
        return view('pages.programs')->with(['programs' => $programs]);
    }

    public function singleProgram(string $id){
        $singleProgram = Program::find($id);
        return view('pages.single-program')->with(['singleProgram' => $singleProgram]);
    }
}
