<!DOCTYPE html>
<html>
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

    <title>Digi-World | Admin Login </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body id="app">
    <!-- Login Section Start -->
    <section class="admin-login font-poppins">
        <div class="bg-cyan-200 min-h-screen w-full flex items-center text-2xl text-center">
            <div class="md:w-4/12 sm:w-8/12 lg:w-4/12 w-10/12 mx-auto px-3 py-8 bg-white shadow-xl rounded-xl">
                <h1 class="border-b tracking-wide pb-3 border-b-blue-700 font-koulen text-cyan-600 uppercase text-extrabold text-3xl">Digi - World</h1>
                <form action="/admin/login" method="POST" class="px-5">
                    @csrf
                    <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 text-left">
                        <div class="sm:col-span-12">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 text-left">
                        <div class="sm:col-span-12">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                            <div class="mt-2">
                                <input id="password" name="password" type="password" autocomplete="password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-center gap-x-6">
                        <button type="submit" class="rounded-md bg-indigo-600 px-8 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Login Section End -->
</body>
</html>
