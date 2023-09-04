<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffsPageController extends Controller
{
    public function index(){
        $staffs = Staff::all();
        $designations = Staff::all()->pluck('designation', 'designation')->unique();
        return view('pages.staffs')->with(['staffs' => $staffs, 'designations' => $designations]);
    }
    public function singleStaff(string $id){
        $singleStaff = Staff::find($id);
        return view('pages.single-staff')->with(['singleStaff' => $singleStaff]);
    }
}
