<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Document</title>
    <!-- Include Tailwind CSS -->
    @vite('resources/css/app.css')

    <style>
        body {
            background: #edecec;
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Other custom styles can be added here */

        /* This style ensures main content is scrollable */
        .r-s-content {
            overflow-y: auto;
        }


        /* Add this to your existing styles or create a new stylesheet */
        .nav-link.active {
            /* Your active styles go here */
            background-color: #93c5fd;
            /* Set your desired background color */
            color: #1e3a8a;
            border-radius: 0.5rem
                /* Set your desired text color */
                /* Add any other styles you want for the active state */
        }

        .active-tab {
            --tw-bg-opacity: 1;
            background-color: rgb(147 197 253 / var(--tw-bg-opacity));
        }

        .tab-content .tab-pane {
            background: none !important;
            display: none;
        }

        .tab-content .tab-pane.active-tab {
            display: block;
        }
    </style>
</head>

<body class="font-poppins">

    <div class="dashboard">
        <div class="dash-wrapper flex">
            <!-- Sidebar -->
            <div class="sidebar-wrapper sm:relative z-50 bg-white w-64 sm:block fixed sm:left-0 top-0 h-screen p-4 border-r">
                <!-- Sidebar content -->
                <div class="sidebar-collapse hidden sm:block absolute bg-white border -right-3 top-11 border-black rounded-full p-1">
                    <img width="15" height="15" src="https://img.icons8.com/ios-filled/50/forward--v1.png" alt="forward--v1" class="collapse-img transition-all" />
                </div>
                <div class="logo-app flex justify-between">
                    <div>
                        <img src="{{url('/assets/logo/logo.png')}}" alt="logo" class="w-20">
                    </div>
                    <div class="">
                        <button onclick="toggleClose()" class="flex h-full items-center hover:bg-slate-300 px-2 sm:hidden rounded-md">
                            <img width="14" height="14" src="https://img.icons8.com/material-rounded/24/delete-sign.png" alt="delete-sign" />
                        </button>
                    </div>
                </div>
                <hr class="my-6">
                <div class="menu-bar">
                    <div class="link-dash-menu text-gray-800 text-sm">
                        <div class="menu-container w-full mb-1 nav-link {{Request::is('admin/dashboard') ? " active" : " " }}">
                            <a href="{{route('dashboard.admin')}}" class="hover:bg-blue-300 hover:text-blue-800 w-full py-2 px-1 rounded-lg flex items-center">
                                <div>
                                    <i class="fa-solid fa-chart-simple fa-lg px-2"></i><span class="menu-txt px-2">Dashboard</span>
                                </div>
                            </a>
                        </div>
                        <div class="menu-container w-full mb-1 nav-link {{Request::is('admin/teachers') ? " active" : " " }}">
                            <a href="{{route('admin.teacher')}}" class=" hover:bg-blue-300 hover:text-blue-800 w-full py-2 px-1 rounded-lg flex items-center">
                                <div>
                                    <i class="fa-solid fa-chalkboard-user fa-lg px-1"></i><span class="menu-txt px-2">Teachers</span>
                                </div>
                            </a>
                        </div>
                        <div class="menu-container w-full mb-2 nav-link {{Request::is('admin/students') ? " active" : " " }}">
                            <a href="" class="link-item hover:bg-blue-300 hover:text-blue-800 w-full py-2 px-1 rounded-lg flex items-center">
                                <div>
                                    <i class="fa-solid fa-user-graduate pl-2 pr-1 fa-lg "></i>
                                    <span class="menu-txt px-2">Students</span>
                                </div>
                            </a>
                        </div>
                        <hr class="mb-2">
                        <div class="menu-container w-full mb-1 nav-link {{Request::is('admin/students') ? " active" : " " }}">
                            <a href="" class="link-item hover:bg-blue-300 hover:text-blue-800 w-full py-2 px-1 rounded-lg flex items-center">
                                <div>
                                    <i class="fa-solid fa-gear px-[0.40rem] fa-lg "></i>
                                    <span class="menu-txt px-1">Setting</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Content -->
            <div class="r-s-content w-full overflow-y-auto h-screen">
                <div class="header-bar-content bg-white">
                    <!-- Rest of your header content -->
                    @yield('header_admin')
                </div>
                <div class="main-content p-4 ">
                    @yield('dashboard_admin')
                </div>
            </div>
        </div>
    </div>

    <!-- Include your script files here -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('script')
    <script>
const btnCollapse = document.querySelector(".sidebar-collapse");
  const sideBarNoText = document.querySelector(".sidebar-wrapper");
  const collapseImg = document.querySelector(".collapse-img");
  const menuText = document.querySelectorAll(".menu-txt");
  const link_item = document.querySelector('.link-item');
  // Check if the sidebar state is stored in localStorage
  const isSidebarCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';

  // Set the initial state based on localStorage
  sideBarNoText.classList.toggle("w-[4.5rem]", isSidebarCollapsed);
  collapseImg.classList.toggle("rotate-180", isSidebarCollapsed);

  // Loop through each menu text element and toggle the "hidden" class
  menuText.forEach(function(menuItem) {
      menuItem.classList.toggle("hidden", isSidebarCollapsed);
  });

  btnCollapse.addEventListener("click", function() {
      sideBarNoText.classList.toggle("w-[4.5rem]");
      collapseImg.classList.toggle("rotate-180");

    //   link_item.classList.toggle("justify-center")

      // Loop through each menu text element and toggle the "hidden" class
      menuText.forEach(function(menuItem) {
          menuItem.classList.toggle("hidden");
      });

      // Store the current sidebar state in localStorage
      localStorage.setItem('sidebarCollapsed', sideBarNoText.classList.contains('w-[4.5rem]'));
  });

  function openSidebar(){
      sideBarNoText.classList.toggle("left-[0px]");
  }

  function toggleClose(){
      sideBarNoText.classList.toggle("left-[0px]");
  }
    </script>
  
    
</body>

</html>
