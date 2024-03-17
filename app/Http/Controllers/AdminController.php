<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
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
        $teachersData = Teacher::all();
    // Add more teachers as needed  
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
            'gender' => 'required|in:Male,Female,Other',
            'dob' => 'required|date',
            'caste' => 'required|string|max:255',
            // 'teacher_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dep_teacher' => 'required|string|max:255',
            'class_info' => 'required|string|max:255',
            'emp_type' => 'required|string|in:part-time,full-time',
            'email_address' => 'required|email|unique:users,email',
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
            'dob' => $request->dob,
            'Caste' => $request->caste,
            // 'teacher_photo' => $imageName,
            'teacher_id' => $request->teacher_id,
            'department' => $request->dep_teacher,
            'class' => $request->class_info,
            'emp_type' => $request->emp_type,
            'emailAddress' => $request->email_address,
            'password' => bcrypt($request->pwd),
            'phoneNumber' => $request->ph_num,
        ]);


         // Redirect the user after successful creation
         return redirect()->route('admin.teacher')->with('success', 'Teacher created successfully!');
    }  

}
