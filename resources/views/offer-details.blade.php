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
                        <li class="link-menu-item"><a class="" href="">ViewSonic Monitor Offer</a></li>
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
                <div class="col-md-6 offset-md-3">
                    <div class="bg-white p-3 my-3 offer-details">
                        <div class="head">
                            <div class="title">
                                <a href="">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </a>
                                    <h3>Offer Details</h3>
                            </div>
                            <div class="countdown" data-date="January 15, 2024 23:59:00">
                                <span class="label">Offer Ends In</span>
                                <div class="count-items">
                                    <span class="group days"><span class="digit">1</span><span class="digit">3</span><span class="tag">Days</span></span>
                                    <span class="group hours"><span class="digit">1</span><span class="digit">4</span><span class="tag">Hours</span></span>
                                    <span class="group minutes"><span class="digit">0</span><span class="digit">9</span><span class="tag">Minutes</span></span>
                                    <span class="group seconds"><span class="digit">3</span><span class="digit">2</span><span class="tag">Seconds</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <img width="600" height="600" src="{{ asset('/assets/images/offers/offer-1.png') }}" alt="ViewSonic Monitor Offer">
                            <h1>ViewSonic Monitor Offer</h1>
                            <p class="offer-info">
                                <span><i class="fa-solid fa-calendar-days"></i> 18 Dec 2023 - 15 Jan 2024</span>
                                <span><i class="fa-solid fa-shop"></i> All Branch</span>
                            </p>
                            <div class="description"><p>স্টার টেক এর যেকোন আউটলেট থেকে ViewSonic Brand এর ২৪" বা ২৪" এর বেশি ডিসপ্লে মনিটর কিনলেই পাচ্ছেন ১০০০ টাকা ক্যাশব্যাক !</p><p><br></p><p><span style="font-weight: bold;">শর্তাবলিঃ</span><br></p><p></p><ul><li>অফারটি ১৮ই ডিসেম্বর - ১৫ই জানুয়ারি পর্যন্ত কার্যকর থাকবে।</li><li>অফারের পণ্যে অন্য কোন অফার থাকলে সম্মানিত ক্রেতাগন যেকোন একটি অফার উপভোগ করতে পারবেন।</li></ul><p></p></div>
                            <h4 class="my-4 fs-5">Click below links to check out our best prices:</h4>
                            <ul>
                                <li><a href="">Buy ViewSonic Monitor</a></li>
                            </ul>
                            <div class="share-on">
                                <span class="share">Share:</span>
                                <span class="icon-sprite share-ico fb-dark" data-type="facebook"><i class="fa-brands fa-facebook-f"></i></span>
                                <span class="icon-sprite share-ico pinterest-dark" data-type="pinterest"><i class="fa-brands fa-pinterest"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offers Content End-->

@endsection
