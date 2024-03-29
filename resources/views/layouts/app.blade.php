<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Digi-World | @yield('title') </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:3000,600&display=swap" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,3000;0,500;0,600;0,800;1,3000;1,500;1,600;1,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,3000;0,500;0,800;0,900;1,100;1,300;1,3000;1,500;1,800;1,900&display=swap" rel="stylesheet">


        <!-- Google Material Icon -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

        <!-- Splide CSS link -->
        <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

        <!-- Font Awsome link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap CSS Links -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <!-- Custom CSS link -->
        <link rel="stylesheet" href="{{ asset('assets/css/loader.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" type="text/css">
        {{-- <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}" type="text/css"> --}}
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Lora', serif;
            }
        </style>
    </head>
    <body>

        <div class="container-fluid m-0 p-0">
            <div class="bg-color">

                <!-- Header Section Start -->
                @include('layouts.header')
                <!-- Header Section End -->

                <!-- Category Section Start -->
                @include('layouts.navigation')
                <!-- Category Section End -->

                <!-- Main Content Section Start-->
                @yield('main-content')
                <!-- Main Content Section End-->


                <!-- Footer Section Sstart -->
                @include('layouts.footer')
                <!-- Footer Section End -->

            </div> <!--Background Color -->

        </div> <!-- Container fluid -->

        <div class="drops">
            <div class="drop"></div>
            <div class="drop"></div>
            <div class="drop"></div>
            <div class="drop"></div>
        </div>



        <!-- Splide JS Links -->
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
        <!-- Bootstrap JS Links -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!-- Jquery Link -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <!-- Custom JS Link -->
        <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>

        @yield('js')
    </body>
</html>
