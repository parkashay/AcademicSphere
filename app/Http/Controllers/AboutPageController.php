<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function index(){
        $director = Staff::where('designation', 'Director');
        $chancellor = Staff::where('designation', 'Chancellor');
        $viceChancellor = Staff::where('designation', 'Vice Chancellor');
        $boardOfDirectors = $director->union($chancellor)->union($viceChancellor)->get();
        return view('pages.about')->with('boardOfDirectors', $boardOfDirectors);
    }
}
