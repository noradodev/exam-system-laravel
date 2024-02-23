<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');

        body {
            font-family: "Inter", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
            font-variation-settings: "slnt" 0;
        }
    </style>
</head>

<body>
    <div class="container-wrapper">
        <div class="login-wrapper flex h-[calc(100dvh)]">
            <!--login side wrapper section -->
            <div class="l-login-wrapper bg-black w-[100%] sm:w-[33%] px-8">
                <!--Change logo school here-->
                <div class="logo-s-wrapper">
                    <img src="{{url('./assets/logo/logo.png')}}" alt="School Logo" class="h-28">
                </div>
                <div class="sign-in-f-wrapper  mt-8">
                    <h1 class="text-xl text-white mb-8">Sign In as <span class="text-5xl block  font-bold">Student</span></h1>
                    <div class="form-wrapper w-full">
                        <form class="max-w-full">
                            <div class="mb-5 w-full">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full sm:w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="user@lkw.com.edu" required />
                            </div>
                            <div class="mb-2">
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" id="password"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full sm:w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required />
                            </div>
                            <div class="f-forgot-pwd mb-5">
                                <a href=""
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Forgot
                                    Password?</a>
                            </div>
                            <div class="w-full">
                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Login</button>
                            </div>
                            <div class="mt-3 mb-1 text-white">
                                <span class="italic text-gray-300 text-sm">Are you not a student?</span>
                            </div>
                            <div class="w-full">
                                <a href="{{route('teacher-login')}}"
                                    class="text-white border-blue-700 border hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center block">Sign In as Teacher</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Img wrapper section -->
            <div class="r-login-wrapper bg-red-700 w-0 sm:w-[67%]">
                <img src="{{url('./assets/ccc402ea-e6a9-4484-875b-15f2c2e3b8f2.jpg')}}" alt="school-logo"
                    class="object-cover w-full h-full">
            </div>
        </div>
    </div>
</body>

</html>
