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
    {{-- <div class="header_txt">
        <h1 class="text-lg font-light">Manage Teacher</h1>

    </div> --}}
    {{ Breadcrumbs::render() }}

    <div class="select_teacher_c bg-white rounded p-4 mt-3 border">
        <div class="select_cre_header flex justify-between items-center">
            <h1 class="text-lg font-semibold">Teacher Edit</h1>

            <div class=" ">
                <button type="submit"
                    class="text-white text-xs bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg px-5 py-2.5 text-center me-2 mb-2 "><i
                        class="fa-solid fa-check mr-2"></i> Update Teacher</button>

            </div>

        </div>

    </div>

    <div class="student_list bg-white p-4 mt-5 rounded">
        <div class="student_list_header">
            <h1 class="text-lg">Teachers Edit</h1>

        </div>

        <form action="">
            <div class="tab_teacher_edit mt-4">
                <div class="block">
                    <div class="tabs-container overflow-x-auto">
                        <ul class="flex flex-nowrap text-xs font-medium text-center text-gray-500 dark:text-gray-400 whitespace-nowrap" id="tabs">
                            <li class="me-2">
                                <a href="#"
                                    class="tab-link inline-block px-4 py-3 text-slate-700 font-bold rounded-lg hover:bg-gray-100 active-tab"
                                    aria-current="page">PERSONAL INFO</a>
                            </li>
                            <li class="me-2">
                                <a href="#"
                                    class="tab-link inline-block px-4 py-3 rounded-lg text-slate-700 font-bold hover:text-gray-900 hover:bg-gray-100 ">SCHOOL
                                    INFORMATION</a>
                            </li>
                            <li class="me-2">
                                <a href="#"
                                    class="tab-link inline-block px-4 py-3 rounded-lg text-slate-700 font-bold hover:text-gray-900 hover:bg-gray-100 ">OTHER</a>
                            </li>
                            <!-- Add more tabs as needed -->
                        </ul>
                    </div>
                    
                    
                </div>

                {{--
                Tab --}}

                <hr class="my-3">


                <div class="tab-content mt-0" id="tab-content">
                    <!-- Content for each tab goes here -->
                    <div class="tab-pane active-tab transition-opacity duration-300 ease-in-out opacity-100" id="tab1-content">


                        <div class=" rounded p-4 grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
                            <div class="personal_info  bg-gray-100 p-4 rounded">
                                <h1 class="uppercase text-lg mb-2 text-gray-700">Personal Information</h1>
                                <hr class="mb-2 bg-black">
                                <div class="pi_wrapper text-gray-800 grid grid-cols-2 gap-4">

                                    <div class="">
                                        <label for="search_name" class="block">FIRST NAME <span
                                                class="text-red-700">*</span></label>
                                        <input type="text" name="search_name" id="search_name" placeholder="Name"
                                            class="p-3 border border-gray-300 rounded my-2 w-full">


                                    </div>
                                    <div>
                                        <label for="search_name" class="block">LAST NAME <span
                                                class="text-red-700">*</span></label>
                                        <input type="text" name="search_name" id="search_name" placeholder="Name"
                                            class="p-3 border border-gray-300 rounded my-2 w-full">


                                    </div>

                                    <div>
                                        <label for="search_name" class="block">GENDER <span
                                                class="text-red-700">*</span></label>
                                        <input type="text" name="search_name" id="search_name" placeholder="Name"
                                            class="p-3 border border-gray-300 rounded my-2 w-full">


                                    </div>

                                    <div>
                                        <label for="search_name" class="block">DATE OF BIRTH <span
                                                class="text-red-700">*</span></label>
                                        <input type="date" name="search_name" id="search_name" placeholder="Name"
                                            class="p-3 border border-gray-300 rounded my-2 w-full">


                                    </div>

                                    <div>
                                        <label for="search_name" class="block">CASTE <span
                                                class="text-red-700">*</span></label>
                                        <input type="text" name="search_name" id="search_name" placeholder="Name"
                                            class="p-3 border border-gray-300 rounded my-2 w-full">


                                    </div>

                                    <div class="mb-4">
                                        <label for="search_name" class="block uppercase text-gray-700">Teacher Photo
                                            <span class="text-red-700">*</span>
                                        </label>
                                        <input type="file" name="search_name" id="search_name" placeholder="Name"
                                            class="p-3 border border-gray-300 rounded my-2 w-full bg-gray-100 focus:outline-none focus:border-blue-500">
                                    </div>
                                </div>



                            </div>
                            <div class="contact_infomation bg-gray-100 p-4 rounded">
                                <h1 class="uppercase text-lg mb-2 text-gray-700">COntact Information</h1>
                                <hr class="mb-2 bg-black">
                                <div class="contact_info_1 grid grid-cols-2 gap-4">

                                    <div>
                                        <label for="search_name" class="block  uppercase">Email Address <span
                                                class="text-red-700">*</span></label>
                                        <input type="text" name="search_name" id="search_name" placeholder="Name"
                                            class="p-3 border border-gray-300 rounded my-2 w-full">


                                    </div>

                                    <div>
                                        <label for="search_name" class="block  uppercase">Phone Numbers <span
                                                class="text-red-700">*</span></label>
                                        <input type="text" name="search_name" id="search_name" placeholder="Name"
                                            class="p-3 border border-gray-300 rounded my-2 w-full">


                                    </div>


                                </div>
                                <div class="mt-2">
                                    <h1 class="uppercase text-lg mb-2 text-gray-700">Teacher address info</h1>
                                    <hr class="mb-2 bg-black">

                                    <div class="contact_info_2 grid grid-cols-2 gap-4 ">

                                        <div>
                                            <label for="search_name" class="block  uppercase">Current Address<span
                                                    class="text-red-700">*</span></label>
                                            <input type="text" name="search_name" id="search_name" placeholder="Name"
                                                class="p-3 border border-gray-300 rounded my-2 w-full">
                                        </div>

                                        <div>
                                            <label for="search_name" class="block  uppercase">Pernament Address<span
                                                    class="text-red-700">*</span></label>
                                            <input type="text" name="search_name" id="search_name" placeholder="Name"
                                                class="p-3 border border-gray-300 rounded my-2 w-full">
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="tab-pane  transition-opacity duration-300 ease-in-out opacity-0" id="tab2-content">
                        <p>Coming Soon</p>
                    </div>
                    <div class="tab-pane  transition-opacity duration-300 ease-in-out opacity-0" id="tab3-content">
                        <p>Other tab.</p>
                    </div>
                </div>




            </div>


        </form>


    </div>

</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    $(document).ready(function () {
        const tabs = $('.tab-link');
        const tabContents = $('.tab-pane');

        tabs.on('click', function (e) {
            e.preventDefault();

            const clickedTab = $(this);
            const index = tabs.index(clickedTab);

            // Remove 'active-tab' class from all tabs and tab contents
            tabs.removeClass('active-tab');
            tabContents.removeClass('active-tab').animate({ opacity: 0 }, 100);

            // Add 'active-tab' class to the clicked tab and its corresponding tab content
            clickedTab.addClass('active-tab');
            tabContents.eq(index).addClass('active-tab').animate({ opacity: 1, }, 100);
        });
    });
</script>






@endsection