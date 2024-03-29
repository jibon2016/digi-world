@extends('layouts.app')
@section('title')
    {{ $product->name }}
@endsection

@section('main-content')
    <!-- Header Link Section Start -->
    <section class="header-link">
        <div class="container">
            <div class="row">
                <div class="col-md-12 link-menu">
                    <ul class="">
                        <li class=""><a class="" href=""><i class="fa-solid fa-house-chimney"></i></a></li>
                        <li class="link-menu-item"><a class="" href="">Products</a></li>
                        <li class="link-menu-item"><a class="" href="">Intel</a></li>
                        <li class="link-menu-item"><a class="" href="">{{ $description->title }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Link Section End-->

    <!-- Product Content Start-->
    <section class="product-content">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-12 p-0">
                     <div class="col-md-12 d-flex bg-white rounded-2xl border shadow justify-content-between">
                         <h4 class="fs-6 font-bold px-3 py-1 align-items-center d-flex gap-1 m-0">Share:
                            <i class="fa-brands fa-facebook"></i> <i class="fa-brands fa-pinterest"></i>
                         </h4>
                         <div class="sorting-section px-3 py-1">
                             <a class="products-brand text-decoration-none text-dark font-bold" href=""><i class="fa-regular fa-square-plus"></i> Add to Compare </a>
                         </div>
                     </div>
                    <div class="col-md-12">
                        <div class="pb-5 d-flex flex-wrap bg-white shadow p-0 justify-content-lg-start single-product-items my-3">
                            <div class="single-product-image p-5">
                                <img src="{{ asset('storage/'. $description->image) }}" alt="" width="100%" height="100px">
                            </div>
                            <div class="single-product-content px-5 mt-4">
                                <h2 class="fs-4">{{ $product->name }}</h2>
                                <div class="all-price d-flex flex-row flex-wrap">
                                    <span class="single-price m-2 p-2 rounded">Price: <strong>{{$description->offer_price}}৳</strong> <b class="text-decoration-line-through text-secondary ">{{ $description->discount_price }}৳</b></span>
                                    <span class="single-price m-2 p-2 rounded">Regular Price: <strong>{{$description->regular_price}}৳</strong> </span>
                                    <span class="single-price m-2 p-2 rounded">Status: <strong>In Stock</strong> </span>
                                    <span class="single-price m-2 p-2 rounded">Product code: <strong>31745</strong></span>
                                    <span class="single-price m-2 p-2 rounded">Brand: <strong>Acer</strong></span>
                                </div>
                                <div class="product-details text-black pb-2">
                                    <h4 class="fs-5">Key Features</h4>
                                    <ul class="list-group">
                                        <li class="m-0 pb-2" >Model: {{$description->model }}</li>
                                        <li class="m-0 pb-2">{{$description->processor}}</li>
                                        @if($description->motherboard)
                                        <li class="m-0 pb-2">{{$description->motherboard}}</li>
                                        @endif
                                        <li class="m-0 pb-2">{{$description->ram}}</li>
                                        <li class="m-0 pb-2">{{$description->storage}}</li>
{{--                                        <li class="view-more-button" data-area="specification">View More Info</li>--}}
                                    </ul>
                                </div>
                                <h5>Payment Option</h5>
                                <div class="product-price-option">
                                    <label class="p-wrap cash-payment active">
                                        <input type="radio" name="enable_emi" checked="" value="0">
                                        <span class="price">
                                            <span class="price-new">{{$description->offer_price}}৳</span>
                                            <span class="price-old">{{$description->regular_price}}৳</span>
                                        </span>
                                        <div class="p-tag">Cash Discount Price</div>
                                        <div class="p-tag">Online / Cash Payment</div>
                                    </label>
                                    <label class="p-wrap">
                                        <input type="radio" name="enable_emi" value="1">
                                        <span class="price">{{$description->offer_price}}৳/month</span>
                                        <div class="p-tag">Regular Price: 25,790৳</div>
                                        <div class="p-tag ">0% EMI for up to 12 Months***</div>
                                    </label>
                                </div>
                                <div class="cart-option">
                                    <label class="quantity">
                                        <span class="ctl"><i class="fa-solid fa-minus"></i></span>
                                        <span class="qty"><input type="text" name="quantity" id="input-quantity" value="1" size="2"></span>
                                        <span class="ctl increment"><i class="fa-solid fa-plus"></i></span>
                                        <input type="hidden" name="product_id" value="31745">
                                    </label>
                                    <a href="/checkout" id="button-cart" class="submit-btn text-decoration-none" data-loading-text="Loading...">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Content End-->

    <!-- Product Description Start-->
    <section class="product-description">
        <div class="container">
            <div class="row">
                <div class="col-md-9 my-3">
                    <div class="navs">
                        <ul class="nav">
                            <li data-area="specification">Specification</li>
                            <li data-area="description">Description</li>
                            <li data-area="write-review">Reviews (2)</li>
                        </ul>
                    </div>
                    <section id="specification" class="p-3 my-2 bg-white shadow-1">
                        <div class="section-head">
                            <h2>Specification</h2>
                        </div>
                        <table class="data-table flex-table" cellpadding="0" cellspacing="0">
                            <colgroup>
                                <col class="name">
                                <col class="value">
                            </colgroup>
                            @if($product->type === 'Desktop')
                                <thead>
                                <tr>
                                    <td class="heading-row" colspan="3">Basic Information</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="name">Processor</td><td class="value">{{$description->processor}}</td>
                                </tr><tr>
                                    <td class="name">MotherBoard</td><td class="value">{{$description->motherboard}}</td>
                                </tr><tr>
                                    <td class="name">RAM</td><td class="value">{{$description->ram}}</td>
                                </tr><tr>
                                    <td class="name">Storage</td><td class="value">{{$description->storage}}</td>
                                </tr>
                                @if($description->casing)
                                    <tr>
                                        <td class="name">Casing</td><td class="value">{{$description->casing}}</td>
                                    </tr>
                                @endif
                                </tbody>
                            @else

                            <thead>
                                <tr>
                                    <td class="heading-row" colspan="3">Display Features</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="name">Display Size</td><td class="value">21.45 inch</td>
                                </tr><tr>
                                    <td class="name">Display Type</td><td class="value">LED</td>
                                </tr><tr>
                                    <td class="name">Panel Type</td><td class="value">VA</td>
                                </tr><tr>
                                    <td class="name">Resolution</td><td class="value">Full HD (1920 x 1080)</td>
                                </tr><tr>
                                    <td class="name">Pixel pitch(MM)</td><td class="value">0.2493(H) x 0.241(V)</td>
                                </tr><tr>
                                    <td class="name">Display Surface</td><td class="value">Anti-glare</td>
                                </tr><tr>
                                    <td class="name">Aspect Ratio</td><td class="value">16:9</td>
                                </tr><tr>
                                    <td class="name">Viewing Angle</td><td class="value">178°(H) / 178°(V)</td>
                                </tr><tr>
                                    <td class="name">Brightness</td><td class="value">250 nits</td>
                                </tr><tr>
                                    <td class="name">Contrast Ratio</td><td class="value">3000:1 (TYP)</td>
                                </tr><tr>
                                    <td class="name">Refresh Rate</td><td class="value">100Hz</td>
                                </tr><tr>
                                    <td class="name">Color Support</td><td class="value">16.7M</td>
                                </tr><tr>
                                    <td class="name">Color Gamut</td><td class="value">97.30% SRGB</td>
                                </tr><tr>
                                    <td class="name">Response Time</td><td class="value">1ms</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="heading-row" colspan="3">Mechanical Design</td>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="name">Tilt</td><td class="value">-5° ~ 20°<br>
                                </td>
                            </tr>
                            <tr>
                                <td class="name">Vesa Wall Mount</td><td class="value">75 x 75 mm</td>
                            </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="heading-row" colspan="3">Physical Specification</td>
                                </tr>
                            </thead>
                            <tbody>
                                 <tr>
                                    <td class="name">Dimension</td><td class="value">558 x 116 x 367mm</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="heading-row" colspan="3">Power</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="name">Type</td><td class="value">External Adaptor 30W</td>
                                </tr>
                                <tr>
                                    <td class="name">Voltage</td><td class="value">100~240V, 50~60Hz<br>
                                    </td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="heading-row" colspan="3">Warranty Information</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="name">Warranty</td><td class="value">3 Years </td>
                                </tr>
                            </tbody>
                            @endif
                        </table>
                    </section>
                    <section id="description" class="p-3 my-2 bg-white shadow-1">
                        <div class="section-head">
                            <h2>Description</h2>
                        </div>
                        <div class="full-description" itemprop="description">
                            <h2>MSI PRO MP223 21.45" Full HD Business Monitor</h2>
                            <p>The MSI PRO MP223 21.45" 100Hz Full HD Business Monitor<a href="" target="_blank" style="color: rgb(0, 0, 0);">&nbsp;</a>Boost your productivity at work with the 21.5-inch Full HD Monitor. Your programs, spreadsheets, and other crucial work papers may be seen with ease on its large 21.45-inch screen. Your eyes are protected by MSI Anti-Flicker technology, which also reduces blue light, while long-term eye damage is also prevented. Despite your long hours of work, you can rely on this monitor to safeguard your eye health. The VA Wide Viewing Angle technology enhances the screen's colors and brightness to make sure you can enjoy every detail to the fullest, making it ideal for professionals who need precise color representation. This MSI PRO MP223 also has a high refresh rate of 100Hz, which enables it to display more images continuously while putting less strain on your eyes. Also, the MSI PRO MP22 Monitor Display Kit Support offers you the most practical instrument to guarantee accurate color and display mode while working. In order to keep your MSI Pen or smartphone close to hand and ensure that you never miss a crucial communication, the MSI PRO MP223 also has an accessory slot design that creates a clear table. In addition, this MSI PRO MP223 Business Monitor is VESA compatible, so you can mount it on the wall of your house or office to make it completely inconspicuous when placed on a desk. With the MSI PRO MP223, improve your work experience.</p>
                        </div>
                    </section>
                    <section class="review  q-n-r-section m-tb-15 p-3 my-2 bg-white shadow-1" id="write-review">
                        <div class="section-head justify-content-between">
                            <div class="title-n-action">
                                <h2>Reviews (2)</h2>
                                <p class="section-blurb">Get specific details about this product from customers who own it.</p>
                                <div class="average-rating">
                                    <span class="count"><b>5</b><span> out of 5</span></span>
                                    <span class="rating">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                    </span>
                                </div>
                            </div>
                            <div class="q-action">
                                <a href="" class="gift-btn st-outline">Write a Review</a>
                            </div>
                        </div>
                        <div id="review">
                            <div class="review-wrap">
                                <div class="review-author">
                                    <span class="rating">
                                        <span class="material-icons"><i class="fa-solid fa-star"></i></span>
                                        <span class="material-icons"><i class="fa-solid fa-star"></i></span>
                                        <span class="material-icons"><i class="fa-solid fa-star"></i></span>
                                        <span class="material-icons"><i class="fa-solid fa-star"></i></span>
                                        <span class="material-icons"><i class="fa-solid fa-star"></i></span>
                                    </span>
                                </div>
                                <p class="review">MSI PRO MP223 21.45" Full HD Business Monitor is working Good with this price range. </p>
                                <p class="author">By <span class="name">Dr. Noman Ahmad</span> on 19 Dec 2023</p>
                            </div>
                            <div class="review-wrap">
                                <div class="review-author">
                                    <span class="rating">
                                        <span class="material-icons"><i class="fa-solid fa-star"></i></span>
                                        <span class="material-icons"><i class="fa-solid fa-star"></i></span>
                                        <span class="material-icons"><i class="fa-solid fa-star"></i></span>
                                        <span class="material-icons"><i class="fa-solid fa-star"></i></span>
                                        <span class="material-icons"><i class="fa-solid fa-star"></i></span>
                                    </span>
                                </div>
                                <p class="review">As this is my first 100hz monitor, I must say, It is the Best budget monitor for this price. I haven't noticed any ghosting when I played CS2. Good One MSI. </p>
                                <p class="author">By <span class="name">Yasin Rahman</span> on 25 Sep 2023</p>
                            </div>
                            <div class="text-center"></div>
                        </div>
                    </section>
                </div>
                <div class="col-md-3 c-left px-2">
                    <section class=" bg-white related-product-list">
                        <h3>Related Product</h3>
                        <div class="p-s-item">
                            <div class="image-holder">
                                <a href="">
                                    <img src="{{ asset('assets/images/products/product-sample.png') }}" alt="" width="80" height="80">
                                </a>
                            </div>
                            <div class="caption">
                                <h4 class="product-name">
                                    <a href="">LG 19M38A 18.5 Inch Monitor</a>
                                </h4>
                                <div class="p-item-price price">
                                    <span>9,500৳</span>
                                </div>
                                <div class="actions">
                                    <span class="btn-compare">
                                        <i class="fa-regular fa-square-plus"></i>Add to Compare
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="p-s-item">
                            <div class="image-holder">
                                <a href="">
                                    <img src="{{ asset('assets/images/products/product-sample.png') }}" alt="" width="80" height="80">
                                </a>
                            </div>
                            <div class="caption">
                                <h4 class="product-name">
                                    <a href="">LG 19M38A 18.5 Inch Led Monitor</a>
                                </h4>
                                <div class="p-item-price price">
                                    <span>9,500৳</span>
                                </div>
                                <div class="actions">
                                    <span class="btn-compare">
                                        <i class="fa-regular fa-square-plus"></i>Add to Compare
                                    </span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="bg-white related-product-list my-3">
                        <h3>Recently Viewd</h3>
                        <div class="p-s-item">
                            <div class="image-holder">
                                <a href="">
                                    <img src="{{ asset('assets/images/products/product-sample.png') }}" alt="" width="80" height="80">
                                </a>
                            </div>
                            <div class="caption">
                                <h4 class="product-name">
                                    <a href="">LG 19M38A 18.5 Inch Monitor</a>
                                </h4>
                                <div class="p-item-price price">
                                    <span>9,500৳</span>
                                </div>
                                <div class="actions">
                                    <span class="btn-compare">
                                        <i class="fa-regular fa-square-plus"></i>Add to Compare
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="p-s-item">
                            <div class="image-holder">
                                <a href="">
                                    <img src="{{ asset('assets/images/products/product-sample.png') }}" alt="" width="80" height="80">
                                </a>
                            </div>
                            <div class="caption">
                                <h4 class="product-name">
                                    <a href="">LG 19M38A 18.5 Inch Led Monitor</a>
                                </h4>
                                <div class="p-item-price price">
                                    <span>9,500৳</span>
                                </div>
                                <div class="actions">
                                    <span class="btn-compare">
                                        <i class="fa-regular fa-square-plus"></i>Add to Compare
                                    </span>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Description End-->
@endsection
