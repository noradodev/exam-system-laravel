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
                        <ul class="space-y-2 font-medium">
                            <li>
                               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                  <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                     <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                                     <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                                  </svg>
                                  <span class="ms-3 menu-txt">Dashboard</span>
                               </a>
                            </li>
                            <li>
                               <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                     <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                                        <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                                     </svg>
                                     <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap menu-txt">E-commerce</span>
                                     <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                     </svg>
                               </button>
                               <ul id="dropdown-example" class="hidden py-2 space-y-2">
                                     <li>
                                        <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                                     </li>
                                     <li>
                                        <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
                                     </li>
                                     <li>
                                        <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
                                     </li>
                               </ul>
                            </li>
                            <li>
                               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                  <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                     <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                                  </svg>
                                  <span class="flex-1 ms-3 whitespace-nowrap">Kanban</span>
                                  <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                               </a>
                            </li>
                            <li>
                               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                  <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                     <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
                                  </svg>
                                  <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                                  <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                               </a>
                            </li>
                            <li>
                               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                  <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                     <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                                  </svg>
                                  <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                               </a>
                            </li>
                            <li>
                               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                  <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                     <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                                  </svg>
                                  <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                               </a>
                            </li>
                            <li>
                               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                  <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                                  </svg>
                                  <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                               </a>
                            </li>
                            <li>
                               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                  <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                     <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                                     <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                                     <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
                                  </svg>
                                  <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                               </a>
                            </li>
                         </ul>
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
