<section class="header">
    <div class="top">
        <div class="container">
            <div class="digi-item logo">
                <div class="mbl-nav-top h-desk">
                    <div id="nav-toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <a href="/" class="brand">
                    <!-- <span>Digi-World</span> -->
                    <img src="{{ asset('/assets/images/logo/logo.png') }}" alt="">
                </a>
                <div class="mbl-right h-desk">
                    <div class="ac search-toggler"><i class="fa-solid fa-magnifying-glass"></i></div>
                    <div class="ac mc-toggler"><i class="fa-solid fa-bag-shopping"></i><span class="counter" data-count="0">0</span></div>
                </div>
            </div>
            <div class="digi-item search" id="search">
                <x-search></x-search>
            </div>
            <div class="digi-item digi-actions">
                <div class="ac m-hide">
                    <a href="/pc-builder" class="builder-btn px-2 bg-none py-2 rounded font-bold">Pc Builder</a>
                </div>
                <a href="" class="ac h-desk">
                    <div class="ic">
                        <i class="fa-solid fa-gifts"></i>
                    </div>
                    <div class="ac-content">
                        <h5>Offers</h5>
                        <p class="m-hide">Latest Offers</p>
                    </div>
                </a>
                <a href="" class="ac">
                    <div class="ic">
                        <i class="fa-solid fa-cart-arrow-down"></i>
                    </div>
                    <div class="ac-content">
                        <h5>Cart</h5>
                        <p class="m-hide">Your Cart</p>
                    </div>
                </a>
                <a href="/pc-builder" class="ac h-desk">
                    <div class="ic">
                        <i class="fa-solid fa-computer"></i>
                    </div>
                    <div class="ac-content">
                        <h5>Pc Builder</h5>
                        <p class="m-hide">Pc Builder</p>
                    </div>
                </a>
                <a href="/product-compare" class="ac">
                    <div class="ic">
                        <i class="fa-solid fa-right-left"></i>
                    </div>
                    <div class="ac-content">
                        <h5>Compare</h5>
                        <p class="m-hide">Latest Offers</p>
                    </div>
                </a>
                <div class="ac">
                    <a class="ic" href="/login">
                        <i class="fa-solid fa-circle-user"></i>
                    </a>
                    <div class="ac-content">
                        <h5 class="">Account</h5>
                        <p class="m-hide"><a href="/login">Login</a> Or <a href="/register">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.navigation')
</section>

@section('js')
    <script>

    </script>
@endsection
