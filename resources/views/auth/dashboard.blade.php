@extends('layouts.app')
@section('title')
    User Account
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
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Header Link Section End-->
    
<!-- Account Section Start -->
    <section class="account">
        <div class="container">
            <div class="row">
                <div class="ac-layout pb-5">
                    <div class="ac-header" @style([
                        'display: block' => request()->is('account'),
                    ]) >
                        <div class="left">
                            <span class="avatar">
                                <img src="https://www.gravatar.com/avatar/985cd3f7118f70765b10774a9a4eb4d5?s=70&amp;d=mp&amp;r=g" width="80" height="80" alt="JS">
                            </span>
                            <div class="name"><p>Hello,</p><p class="user">Jibon Sutradhar</p></div>
                        </div>
                        <div class="right">
                            <div class="balance">
                              <span class="blurb">Points</span>
                              <span class="amount">0</span>
                            </div>
                            <div class="balance">
                              <span class="blurb">Credit</span>
                              <span class="amount">0</span>
                            </div>
                          </div>
                    </div>
                    {{-- <ul class="navbar-nav ac-navbar">
                        <li class="nav-item active"><a href="" class="nav-link"><span class="material-symbols-outlined">chrome_reader_mode</span>Orders</a></li>
                        <li class="nav-item"><a href="" class="nav-link"><span class="material-symbols-outlined">person</span>Edit Account</a></li>
                        <li class="nav-item"><a href="" class="nav-link"><span class="material-symbols-outlined">lock</span>Password</a></li>
                        <li class="nav-item"><a href="" class="nav-link"><span class="material-symbols-outlined">book</span>Addresses</a></li>
                        <li class="nav-item"><a href="" class="nav-link"><span class="material-symbols-outlined">favorite_border</span>Saved List</a></li>
                        <li class="nav-item"><a href="" class="nav-link"><span class="material-symbols-outlined">important_devices</span>Saved Pc</a></li>
                        <li class="nav-item"><a href="" class="nav-link"><span class="material-symbols-outlined">stars</span>Star Points</a></li>
                        <li class="nav-item"><a href="" class="nav-link"><span class="material-symbols-outlined">account_balance_wallet</span>Store Credit</a></li>
                    </ul> --}}
                    <div class="ac-menus">
                        <div class="ac-menu-item">
                            <a href="/orders" class="ico-btn"><span class="material-symbols-outlined">chrome_reader_mode</span><span>Orders</span></a>
                        </div>
                        <div class="ac-menu-item">
                            <a href="/edit-profile" class="ico-btn"><span class="material-symbols-outlined">person</span><span>Edit Profile</span></a>
                        </div>
                        <div class="ac-menu-item">
                            <a href="/edit-password" class="ico-btn"><span class="material-symbols-outlined">lock</span><span>Change Password</span></a>
                        </div>
                        <div class="ac-menu-item">
                            <a href="" class="ico-btn"><span class="material-symbols-outlined">book</span><span>Addresses</span></a>
                        </div>
                        <div class="ac-menu-item">
                            <a href="" class="ico-btn"><span class="material-symbols-outlined">favorite_border</span><span>Wish List</span></a>
                        </div>
                        <div class="ac-menu-item">
                            <a href="" class="ico-btn"><span class="material-symbols-outlined">important_devices</span><span>Saved PC</span></a>
                        </div>
                        <div class="ac-menu-item">
                            <a href="" class="ico-btn"><span class="material-symbols-outlined">account_balance_wallet</span><span>Your Transactions</span></a>
                        </div>
                        {{-- <div class="ac-menu-item h-desk">
                            <a href="" class="ico-btn"><span class="material-symbols-outlined">input</span><span>Logout</span></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Account Section End -->

@endsection
