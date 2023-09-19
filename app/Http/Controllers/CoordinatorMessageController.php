<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoordinatorMessageController extends Controller
{
    public function computer()
    {
        return view("pages.coordinator_message", ["from" => "computer"]);
    }
    public function civil()
    {
        return view("pages.coordinator_message", ["from" => "civil"]);
    }
    public function electrical()
    {
        return view("pages.coordinator_message", ["from" => "electrical"]);
    }
    public function software()
    {
        return view("pages.coordinator_message", ["from" => "software"]);
    }
    public function civilnrural()
    {
        return view("pages.coordinator_message", ["from" => "civilnrural"]);
    }
}
