<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::whereNotIn('designation', [
            'Teacher',
            'Dean',
            'Director',
            'Professor',
            'Assistant Professor',
            'Associate Professor',
            'Instructor'
        ])->paginate(10);


        return isset($staffs) ?
            view(
                'pages.staff',

                [
                    'staffs' => $staffs,
                ]

            )
            : redirect('/');
    }



    public function faculty()
    {
        $staffs = Staff::whereIn('designation', [
            'Teacher',
            'Professor',
            'Assistant Professor',
            'Associate Professor',
            'Instructor'
        ])->paginate(10);


        return isset($staffs) ?
            view(
                'pages.faculty',

                [
                    'faculty' => $staffs,
                ]

            )
            : redirect('/');
    }

    public function dean()
    {
        $staff = Staff::where('designation', '=', 'Dean')->get();

        return isset($staff) ?
            view(
                'pages.message-dean',

                [
                    'staff' => $staff,
                ]

            )
            : redirect('/');
    }
    public function director()
    {
        $staff = Staff::where('designation', '=', 'Director')->get();

        return isset($staff) ?
            view(
                'pages.message-director',

                [
                    'staff' => $staff,
                ]

            )
            : redirect('/');
    }


    public function singleStaff(string $id)
    {
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
