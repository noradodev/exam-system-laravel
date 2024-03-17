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

<div class="dashboard_wrapper">
    

    <div class="dashboard-top">

        <div class="summ_info grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5">

            {{-- Card one --}}
            <div class="card_info bg-white py-8 rounded-xl flex items-center  ">
                <div class="icon-section p-2 py-3 mx-4 ml-10 rounded-lg bg-pink-200">
                    <i class="fa-solid fa-chalkboard-user fa-lg px-1 text-pink-500"></i>
                </div>
                <div class="static_info">
                    <span class="text-md text-gray-600">Teachers</span>
                    <h2 class="text-4xl font-bold">100</h2>

                </div>
            </div>

            {{-- Card one --}}
            <div class="card_info bg-white py-8 rounded-xl flex items-center  ">
                <div class="icon-section p-2 py-3 mx-4 ml-10 rounded-lg bg-green-200">
                    <i class="fa-solid fa-user-graduate px-2 fa-lg bg-green-500 "></i>
                </div>
                <div class="static_info">
                    <span class="text-md  text-gray-600">Students</span>
                    <h2 class="text-4xl font-bold">100</h2>

                </div>
            </div>


            {{-- Card one --}}
            <div class="card_info bg-white py-8 rounded-xl flex items-center  ">
                <div class="icon-section p-2 py-3 mx-4 ml-10 rounded-lg bg-gray-200">
                    <i class="fa-solid fa-school px-1 fa-lg text-gray-500"></i>
                </div>
                <div class="static_info">
                    <span class="text-md  text-gray-600">Classes</span>
                    <h2 class="text-4xl font-bold">100</h2>

                </div>
            </div>

            {{-- Card one --}}
            <div class="card_info bg-white py-8 rounded-xl flex items-center  ">
                <div class="icon-section p-2 py-3 mx-4 ml-10 rounded-lg bg-blue-200">
                    <i class="fa-solid fa-book-open fa-lg px-1 text-blue-500"></i>
                </div>
                <div class="static_info">
                    <span class="text-md  text-gray-600">All exam</span>
                    <h2 class="text-4xl font-bold">100</h2>

                </div>
            </div>



        </div>


    </div>

    <div class="content-section mt-5">
        <div class="dash_body_container grid grid-cols-1 md:grid-cols-2 gap-4">

            <div class="exam_result_container">
                <div class="">
                    <h1>Exam & Quiz</h1>
                </div>
                <div class="exam_result bg-white p-5 mt-4 rounded-md">

                    {{-- Elemement of each exam --}}

                    <div class="exam_list_wrapper flex justify-between bg-blue-200 p-3 rounded-lg">
                        <div class="flex">
                            <div class="exam_picture">
                                <img src="{{url('assets/php.jpg')}}" alt="" class="rounded-full w-14">

                            </div>
                            <div class="exam_info_short ml-3">
                                <div class="txt_exam_class">
                                    <h2>Web Developement Class 2</h2>
                                </div>
                                <div class="txt_info_exam flex items-center">
                                    <span class="module_code text-xs">BSME1</span>
                                    <span class="px-2">•</span>
                                    <p class="teacher_name text-sm font-semibold"> Rado No</p>

                                </div>

                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                            <h2 class="text-sm text-blue-900">On-Going</h2>

                        </div>
                    </div>



                    <div class="exam_list_wrapper flex justify-between p-3 rounded-lg">
                        <div class="flex">
                            <div class="exam_picture">
                                <img src="{{url('assets/php.jpg')}}" alt="" class="rounded-full w-14">

                            </div>
                            <div class="exam_info_short ml-3">
                                <div class="txt_exam_class">
                                    <h2>Web Developement Class 2</h2>
                                </div>
                                <div class="txt_info_exam flex items-center">
                                    <span class="module_code text-xs">BSME1</span>
                                    <span class="px-2">•</span>
                                    <p class="teacher_name text-sm font-semibold"> Rado No</p>

                                </div>

                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                            <h2 class="text-sm ">8:00 PM</h2>

                        </div>
                    </div>



                    <div class="exam_list_wrapper flex justify-between p-3 rounded-lg">
                        <div class="flex">
                            <div class="exam_picture">
                                <img src="{{url('assets/php.jpg')}}" alt="" class="rounded-full w-14">

                            </div>
                            <div class="exam_info_short ml-3">
                                <div class="txt_exam_class">
                                    <h2>Web Developement Class 2</h2>
                                </div>
                                <div class="txt_info_exam flex items-center">
                                    <span class="module_code text-xs">BSME1</span>
                                    <span class="px-2">•</span>
                                    <p class="teacher_name text-sm font-semibold"> Rado No</p>

                                </div>

                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                            <h2 class="text-sm ">1:00 PM</h2>

                        </div>
                    </div>


                    <div class="exam_list_wrapper flex justify-between p-3 rounded-lg">
                        <div class="flex">
                            <div class="exam_picture">
                                <img src="{{url('assets/php.jpg')}}" alt="" class="rounded-full w-14">

                            </div>
                            <div class="exam_info_short ml-3">
                                <div class="txt_exam_class">
                                    <h2>Web Developement Class 2</h2>
                                </div>
                                <div class="txt_info_exam flex items-center">
                                    <span class="module_code text-xs">BSME1</span>
                                    <span class="px-2">•</span>
                                    <p class="teacher_name text-sm font-semibold"> Rado No</p>

                                </div>

                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                            <h2 class="text-sm">12:00 PM</h2>

                        </div>
                    </div>




                </div>
            </div>

            <div class="student_exam_taken">
                <div class="">
                    <h1>Exam Taken</h1>
                </div>
                <div class="bg-white mt-4 rounded-md p-3 h-full">
                    <canvas id="myChart"></canvas>
               </div>

            </div>

        </div>

    </div>


</div>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('myChart');
  
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
@endsection