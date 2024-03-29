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
                    <span>Digi-World</span>
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
                {{-- <a class="ac">
                    <div class="ic">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <div class="ac-content">
                        <h5>Wishlilst</h5>
                    </div>
                </a> --}}
            
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
                {{-- <div class="ac">
                    <div class="w-100 fs-7">
                        <h6 class="m-0">Account</h6>
                        <p class="m-0 fs-8"><a href="/login">Login</a> Or <a href="/register">Register</a></p>
                    </div>
                    <span class="fs-5 ps-1"><i class="fa-solid fa-circle-user"></i></span>
                </div> --}}
            </div>
        </div>
    </div>
    <section class="category shadow sticky-lg-top" id="main-nav">
        <nav class="navbar p-0  h-100  ">
            <div class="container-xl">
                <ul class="navbar-nav">
                    @foreach($categories as $category)
                        <li class="nav-item ps-0 {{ $category->children->isEmpty() ? '' : 'has-child'  }}">
                            <a class="nav-link text-black" href="/products">{{ $category->name }}</a>
                            <ul class="drop-down drop-menu-1">
                                @foreach($category->children as $subCategory)
                                    <li class="nav-item {{ $subCategory->children->isEmpty() ? '' : 'has-child'  }} {{ $subCategory->children->count() >15 ? 'multi-col': '' }}">
                                        <a class="nav-link" href="/products">{{$subCategory->name}}</a>
                                        <div class="drop-down drop-menu-2 ">
                                            @foreach($subCategory->children as $childCategory)
                                                <ul class="p-0">
                                                    <li class="nav-item"><a class="nav-link" href="/products">{{ $childCategory->name}}</a></li>
                                                </ul>
                                            @endforeach
                                        </div>
                                    </li>
                                @endforeach 
                                <li><a href="" class="see-all">Show All {{ $category->name }}</a></li>
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </section>
</section>


{{-- <section class="header text-black">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-3 logo d-flex align-items-center">
                <span class="fs-1 "><a class="text-decoration-none text-black" href="/">Digi-World</a></span>
            </div>
            <div class="col-md-5 d-flex align-items-center search">
                <x-search></x-search>
            </div>
            <div class="col-md-4 h-100">
                <div class="row h-100">
                    <div class="col-4 d-flex align-items-center">
                            <a href="/pc-builder" class="builder-btn px-2 bg-none py-0 rounded font-bold">Pc Builder</a>
                    </div>
                    <div class="col-4 d-flex align-items-center text-center p-0">
                        <a href="" class="w-100 fs-5"><i class="fa-solid fa-cart-arrow-down"></i></a>
                        <a href="" class="w-100 fs-5"><i class="fa-solid fa-heart"></i></a>
                        <a href="/product-compare" class="w-100 fs-5"><i class="fa-solid fa-right-left"></i></a>
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-end">
                        <div class="w-100 fs-7">
                            <h6 class="m-0">Account</h6>
                            <p class="m-0 fs-8"><a href="/login">Login</a> Or <a href="/register">Register</a></p>
                        </div>
                        <span class="fs-5 ps-1"><i class="fa-solid fa-circle-user"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

@section('js')
    <script>
        
    </script>
@endsection