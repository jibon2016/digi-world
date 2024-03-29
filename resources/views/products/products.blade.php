@extends('layouts.app')
@section('title')
    Products
@endsection

@section('main-content')
    <!-- Header Link Section Start -->
    <!-- Header Link Section Start -->
    <section class="header-link">
        <div class="container">
            <div class="row">
                <div class="col-md-12 link-menu">
                    <ul class="">
                        <li class=""><a class="" href=""><i class="fa-solid fa-house-chimney"></i></a></li>
                        <li class="link-menu-item"><a class="" href="">Products</a></li>
                        <li class="link-menu-item"><a class="" href="">Intel</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Link Section End-->

    <!-- Product Content Start-->
    <section class="product-content">
        <div class="container">
            <div class="row p-item py-3">
                <div class="col-md-3 p-0">
                    <div class="filter-sidebar" id="column-left">
                        <span class="filter-close close h-desk">
                            <i class="fa-solid fa-xmark"></i>
                        </span>
                        <div class="filters">
                            <div class="accordion mb-2 rounded" id="priceRange">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePrice" aria-expanded="true" aria-controls="collapseOne">
                                            Price Range
                                        </button>
                                    </h2>
                                    <div id="collapsePrice" class="accordion-collapse collapse show" data-bs-parent="#priceRange">
                                        <div class="accordion-body">
                                            <div class="price-input">
                                                <div class="field">
                                                    <span>Min</span>
                                                    <input type="number" class="input-min" value="2500">
                                                </div>
                                                <div class="separator">-</div>
                                                <div class="field">
                                                    <span>Max</span>
                                                    <input type="number" class="input-max" value="7500">
                                                </div>
                                            </div>
                                            <div class="slider">
                                                <div class="progress"></div>
                                            </div>
                                            <div class="range-input">
                                                <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                                                <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion mb-2 rounded " id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Availability
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="form-check mb-2">
                                                <label class="form-check-label fs-6" for="InStock">
                                                    <input class="form-check-input border-secondary mt-1 availability" type="checkbox" value="in_stock" id="InStock">
                                                    In Stock
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <label class="form-check-label fs-6" for="PreOrder">
                                                    <input class="form-check-input border-secondary mt-1 availability" type="checkbox" value="pre_order" id="PreOrder">
                                                    Pre Order
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <label class="form-check-label fs-6" for="UpComing">
                                                    <input class="form-check-input border-secondary mt-1 availability" type="checkbox" value="up_coming" id="UpComing">
                                                    Up Coming
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion mb-2 rounded " id="GenerationId">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Generation" aria-expanded="true" aria-controls="Generation">
                                            Generation / Series
                                        </button>
                                    </h2>
                                    <div id="Generation" class="accordion-collapse collapse show" data-bs-parent="#GenerationId">
                                        <div class="accordion-body">
                                            <div class="form-check mb-2">
                                                <label class="form-check-label fs-6" for="8th_gen">
                                                    <input class="form-check-input border-secondary mt-1 generation" type="checkbox" value="8th_gen" id="8th_gen">
                                                    8th Gen
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <label class="form-check-label fs-6" for="9th_gen">
                                                    <input class="form-check-input border-secondary mt-1 generation" type="checkbox" value="9th_gen" id="9th_gen">
                                                    9th Gen
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <label class="form-check-label fs-6" for="10th_gen">
                                                    <input class="form-check-input border-secondary mt-1 generation" type="checkbox" value="10th_gen" id="10th_gen">
                                                    10th Gen
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <label class="form-check-label fs-6" for="11th_gen">
                                                    <input class="form-check-input border-secondary mt-1 generation" type="checkbox" value="11th_gen" id="11th_gen">
                                                    11th Gen
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <label class="form-check-label fs-6" for="12th_gen">
                                                    <input class="form-check-input border-secondary mt-1 generation" type="checkbox" value="12th_gen" id="12th_gen">
                                                    12th Gen
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <label class="form-check-label fs-6" for="13th_gen">
                                                    <input class="form-check-input border-secondary mt-1 generation" type="checkbox" value="13th_gen" id="13th_gen">
                                                    13th Gen
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <label class="form-check-label fs-6" for="14th_gen">
                                                    <input class="form-check-input border-secondary mt-1 generation" type="checkbox" value="14th_gen" id="14th_gen">
                                                    14th Gen
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <label class="form-check-label fs-6" for="15th_gen">
                                                    <input class="form-check-input border-secondary mt-1 generation" type="checkbox" value="15th_gen" id="15th_gen">
                                                    15th Gen
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-9 p-0 products">
                    <div class="row">
                        <div class="col-md-12 d-flex mx-2 bg-white rounded border align-items-center justify-content-between">
                            <h4 class="fs-6 m-0 p-2 font-bold products-brand ps-4 m-hide">Intel Brand</h4>
                            <span class="side-filter bg-secondary-subtle ms-3 p-2 rounded-2"><i class="pe-1 fa-solid fa-filter"></i>Filter</span>
                            <div class="sorting-section p-3">
                                <label for="show" class="pe-2 m-hide">Show
                                    <select name="" class="bg-secondary-subtle border-gray py-1 w-auto" id="show">
                                        <option class="fs-6" selected value="">10</option>
                                        <option value="">20</option>
                                        <option value="">30</option>
                                        <option value="">40</option>
                                        <option value="">50</option>
                                    </select>
                                </label>
                                <label for="short-by">Sort By
                                    <select name="" class="bg-secondary-subtle border-gray py-1 w-50" id="short-by">
                                        <option class="fs-6" value="">Default</option>
                                        <option class="fs-6" value="">Price low to high</option>
                                        <option class="fs-6" value="">Price high to low</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12 mx-2 my-3">
                            <div class="d-flex flex-wrap p-0 justify-content-lg-start product-items show-products">
                                @foreach ($products as $product )
                                    <x-products.shop-product-item :$product />
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Content End-->
@endsection

@section('js')
    <script type="text/javascript">
        // Product Filter JS
        $(document).ready(function () {
            const checkValueAvabailability = [];
            const checkValueGeneration = [];
            $('.availability').change(function (){
                if($(this).is(':checked'))
                {
                    toggleLoader(true)
                    setInterval(() => {
                        
                    checkValueAvabailability.push($(this).val());
                    console.log(checkValueAvabailability);
                    var reqData = JSON.stringify(checkValueAvabailability);
                    $.ajax({
                        type: "GET",
                        url: '/filter',
                        data: {data : checkValueAvabailability},
                        headers: {
                            'X-CSRF-TOKEN': "<?php echo csrf_token() ?>"
                        },
                        success: function (data) {
                            console.log(data);
                            $(".show-products").html(data);
                            toggleLoader(false)
                        }
                    })
                    
                    }, 1000)
                }else {
                    checkValueAvabailability.splice(checkValueAvabailability.indexOf($(this).val()), 1)
                    console.log(checkValueAvabailability);
                }
            })

            $('.generation').change(function (){
                if($(this).is(':checked'))
                {
                    checkValueGeneration.push($(this).val());
                    console.log(checkValueGeneration);
                }else {
                    checkValueGeneration.splice(checkValueGeneration.indexOf($(this).val()), 1)
                    console.log(checkValueGeneration);
                }
            })
            
        })
    </script>
@endsection
