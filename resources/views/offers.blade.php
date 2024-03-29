@extends('layouts.app')
@section('title')
    Offers
@endsection

@section('main-content')
    <!-- Header Link Section Start -->
    <section class="header-link">
        <div class="container">
            <div class="row">
                <div class="col-md-12 link-menu">
                    <ul class="">
                        <li class=""><a class="" href=""><i class="fa-solid fa-house-chimney"></i></a></li>
                        <li class="link-menu-item"><a class="" href="">Offers</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Link Section End-->

    <!-- Offers Content Start-->
    <section class="product-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-xs-12 offer my-4">
                    <div class="offer-content ws-box">
                        <a href=""><img src="{{ asset('assets/images/offers/offer-1.png') }}" alt="ViewSonic Monitor Offer" width="400" height="400"></a>
                        <div class="details">
                            <p class="offer-info">
                                <span><i class="fa-solid fa-calendar-days"></i> 18 Dec 2023 - 15 Jan 2024</span>
                                <span><i class="fa-solid fa-shop"></i> All Branch</span>
                            </p>
                            <a href=""><h4 class="title">ViewSonic Monitor Offer</h4></a>
                            <p class="short-desc">Buy ViewSonic Monitor &amp; Get 1000 Taka Cashback!</p>
                            <a href="/offer-details" class="view-btn view-details">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 offer my-4">
                    <div class="offer-content ws-box">
                        <a href=""><img src="{{ asset('assets/images/offers/offer-2.png') }}" alt="ViewSonic Monitor Offer" width="400" height="400"></a>
                        <div class="details">
                            <p class="offer-info">
                                <span><i class="fa-solid fa-calendar-days"></i>  27 Dec 2023 - 07 Jan 2024</span>
                                <span><i class="fa-solid fa-shop"></i> All Branch</span>
                            </p>
                            <a href=""><h4 class="title">Corsair Monitor Offer</h4></a>
                            <p class="short-desc">Buy Any Corsair Monitor & Get Smart Watch Absolutely Free!</p>
                            <a href="/offer-details" class="view-btn view-details">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offers Content End-->

@endsection
