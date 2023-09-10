<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
        $staffs=Staff::orderBy('id')->paginate(10);

        return isset($staffs) ?
            view(
                'pages.staff',

                [
                    'staffs' => $staffs,
                ]

            )
            : redirect('/');
    }


    public function singleStaff(string $id){
        $staff = Staff::find($id);

        
        return isset($staff) ?
            view(
                'pages.staffdetails',

                [
                    'staff' => $staff,
                    
                ]

            )
            : redirect('/staff');
    }
}
