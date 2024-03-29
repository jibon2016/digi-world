<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- fonts api-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <title>Digi-World | @yield('title') </title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body id="app">
        <!-- Admin Content Start -->
        <div class="relative flex min-h-screen" x-data="{ show: true, drop: false }">
            <!-- Sidebar Start -->
            @include('admin.layout.sidebar')
            <!-- Sidebar End -->

            <!-- MainContent Start -->
            <div class="relative w-full" x-bind:style="show && {width: 'calc(100% - 18rem)'}">
                <!-- Header Start -->
                <div class="bg-white shadow px-2 py-3 flex justify-between w-full pe-10 z-10 top-0" style="position: sticky">
                    <div class="search-button flex items-center space-x-4 w-1/2">
                        <button x-on:click="show = !show" class="text-cyan-600 font-extrabold ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                        <div class="search flex-grow">
                            <input type="text" name="search" class="p-1 md:w-8/12 ps-3 rounded-2x border-gray-300" placeholder="Search">
                        </div>
                    </div>
                    <div class="user w-1/2 justify-end flex relative">
                        <div class="user-image me-3">
                            <button x-on:click="drop = !drop"><img class="border border-gray-600 rounded-3xl" src="https://www.gravatar.com/avatar/985cd3f7118f70765b10774a9a4eb4d5?s=35&amp;d=mp&amp;r=g" alt=""></button>
                        </div>
                        <div x-show="drop" x-on:click.outside="drop = false" class="absolute top-11 right-0 z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-32 dark:bg-gray-700">
                            <ul class="text-center py-2 text-sm text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="/admin/logout" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Header End -->
                <!-- Content Start -->
                <div class=" px-8 py-2 h-full bg-gray-200 w-full" >
                    @yield('main-content')
                </div>
                <!-- Content End -->
            </div>
            <!-- MainContent End -->
        </div>
        <!-- Admin Content End -->
    </body>
</html>
