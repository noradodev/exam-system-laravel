<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function dashboard(){
        return view('admin.dashboard.index');
    }

    public function teacher(){
        
        $teachersData = [
    [
        'id' => 1,
        'teacher_id' => 'T001',
        'first_name' => 'John',
        'last_name' => 'Doe',
        'date_of_birth' => '1980-05-15',
        'gender' => 'Male',
        'contact_information' => 'john.doe@example.com',
        'department' => 'Computer Science',
    ],
    [
        'id' => 2,
        'teacher_id' => 'T002',
        'first_name' => 'Jane',
        'last_name' => 'Smith',
        'date_of_birth' => '1985-08-22',
        'gender' => 'Female',
        'contact_information' => 'jane.smith@example.com',
        'department' => 'Mathematics',
    ],
    [
        'id' => 2,
        'teacher_id' => 'T002',
        'first_name' => 'Jane',
        'last_name' => 'Smith',
        'date_of_birth' => '1985-08-22',
        'gender' => 'Female',
        'contact_information' => 'jane.smith@example.com',
        'department' => 'Mathematics',
    ],
    [
        'id' => 3,
        'teacher_id' => 'T002',
        'first_name' => 'Jane',
        'last_name' => 'Smith',
        'date_of_birth' => '1985-08-22',
        'gender' => 'Female',
        'contact_information' => 'jane.smith@example.com',
        'department' => 'Mathematics',
    ],
    [
        'id' => 4,
        'teacher_id' => 'T002',
        'first_name' => 'Jane',
        'last_name' => 'Smith',
        'date_of_birth' => '1985-08-22',
        'gender' => 'Female',
        'contact_information' => 'jane.smith@example.com',
        'department' => 'Mathematics',
    ],
    // Add more teachers as needed
];
        return view('admin.dashboard.teacher', ['teachersData'=> $teachersData]);
    }

    public function teacherEdit(Request $request){
        // $teacherData = $request->all();
        return view('admin.dashboard.teacher.edit');
    }

    public function teacherView(Request $request){
        // $teacherData = $request->all();
        return view('admin.dashboard.teacher.view');
    }

    //add teacher

    public function addTeacher(){
        return view('admin.dashboard.teacher.add');
    }
}
