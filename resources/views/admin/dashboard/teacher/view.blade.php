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


<div class="teacher_detailed_wrapper">
    <div class="select_teacher_c bg-white rounded p-4 mt-3 border">
        <div class="select_cre_header">
            <h1 class="text-lg font-semibold">Teacher Information</h1>

        </div>

    </div>
    <div class="section_wrapper flex flex-col md:flex-row mt-4 gap-4">
        <div class="card_users teacher_card_wrapper text-gray-800  bg-white h-[33rem] sticky flex-1 p-4 rounded ">
            <div class="top_head_card ">
                {{-- test img --}}
                <div class="relative">
                    <div class="absolute bg-black top-0 w-full h-32 rounded-md z-0">
                    </div>
                </div>
            </div>

            <div class="user_photo">
                <div class="img relative z-50 mt-12 ml-5">
                    <img src="{{asset('assets/businessman-character-avatar-isolated_24877-60111.avif')}}" alt="h1"
                        class="w-32">
                </div>

            </div>


            <div class="teacher_info_page mt-4 divide-y-4 divide-slate-400/25">
                <div class="teacher_name flex justify-between py-2">
                    <p>Teacher Name</p>
                    <p class="font-bold">Rado No</p>

                </div>

                <div class="teacher_id flex justify-between py-2">
                    <p>Teacher ID</p>
                    <p class="font-bold">0339292</p>

                </div>


                <div class="teacher_dateofbirth flex justify-between py-2">
                    <p>Date of Birth</p>
                    <p class="font-bold">16/02/2005</p>

                </div>
                <div class="teacher_qr py-2">
                    <p>QR CODE</p>
                    <img src="{{asset('assets/linkedin.png')}}" alt="" class="w-32 mt-2">

                </div>


            </div>



        </div>
        <div class="teacher_info_wrapper w-3/4 bg-white">

            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                            data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="true">Profile</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">Classes</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false">Settings</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                            aria-controls="contacts" aria-selected="false">Contacts</button>
                    </li>
                </ul>
            </div>

            <div id="default-tab-content">

                <div class=" mx-4 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h1 class="text-2xl p-4 pt-0">Basic Information</h1>


                    <div class=" rounded-lg bg-gray-50 text-sm">
                        <div class="pro_wrapper_info divide-y divide-blue-200">
                            <div class="name_prof grid grid-cols-2 p-4">
                                <h1 class="text-gray-500">First Name</h1>
                                <h3 class="font-bold">Rado</h3>
                            </div>
                            <div class="name_prof grid grid-cols-2 p-4">
                                <h1 class="text-gray-500">Last Name</h1>
                                <h3 class="font-bold">No</h3>
                            </div>

                            <div class="name_prof grid grid-cols-2 p-4">
                                <h1 class="text-gray-500">Gender</h1>
                                <h3 class="font-bold">Male</h3>
                            </div>

                            <div class="name_prof grid grid-cols-2 p-4">
                                <h1 class="text-gray-500">Date of Birth</h1>
                                <h3 class="font-bold">16 Feb 2005</h3>
                            </div>

                            <div class="name_prof grid grid-cols-2 p-4">
                                <h1 class="text-gray-500">Address</h1>
                                <h3 class="font-bold">209 Phnom Penh, Cambodia</h3>
                            </div>
                        </div>
                    </div>
                    <div class=" mb-4">
                        <h1 class="text-2xl p-4 pt-0">Contact Information</h1>

                        <div class=" rounded-lg bg-gray-50">

                            <div class="pro_wrapper_info divide-y divide-blue-200">
                                <div class="name_prof grid grid-cols-2 p-4">
                                    <h1 class="text-gray-500">Email</h1>
                                    <h3 class="font-bold">Radoxml@gmail.com</h3>
                                </div>
                                <div class="name_prof grid grid-cols-2 p-4">
                                    <h1 class="text-gray-500">Phone Number</h1>
                                    <h3 class="font-bold">+855 11899276</h3>
                                </div>
                            </div>

                        </div>


                    </div>


                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
                    aria-labelledby="dashboard-tab">
                   Class Information
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"
                    aria-labelledby="settings-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                            class="font-medium text-gray-800 dark:text-white">Settings tab's associated
                            content</strong>. Clicking another tab will toggle the visibility of this one for the next.
                        The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"
                    aria-labelledby="contacts-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                            class="font-medium text-gray-800 dark:text-white">Contacts tab's associated
                            content</strong>. Clicking another tab will toggle the visibility of this one for the next.
                        The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
            </div>

        </div>

    </div>

</div>



<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('[role="tab"]').on('click', function () {
            var target = $(this).data('tabs-target');

            // Hide all tab contents
            $('[role="tabpanel"]').addClass('hidden');

            // Show the selected tab content
            $(target).removeClass('hidden');

            // Reset the active state for all tabs
            $('[role="tab"]').attr('aria-selected', 'false');

            // Set the active state for the clicked tab
            $(this).attr('aria-selected', 'true');
        });
    });
</script>


@endsection