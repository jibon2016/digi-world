@extends('layouts.app')
@section('title')
    Shopping Cart
@endsection

@section('main-content')
    <!-- Header Link Section Start -->
    <section class="header-link">
        <div class="container">
            <div class="row">
                <div class="col-md-12 my-2 link-menu">
                    <ul class="">
                        <li class=""><a class="" href=""><i class="fa-solid fa-house-chimney"></i></a></li>
                        <li class="link-menu-item"><a class="" href="">Shopping Cart</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Link Section End-->

    <!-- Product Content Start-->
    <section class="product-content">
        <div class="container-md">
            <form action="" method="post">
                <div class="row py-3 border-bottom border-light-subtle">
                    <div class="col-md-12 mt-3">
                        <div class="row bg-white pt-3">
                            <h1 class="fs-3 ms-2">Shopping Cart</h1>
                            <table class="cart-table bg-white">
                                <thead>
                                    <tr class="lh-lg fs-7">
                                        <td class="text-center m-hide rs-none">Image</td>
                                        <td class="text-left">Product Name</td>
                                        <td class="text-left m-hide rs-none">Model</td>
                                        <td class="text-left px-3">Quantity</td>
                                        <td class="text-end rs-none px-3">Unit Price</td>
                                        <td class="text-end px-3">Total</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center m-hide rs-none p-3">
                                            <a href=""><img width="47px" height="47px" src="{{ asset('/assets/images/products/product-sample.png') }}" alt="AMD Ryzen 5 5600G Desktop PC" title="AMD Ryzen 5 5600G Desktop PC" class="img-thumbnail"></a>
                                        </td>
                                        <td class="text-left py-3">
                                            <a href="">AMD Ryzen 5 5600G Desktop PC</a>
                                        </td>
                                        <td class="text-left rs-none m-hide py-3 fw-medium">Ryzen 5 5600G Desktop PC</td>
                                        <td class="text-left p-3 ">
                                            <div class="input-group btn-block" style="max-width: 150px;">
                                                <input type="text" name="quantity[YToxOntzOjEwOiJwcm9kdWN0X2lkIjtpOjMxNDUxO30=]" value="1" size="1" class="form-control">
                                                <span class="input-group-btn">
                                                    <button type="submit" data-toggle="tooltip" title="Update" class="btn"><i class="fa-solid fa-arrows-rotate"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Remove" class="btn px-0" ><i class="fa-solid fa-xmark"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-end rs-none p-3">30,499৳</td>
                                        <td class="text-end p-3">30,499৳</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center m-hide rs-none p-3">
                                            <a href=""><img width="47px" height="47px" src="{{ asset('/assets/images/products/product-sample.png') }}" alt="AMD Ryzen 5 5600G Desktop PC" title="AMD Ryzen 5 5600G Desktop PC" class="img-thumbnail"></a>
                                        </td>
                                        <td class="text-left py-3">
                                            <a href="">AMD Ryzen 5 5600G Desktop PC</a>
                                        </td>
                                        <td class="text-left rs-none m-hide py-3 fw-medium">Ryzen 5 5600G Desktop PC</td>
                                        <td class="text-left p-3 ">
                                            <div class="input-group btn-block" style="max-width: 150px;">
                                                <input type="text" name="quantity[YToxOntzOjEwOiJwcm9kdWN0X2lkIjtpOjMxNDUxO30=]" value="1" size="1" class="form-control">
                                                <span class="input-group-btn">
                                                    <button type="submit" data-toggle="tooltip" title="Update" class="btn"><i class="fa-solid fa-arrows-rotate"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Remove" class="btn px-0" ><i class="fa-solid fa-xmark"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-end rs-none p-3">30,499৳</td>
                                        <td class="text-end p-3">30,499৳</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 bg-white">
                        <table class="bg-white cart-total px-3">
                            <tbody>
                            <tr class="py-3 border-bottom">
                                <td class="text-end px-3 pb-3"><strong>Sub-Total:</strong></td>
                                <td class="text-end  pb-3 amount">53,499৳</td>
                            </tr>
                            <tr>
                                <td class="text-end px-3"><strong>Total:</strong></td>
                                <td class="text-end amount">53,499৳</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-12 my-3">
                        <div class="row p-3 bg-white shadow-1">
                            <div class="col-md-6 col-sm-12" id="discount-coupon">
                                <div class="input-group">
                                    <input type="text" name="coupon" placeholder="Promo / Coupon Code" id="input-coupon" class="form-control">
                                    <span class="input-group-btn"><button type="button" id="button-coupon" data-loading-text="Loading..." class="ms-1 gift-btn st-outline">Apply Coupon</button></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12" id="gift-voucher">
                                <div class="input-group">
                                    <input type="text" name="voucher" placeholder="Gift Voucher" id="input-voucher" class="form-control">
                                    <span class="input-group-btn"><button type="button" id="button-voucher" data-loading-text="Loading..." class="ms-1 gift-btn st-outline">Apply Voucher</button></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checkout-final-action d-flex justify-content-between">
                    <a href="/" id="button-confirm" class="btn submit-btn confirm-button" type="submit">Continue Shopping</a>
                    <button id="button-confirm" class="btn submit-btn confirm-button" type="submit">Confirm Order</button>
                </div>
            </form>
        </div>

    </section>
    <!-- Product Content End-->

@endsection
