<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

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

    public function createTeacher(Request $request){
        $request->validate([
            'teacher_id' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            'dob' => 'required|date',
            'teacher_nationality' => 'required|string|max:255',
            'teacher_addr' => 'required|string|max:255',
            // 'teacher_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'email_address' => 'required|email',
            'ph_num' => 'required|string|max:255',
            'pwd' => 'required|string|min:8|',
        ]);
        //  // Handle file upload
        //  if ($request->hasFile('teacher_photo')) {
        //     $image = $request->file('teacher_photo');
        //     $imageName = time() . '_' . $image->getClientOriginalName();
        //     $image->move(public_path('teacher_photos'), $imageName);
        // } else {
        //     return redirect()->back()->with('error', 'Teacher photo is required.');
        // }


         // Create and save the user
         Teacher::create([
            'firstName' => $request->first_name,
            'lastName' => $request->last_name,
            'gender' => $request->gender,
            'dateOfBirth' => $request->dob,
            'nationality' => $request->teacher_nationality,
            // 'teacher_photo' => $imageName,
            'teacher_id' => $request->teacher_id,
            'phoneNumber' => $request->ph_num,
            'email' => $request->email_address,
            'password' => bcrypt($request->pwd),
            'Address' => $request->teacher_addr,
        ]);


         // Redirect the user after successful creation
         return redirect()->route('admin.teacher')->with('success', 'Teacher created successfully!');
    }  


}
