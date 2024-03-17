@extends('admin.layout.sidebar')


@section('header_admin')
<div class="bg-white flex justify-between items-center p-4 py-2">
    <div class="h-l-side">
        <i class="fa-solid fa-bars fa-lg"></i>
        

    </div>
    <div class="h-r-side">
        <div class="user_h_info">
            <div class="user_profile">
                <img src="{{asset('assets/businessman-character-avatar-isolated_24877-60111.avif')}}" alt="" class="w-10 rounded-full">
            </div>
        </div>

    </div>
    
</div>


@endsection


@section('dashboard_admin')
{{ Breadcrumbs::render() }}
<div class="select_teacher_c bg-white rounded p-4 mt-3 border">
    <div class="select_cre_header">
        <h1 class="text-lg uppercase font-semibold">Add Teacher</h1>
    </div>
</div>
<div class="add_wrapper bg-white p-4 mt-3 text-sm">
    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('admin.createTeacher') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="personal_info_wrapper">
            <div class="personal_info bg-gray-100 p-4 rounded">
                <h1 class="uppercase text-lg mb-2 text-gray-700">Personal Information</h1>
                <hr class="mb-2 bg-black">
                <div class="pi_wrapper text-gray-800 grid grid-cols-1 md:grid-cols-2 gap-4">


                    <div class="">
                        <label for="first_name" class="block">First Name <span class="text-red-700">*</span></label>
                        <input type="text" name="first_name" id="first_name" placeholder="Enter First Name"
                            class="p-3 border border-gray-300 rounded my-2 w-full">
                    </div>
                    <div>
                        <label for="last_name" class="block">Last Name <span class="text-red-700">*</span></label>
                        <input type="text" name="last_name" id="last_name" placeholder="Enter Last Name"
                            class="p-3 border border-gray-300 rounded my-2 w-full" >
                    </div>


                    <div>
                        <label for="gender" class="block">Gender <span class="text-red-700">*</span></label>
                        <select name="gender" id="gender"
                            class="p-3 border border-gray-300 bg-white rounded my-2 w-full">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label for="dob" class="block">Date of Birth <span class="text-red-700">*</span></label>
                        <input type="date" name="dob" id="dob" class="p-3 border border-gray-300 rounded my-2 w-full"
                          >
                    </div>

                    <div>
                        <label for="caste" class="block">Caste <span class="text-red-700">*</span></label>
                        <input type="text" name="caste" id="caste" placeholder="Enter Caste"
                            class="p-3 border border-gray-300 rounded my-2 w-full" >
                    </div>

                    <div class="mb-4">
                        <label for="teacher_photo" class="block uppercase text-gray-700">Teacher Photo
                            <span class="text-red-700">*</span>
                        </label>
                        <input type="file" name="teacher_photo" id="teacher_photo"
                            class="p-3 border border-gray-300 rounded my-2 w-full bg-gray-100 focus:outline-none focus:border-blue-500"
                            >
                    </div>
                </div>
            </div>

            <div class="contact_info mt-4 bg-gray-100 p-4 rounded">
                <h1 class="uppercase text-lg mb-2 text-gray-700">Class information</h1>
                <hr class="mb-2 bg-black">
                <div class="pi_wrapper text-gray-800 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="">
                        <label for="teacher_id" class="block uppercase">Teacher ID <span
                                class="text-red-700">*</span></label>
                        <input type="text" name="teacher_id" id="teacher_id" placeholder="Enter a Teacher ID"
                            class="p-3 border border-gray-300 rounded my-2 w-full" required>
                    </div>
                    <div>
                        <label for="dep_teacher" class="block uppercase">Department <span
                                class="text-red-700">*</span></label>
                        <input type="tel" name="dep_teacher" id="dep_teacher" placeholder="Choose department"
                            class="p-3 border border-gray-300 rounded my-2 w-full" >
                    </div>
                    <div>
                        <label for="class_info" class="block">Class <span class="text-red-700">*</span></label>
                        <select name="class_info" id="class_info" class="p-3 border border-gray-300 rounded my-2 w-full">
                            <option value="" disabled selected>Select Class</option>
                            <option value="class1">Class 1</option>
                            <option value="class2">Class 2</option>
                            <option value="class3">Class 3</option>
                            <!-- Add more options as needed -->
                        </select>
                        
                    </div>
                    <div>
                        <label for="emp_type" class="block">Employment Type <span class="text-red-700">*</span></label>
                        <select name="emp_type" id="emp_type" class="p-3 border border-gray-300 rounded my-2 w-full">
                            <option value="" disabled selected>Select Employment Type</option>
                            <option value="part-time">Part-Time</option>
                            <option value="full-time">Full-Time</option>
                        </select>
                        
                    </div>

                </div>
            </div>



            <div class="contact_info mt-4 bg-gray-100 p-4 rounded">
                <h1 class="uppercase text-lg mb-2 text-gray-700">Contact Information</h1>
                <hr class="mb-2 bg-black">
                <div class="pi_wrapper text-gray-800 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="">
                        <label for="email_address" class="block uppercase">Email <span
                                class="text-red-700">*</span></label>
                        <input type="email" name="email_address" id="email_address" placeholder="Email Address"
                            class="p-3 border border-gray-300 rounded my-2 w-full" required>
                    </div>
                    <div>
                        <label for="ph_num" class="block uppercase">Phone Number <span
                                class="text-red-700">*</span></label>
                        <input type="tel" name="ph_num" id="ph_num" placeholder="Phone Number"
                            class="p-3 border border-gray-300 rounded my-2 w-full">
                    </div>
                    <div>
                        <label for="pwd" class="block">Password <span class="text-red-700">*</span></label>
                        <input type="password" name="pwd" id="pwd" placeholder="Password"
                            class="p-3 border border-gray-300 rounded my-2 w-full" >
                    </div>
                    <div>
                        <label for="confirm_password" class="block">Confirm Password <span
                                class="text-red-700">*</span></label>
                        <input type="password" name="confirm_password" id="confirm_password"
                            placeholder="Confirm Password" class="p-3 border border-gray-300 rounded my-2 w-full"
                        >
                    </div>
                </div>
            </div>
        </div>
        <div class="user_btn_option mt-4 text-right">
            <div class="text-sm">
                <button type="button"
                    class="text-gray-900  hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-6 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Cancel</button>
                <button type="submit"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg px-5 py-2.5 text-center me-2 mb-2 "><i
                        class="fa-solid fa-plus mr-2"></i> Add Teacher</button>
            </div>
        </div>
    </form>
</div>
@endsection