@extends('layouts.app')
@section('title')
    User Login
@endsection

@section('main-content')


<!-- Header Link Section Start -->
<section class="header-link">
    <div class="container">
        <div class="row">
            <div class="col-md-12 link-menu">
                <ul class="">
                    <li class=""><a class="" href=""><i class="fa-solid fa-house-chimney"></i></a></li>
                    <li class="link-menu-item"><a class="" href="">Account</a></li>
                    <li class="link-menu-item"><a class="" href="">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Header Link Section End-->
    
<!-- Login Section Start -->
    <section class="login">
        <div class="container">
            <div class="row">
                <div class="ac-layout">
                    <div class="panel mx-auto">
                        <div class="p-head">
                            <h2 class="text-center fs-5">Account Login</h2>
                        </div>
                        <div class="p-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="control-label" for="input-username">Phone / E-Mail</label>
                                    <input type="text" name="username" value="" placeholder="Phone / E-Mail" id="input-username" class="form-control shadow-none ">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="input-password">Password</label>
                                    <a class="forgot-password" href="">Forgotten Password?</a>
                                    <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control shadow-none ">
                                </div>
                                <button type="submit" class="submit-btn">Login</button>
                            </form>
                            <p class="no-account-text"><span>Don't have an account?</span></p>
                            <a class="gift-btn st-outline" href="/register">Create Your Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Login Section End -->

@endsection

{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
