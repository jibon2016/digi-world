@extends('layouts.app')
@section('title')
    Home
@endsection

@section('main-content')

<!-- Slider Section Start -->
    <section class="slder">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-9">
                    <div class="carusel shadow">
                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active py-1 bg-primary" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" class="py-1 bg-primary" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" class="py-1 bg-primary" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/images/slider/slider-1.png') }}" class="d-block w-100" alt="...">
                                </div>
                                    <div class="carousel-item">
                                <img src="{{ asset('assets/images/slider/slider-2.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/images/slider/slider-3.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">

                    <div class="compare w-100 p-4 shadow">
                        <h4 class="fs-5">Compare Product</h4>
                        <p>Choose Two Product to compare</p>
                        <form class="form-cmpr" action="/product/compare/add" method="POST">
                            @csrf
                            <input type="hidden" name="product_id">
                            <div class="cmpr-feild bg-white py-2 mb-3 items-center">
                                <input type="text" class="border-0 focus-none px-0 w-75 cmpr-product" placeholder="Search your product">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <input type="hidden" class="prod-id">
                            </div>
                            <div class="cmpr-feild bg-white p-0 mb-3">
                                <input type="text" class="border-0 focus-none py-2 px-0 w-75 cmpr-product" placeholder="Search your product">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <input type="hidden" class="prod-id">
                            </div>
                            <button type="submit" class="compare-button border-primary px-3 py-2 text-bold ">View Comparison</button>
                        </form>
                    </div>
                    <div class="ads shadow">
                        <a href="">
                            <img class="" src="{{ asset('assets/images/ads/front-ads.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Section End -->


    <!-- Top Categories Section Start -->
    <section class="top-categories">
        <div class="container">
            <div class="row">
                <h2 class="text-center text-capitalize text-bold fs-3 p-0 mb-5 ">Top Categories</h2>
                <div class="d-flex flex-wrap cart-items p-0">

                    <div class="cat-item">
                        <a class="cart-item-inner" href="#">
                            <span class="cat-icon">
                                <img src="{{ asset('assets/images/icons/electric-appliance.png') }}" alt="Home Applia60s" width=60 height="60">
                            </span>
                            <p>Home Appliances</p>
                        </a>
                    </div>

                    <div class="cat-item">
                        <a class="cart-item-inner" href="#">
                            <span class="cat-icon">
                                <img src="{{ asset('assets/images/icons/drone.png') }}" alt="D60e" width=60 height="60">
                            </span>
                            <p>Drone</p>
                        </a>
                    </div>

                    <div class="cat-item">
                        <a class="cart-item-inner" href="#">
                            <span class="cat-icon">
                                <img src="{{ asset('assets/images/icons/gimbal.png') }}" alt="Gi60l" width=60 height="60">
                            </span>
                            <p>Gimbal</p>
                        </a>
                    </div>

                    <div class="cat-item">
                        <a class="cart-item-inner" href="#">
                            <span class="cat-icon">
                                <img src="{{ asset('assets/images/icons/repair.png') }}" alt="Battery for La60p" width=60 height="60">
                            </span>
                            <p>Battery for Laptop</p>
                        </a>
                    </div>

                    <div class="cat-item">
                        <a class="cart-item-inner" href="#">
                            <span class="cat-icon">
                                <img src="{{ asset('assets/images/icons/tv.png') }}" alt="TV" width=60 height="60">
                            </span>
                            <p>TV</p>
                        </a>
                    </div>

                    <div class="cat-item">
                        <a class="cart-item-inner" href="#">
                            <span class="cat-icon">
                                <img src="{{ asset('assets/images/icons/phone.png') }}" alt="Phone" width=60 height="60">
                            </span>
                            <p>Phone</p>
                        </a>
                    </div>

                    <div class="cat-item">
                        <a class="cart-item-inner" href="#">
                            <span class="cat-icon">
                                <img src="{{ asset('assets/images/icons/power-bank.png') }}" alt="Power Bank" width=60 height="60">
                            </span>
                            <p>Power Bank</p>
                        </a>
                    </div>

                    <div class="cat-item">
                        <a class="cart-item-inner" href="#">
                            <span class="cat-icon">
                                <img src="{{ asset('assets/images/icons/virtual-reality.png') }}" alt="virtual reality" width=60 height="60">
                            </span>
                            <p>VR </p>
                        </a>
                    </div>


                    <div class="cat-item">
                        <a class="cart-item-inner" href="#">
                            <span class="cat-icon">
                                <img src="{{ asset('assets/images/icons/smart-watch.png') }}" alt="smart watch" width=60 height="60">
                            </span>
                            <p>Smart Watch</p>
                        </a>
                    </div>

                    <div class="cat-item">
                        <a class="cart-item-inner" href="#">
                            <span class="cat-icon">
                                <img src="{{ asset('assets/images/icons/phone-accessories.png') }}" alt="Home Applia60s" width=60 height="60">
                            </span>
                            <p>Mobile Accessories</p>
                        </a>
                    </div>

                    <div class="cat-item">
                        <a class="cart-item-inner" href="#">
                            <span class="cat-icon">
                                <img src="{{ asset('assets/images/icons/camera.png') }}" alt="Home Applia60s" width=60" height="60">
                            </span>
                            <p>Action Camera</p>
                        </a>
                    </div>

                    <div class="cat-item">
                        <a class="cart-item-inner" href="#">
                            <span class="cat-icon">
                                <img src="{{ asset('assets/images/icons/earbuds.png') }}" alt="Home Applia60s" width=60" height="60">
                            </span>
                            <p>Earbuds</p>
                        </a>
                    </div>

                    <div class="cat-item">
                        <a class="cart-item-inner" href="#">
                            <span class="cat-icon">
                                <img src="{{ asset('assets/images/icons/headphone.png') }}" alt="Headphone" width=60" height="60">
                            </span>
                            <p>Headphones</p>
                        </a>
                    </div>

                    <div class="cat-item">
                        <a class="cart-item-inner" href="#">
                            <span class="cat-icon">
                                <img src="{{ asset('assets/images/icons/bluetooth-speaker.png') }}" alt="bluetooth-speaker" width=60" height="60">
                            </span>
                            <p>Bluetooth Speaker</p>
                        </a>
                    </div>

                    <div class="cat-item">
                        <a class="cart-item-inner" href="#">
                            <span class="cat-icon">
                                <img src="{{ asset('assets/images/icons/gaming-console.png') }}" alt="gaming-console" width="60" height="60">
                            </span>
                            <p>Gaming Console</p>
                        </a>
                    </div>

                    <div class="cat-item">
                        <a class="cart-item-inner" href="#">
                            <span class="cat-icon">
                                <img src="{{ asset('assets/images/icons/ac.png') }}" alt="AC" width="60" height="60">
                            </span>
                            <p>AC</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Categories Section End -->


    <!-- Featured Products Section Start -->
    <section class="featured-products">
        <div class="container">
            <div class="row">
                <h2 class="text-center text-capitalize text-bold fs-3 p-0 ">Featured Products</h2>
                <p class="text-center text-capitalize fs-6 pb-3">Check & Get Your Desired Product!</p>
                <div class="d-flex flex-wrap p-0 justify-content-lg-start product-items">
                    @foreach($featured as $product)
                        <x-products.home-product-item :$product />
                    @endforeach
                </div>
                <div class="view-all text-center mt-3">
                    <a href="/products" class="view-all-button btn text-center rounded-0 text-white w-24">View All</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Products Section End -->

    <!-- Latest Product Section Start -->
    <section class="latest-products">
        <div class="container">
            <div class="row">
                <h2 class="text-center text-capitalize text-bold fs-3 p-0">Latest Products</h2>
                <p class="text-center text-capitalize fs-6 pb-3">Check & Get Your Desired Product!</p>
                <div class="d-flex flex-wrap p-0 justify-content-lg-start product-items">
                    <!---Single Product start --->
                   @foreach($latest as $product)
                        <x-products.home-product-item :$product />
                    @endforeach
                    <!---Single Product end --->
                </div>
                <div class="view-all text-center mt-3">
                    <a href="/products" class="view-all-button btn text-center rounded-0 text-white w-24">View All</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Products Section End -->


    <!-- Latest Product Section Start -->
    <section class="most-sale-products">
        <div class="container">
            <div class="row">
                <h2 class="text-center text-capitalize text-bold fs-3 p-0">Most Sale Products</h2>
                <p class="text-center text-capitalize fs-6 pb-3">Check & Get Your Desired Product!</p>
                <div class="d-flex flex-wrap p-0 justify-content-lg-start product-items">
                    <!---Single Product start --->
                    @foreach($most_sales as $product)
                        <x-products.home-product-item :$product />
                    @endforeach
                    <!---Single Product end --->
                </div>
                <div class="view-all text-center mt-3">
                    <button class="view-all-button btn text-center rounded-0 text-white w-24">View All</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Products Section End -->

    <!-- Partners Section Start -->
    <section class="our-partners">
        <div class="container">
            <div class="row">
                <h2 class="text-center text-capitalize text-bold fs-3 p-0">Our Partners</h2>
                <p class="text-center text-capitalize fs-6">Check & Get Your Desired Product!</p>
                <div class="col-md-12">
                    <section class="splide" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide partner-slider text-center p-5  d-flex items-center justify-content-center" data-splide-interval="3000">
                                    <img src="{{ asset('assets/images/partners/hp-logo.png') }}" alt="" width="80" height="60">
                                </li>
                                <li class="splide__slide partner-slider text-center p-5 d-flex items-center justify-content-center" data-splide-interval="3000">
                                    <img src="{{ asset('assets/images/partners/dell-logo.png') }}" alt="" width="80" height="60">
                                </li>
                                <li class="splide__slide partner-slider text-center p-5 d-flex items-center justify-content-center" data-splide-interval="3000">
                                    <img src="{{ asset('assets/images/partners/asus-logo.png') }}" alt="" width="80" height="60">
                                </li>
                                <li class="splide__slide partner-slider text-center p-5  d-flex items-center justify-content-center" data-splide-interval="3000">
                                    <img src="{{ asset('assets/images/partners/mac-logo.png') }}" alt="" width="80" height="60">
                                </li>
                                <li class="splide__slide partner-slider text-center p-5  d-flex items-center justify-content-center" data-splide-interval="3000">
                                    <img src="{{ asset('assets/images/partners/amd-logo.png') }}" alt="" width="80" height="60">
                                </li>
                                <li class="splide__slide partner-slider text-center p-5  d-flex items-center justify-content-center" data-splide-interval="3000">
                                    <img src="{{ asset('assets/images/partners/lenovo-logo.png') }}" alt="" width="80" height="60">
                                </li>
                                <li class="splide__slide partner-slider text-center p-5  d-flex items-center justify-content-center" data-splide-interval="3000">
                                    <img src="{{ asset('assets/images/partners/microsoft-logo.png') }}" alt="" width="80" height="60">
                                </li>
                                <li class="splide__slide partner-slider text-center p-5  d-flex items-center justify-content-center" data-splide-interval="3000">
                                    <img src="{{ asset('assets/images/partners/intel-logo.png') }}" alt="" width="80" height="60">
                                </li>
                                <li class="splide__slide partner-slider text-center p-5  d-flex items-center justify-content-center" data-splide-interval="3000">
                                    <img src="{{ asset('assets/images/partners/acer-logo.png') }}" alt="" width="80" height="60">
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
<!-- Partners Section End -->

@endsection



@section('js')
    <script type="text/javascript">
        $(".compare-button").on("click", function () {
            var form = $('.form-cmpr'),  ids = [];
            $(".prod-id").each(function () {
                var $id = $(this);
                if($id.val()) {
                    ids.push($id.val())
                }
            });

            form.find('[name=product_id]').val(ids.join(","))
            form.get(0).submit()
        });

    </script>
@endsection
