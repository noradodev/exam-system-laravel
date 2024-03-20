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



<div class="">
    @if (session()->has('success'))
    <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
  <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
  </svg>
  <span class="sr-only">Info</span>
  <div class="ms-3 text-sm font-medium">
    {{ session()->get('success') }}
  </div>
  <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
    <span class="sr-only">Close</span>
    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
    </svg>
  </button>
</div>
   
@endif
    <div class="header_txt flex justify-between bg-white p-4 rounded">
        <h1 class="text-lg font-semibold">Manage Teacher</h1>

        <div class="">
            <a  href="{{route('admin.addTeacher')}}"
                class="text-white text-xs bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg px-5 py-2.5 text-center me-2 mb-2 "><i
                    class="fa-solid fa-plus mr-2"></i> Add Teacher</a>

        </div>

    </div>

    <div class="select_teacher_c bg-white rounded p-4 mt-3 border">
        <div class="select_cre_header">
            <h1 class="text-lg">Select Teacher</h1>

        </div>
        
        <div class=" mt-4">
            <div class="text-xs grid grid-cols-4 gap-4">
                <div class="">
                    <label for="search_name" class="block">SEARCH BY NAME</label>
                    <input type="text" name="search_name" id="search_name" placeholder="Name"
                        class="p-3 border-2 rounded my-2 w-full">
                </div>
                <div class="">
                    <label for="select_class" class="block">CLASS</label>
                    <select name="select_class" id="select_class" class="p-3 border-2 rounded my-2 bg-white w-full">
                        <option value="1">Class 1</option>
                        <option value="2">Class 2</option>
                    </select>

                </div>
                <div class="">
                    <label for="select_class" class="block">SECTION</label>
                    <select name="select_class" id="select_class" class="p-3 border-2 rounded my-2 bg-white w-full">
                        <option value="1">ABC</option>
                        <option value="2">XYZ</option>
                    </select>

                </div>

                <div class="btn-search flex justify-start items-end">
                    <button class="p-3 border-2 rounded my-2 px-4"><i class="fa-solid fa-magnifying-glass mr-2"></i>
                        Search</button>


                </div>
            </div>

        </div>

    </div>

    <div class="student_list bg-white p-4 mt-5 rounded">
        <div class="user_list_header ">
            <h1 class="text-lg">Teachers List</h1>
            

        </div>
        
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg  mt-6">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="text-center">
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                <label for="checkbox-all" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Teacher ID
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            First Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Last Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Date of Birth
                        </th>
                        <th scope="col" class="px-6 py-3 ">
                            Gender
                        </th>
                        <th scope="col" class="px-6 py-3 ">
                            Contact Information
                        </th>
                        <th scope="col" class="px-6 py-3 ">
                            Department
                        </th>
                        <th scope="col" class="px-6 py-3 ">
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachersData as $teacher)
                    <tr class="text-center">
                        <td class="p-4">
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                <label class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <td class="px-6 py-3">{{ $teacher['teacher_id'] }}</td>
                        <td class="px-6 py-3 text-center">{{ $teacher['first_name'] }}</td>
                        <td class="px-6 py-3 text-center">{{ $teacher['last_name'] }}</td>
                        <td class="px-6 py-3 text-center">{{ $teacher['date_of_birth'] }}</td>
                        <td class="px-6 py-3">{{ $teacher['gender'] }}</td>
                        <td class="px-6 py-3">{{ $teacher['contact_information'] }}</td>
                        <td class="px-6 py-3">{{ $teacher['department'] }}</td>
                        <td class="px-6 py-3">
                            <div>
                               <a href="/admin/teacher/edit" class="px-1"> <i class="fa-solid fa-pen-to-square"></i></a>
                               <a href="" class="px-1"><i class="fa-regular fa-eye"></i></a>
                            </div>
                        </td>
                        
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

</div>



@endsection