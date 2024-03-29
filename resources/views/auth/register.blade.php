@extends('layouts.app')
@section('title')
    User Register
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
                    <li class="link-menu-item"><a class="" href="">Register</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Header Link Section End-->
    
<!-- Register Section Start -->
    <section class="register">
        <div class="container">
            <div class="row">
                <div class="ac-layout">
                    <div class="panel mx-auto">
                        <div class="p-head pb-3">
                            <h2 class="text-center fs-5 ">Register Account</h2>
                        </div>
                        <div class="p-body">
                            <form action="" method="post" id="form-register" enctype="multipart/form-data">
                                @csrf
                                <div class="multiple-form-group">
                                    <div class="form-group required">
                                        <label for="input-firstname">First Name</label>
                                        <input type="text" name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control shadow-none ">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-lastname">Last Name</label>
                                        <input type="text" name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control shadow-none ">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-email">E-Mail</label>
                                    <input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control shadow-none ">
                                </div>
                                <div class="form-group required">
                                    <label for="input-telephone">Telephone</label>
                                    <input type="tel" name="telephone" value="" placeholder="Telephone" id="input-telephone" class="form-control shadow-none ">
                                </div>
                                <div>
                                    <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                                        <div class="grecaptcha-logo">
                                            <iframe title="reCAPTCHA" width="256" height="60" role="presentation" name="a-ins843r3530d" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdMc2UeAAAAAFdL7ez158dH-tnsTyYHOCiBYud4&amp;co=aHR0cHM6Ly93d3cuc3RhcnRlY2guY29tLmJkOjQ0Mw..&amp;hl=en&amp;v=u-xcq3POCWFlCr3x8_IPxgPu&amp;size=invisible&amp;sa=submit&amp;cb=iona09bytqov"></iframe></div>
                                            <div class="grecaptcha-error"></div>
                                            <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe>
                                        </div>
                                    <button type="submit" class="submit-btn" data-callback="onSubmit" data-action="submit">Continue</button>
                                <p class="no-account-text"><span>Already have an account?</span></p>
                                <p>If you already have an account with us, please login at the <a class="login-link" href="/login">login page</a>.</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Register Section End -->

@endsection

{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
