<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        return view("pages.contact");
    }
    public function submitMessage(Request $request){
        $validatedFields = $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'message'=> 'required',
        ]);
        if($validatedFields){
            Message::create($validatedFields);
            return redirect()->back()->with('message', 'Submitted');
        }
    }
}
