<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index()
    {
        $photos = Gallery::orderBy('updated_at', 'DESC')->paginate(20);
        return view('pages.gallery')->with('photos', $photos);
    }
    
}
