@extends('layouts.app')
@section('title')
    Order History
@endsection

@section('main-content')


<!-- Header Link Section Start -->
<section class="header-link">
    <div class="container">
        <div class="row">
            <div class="col-md-12 link-menu">
                <ul class="">
                    <li class=""><a class="" href=""><i class="fa-solid fa-house-chimney"></i></a></li>
                    <li class="link-menu-item"><a class="" href="/acount">Account</a></li>
                    <li class="link-menu-item"><a class="" href="">Order History</a></li>
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
                    <div class="ac-header">
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
                    <ul class="navbar-nav ac-navbar">
                        <li class="nav-item active"><a href="/orders" class="nav-link"><span class="material-symbols-outlined">chrome_reader_mode</span>Orders</a></li>
                        <li class="nav-item"><a href="/edit-profile" class="nav-link"><span class="material-symbols-outlined">person</span>Edit Account</a></li>
                        <li class="nav-item "><a href="/edit-password" class="nav-link"><span class="material-symbols-outlined">lock</span>Password</a></li>
                        <li class="nav-item"><a href="" class="nav-link"><span class="material-symbols-outlined">book</span>Addresses</a></li>
                        <li class="nav-item"><a href="" class="nav-link"><span class="material-symbols-outlined">favorite_border</span>Saved List</a></li>
                        <li class="nav-item"><a href="" class="nav-link"><span class="material-symbols-outlined">important_devices</span>Saved Pc</a></li>
                        <li class="nav-item"><a href="" class="nav-link"><span class="material-symbols-outlined">stars</span>Points</a></li>
                        <li class="nav-item"><a href="" class="nav-link"><span class="material-symbols-outlined">account_balance_wallet</span>Store Credit</a></li>
                    </ul>
                    <div class="ac-title">
                        <a href="/account"><i class="fa-solid fa-arrow-left"></i></a>
                        <h1 class="fs-5">Order History</h1>
                    </div>
                    <div class="ac-title-help-text">You have not made any previous orders!</div>
                    
                </div>
            </div>
        </div>
    </section>
<!-- Account Section End -->

@endsection
