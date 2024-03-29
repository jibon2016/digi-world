@extends('layouts.app')
@section('title')
    Checkout
@endsection

@section('main-content')
    <!-- Header Link Section Start -->
    <section class="header-link">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-12 link-menu">
                    <ul class="">
                        <li class=""><a class="" href=""><i class="fa-solid fa-house-chimney"></i></a></li>
                        <li class="link-menu-item"><a class="" href="">Shopping Cart</a></li>
                        <li class="link-menu-item"><a class="" href="">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Link Section End-->

    <!-- Product Content Start-->
    <section class="product-content">
        <div class="container-lg">
            <form action="" method="post">
                <div class="row py-3 border-bottom border-light-subtle">
                    <h1 class="fs-3 ms-2">Checkout</h1>
                    <div class="col-md-4">
                        <div class="bg-white p-3 shadow-1 me-1">
                            <h3 class="fs-5"> <span class="number font-bold me-2">1</span> Customer Information</h3>
                            <hr>
                            <div class="address">
                                <div class="multiple-form-group">
                                    <div class="form-group">
                                        <label class="control-label" for="input-firstname">First Name</label>
                                        <input class="form-control" name="firstname" type="text" id="input-firstname" value="" placeholder="First Name*">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-lastname">Last Name</label>
                                        <input type="text" id="input-lastname" name="lastname" value="" class="form-control" placeholder="Last Name*">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="input-address">Address</label>
                                    <input type="text" id="input-address" name="address_1" value="" class="form-control" placeholder="Address*">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="input-telephone">Mobile</label>
                                    <input type="tel" id="input-telephone" name="telephone" value="" class="form-control" placeholder="Telephone*">
                                </div>
                                <div class="form-group" for="input-email">
                                    <label class="control-label">Email</label>
                                    <input type="email" id="input-email" name="email" value="" class="form-control" placeholder="E-Mail*">
                                </div>
                                <div class="multiple-form-group">
                                    <div class="form-group" for="input-city">
                                        <label class="control-label">City</label>
                                        <input type="text" id="input-city" name="city" value="" class="form-control" placeholder="City*">
                                    </div>
                                    <div class="form-group" for="input-zone">
                                        <label class="control-label">Zone</label>
                                        <select name="zone_id" id="input-zone" class="form-control">
                                            <option value="322" selected=""> Dhaka City</option>
                                            <option value="323"> Khulna City</option>
                                            <option value="324"> Rajshahi City</option>
                                            <option value="4231"> Rangpur City</option>
                                            <option value="321">Chittagong City</option>
                                            <option value="4233">Gazipur City</option>
                                            <option value="4232">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Comment</label>
                                    <textarea class="form-control" name="comment" value="" placeholder="Comment" rows="6"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="bg-white ms-1 p-3 shadow-1">
                                    <h3 class="fs-5"> <span class="number font-bold me-2">2</span> Payment Method</h3>
                                    <hr>
                                    <p>Select a payment method</p>
                                    <label class="radio-inline">
                                    <input type="radio" name="payment_method" value="online" checked="checked">Online Payment</label><br>
                                    <label class="radio-inline"><input type="radio" name="payment_method" value="pod">POS on Delivery</label><br>
                                    <div class="accepted-logo">
                                        <h5 class="fs-6 font-bold">We Accept : </h5>
                                        <a href="#"><img class="logo logo-visa" src="{{ asset('/assets/images/partners/payment-methods.png') }}"></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-items-stretch ">
                                <div class="bg-white ms-1 p-3 w-100 shadow-1">
                                    <h3 class="fs-5"> <span class="number font-bold me-2">3</span> Delivery Method</h3>
                                    <hr>
                                    <p>Select a delivery method</p>
                                    <label class="radio-inline">
                                    <input type="radio" name="shipping_method" value="flat.flat" checked="checked">Home Delivery - 60৳</label><br>
                                    <input type="hidden" name="flat.flat.title" value="Home Delivery">
                                    <label class="radio-inline">
                                    <input type="radio" name="shipping_method" value="pickup.pickup"> Store Pickup - 0৳</label><br>
                                    <input type="hidden" name="pickup.pickup.title" value="Store Pickup">
                                    <label class="radio-inline">
                                    <input type="radio" name="shipping_method" value="express.express">Request Express - Charge Applicable</label><br>
                                    <input type="hidden" name="express.express.title" value="Request Express">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 my-3">
                            <div class="row p-3 bg-white shadow-1">
                                <div class="col-md-6 col-sm-12" id="discount-coupon">
                                    <div class="input-group">
                                        <input type="text" name="coupon" placeholder="Promo / Coupon Code" id="input-coupon" class="form-control me-1">
                                        <span class="input-group-btn"><button type="button" id="button-coupon" data-loading-text="Loading..." class="gift-btn st-outline">Apply Coupon</button></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12" id="gift-voucher">
                                    <div class="input-group">
                                        <input type="text" name="voucher" placeholder="Gift Voucher" id="input-voucher" class="form-control me-1">
                                        <span class="input-group-btn"><button type="button" id="button-voucher" data-loading-text="Loading..." class="gift-btn st-outline">Apply Voucher</button></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 my-3">
                            <div class="row bg-white p-3 shadow-1">
                                <h3 class="fs-5"> <span class="number font-bold me-2">4</span> Order Overview</h3>
                                <hr>
                                <table class="table bg-white checkout-data">
                                    <thead>
                                        <tr>
                                            <td>Product Name</td>
                                            <td>Price</td>
                                            <td class="text-right">Total</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="name">
                                                <a class="text-black text-decoration-none" href="#">MSI OPTIX MAG275R2 27" FHD 170Hz IPS Gaming Monitor</a>
                                                <div class="options"></div>
                                            </td>
                                            <td><span>31,500৳</span> <span> x </span> <span>1</span></td>
                                            <td class="text-right">31,500৳</td>
                                        </tr>
                                        <tr class="total">
                                            <td colspan="2" class="text-right"><strong>Sub-Total:</strong></td>
                                            <td class="text-right"><span class="amount">31,500৳</span></td>
                                        </tr>
                                        <tr class="total">
                                            <td colspan="2" class="text-right"><strong>Home Delivery:</strong></td>
                                            <td class="text-right"><span class="amount">60৳</span></td>
                                        </tr>
                                        <tr class="total">
                                            <td colspan="2" class="text-right"><strong>Total:</strong></td>
                                            <td class="text-right"><span class="amount">31,560৳</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checkout-final-action">
                    <div class="agree-text" style="margin-bottom: 10px">I have read and agree to the <a href="/terms-conditions" target="_blank"><b>Terms and Conditions</b></a>, <a href="/privacy-policy" target="_blank"><b>Privacy Policy</b></a> and <a href="/refund-policy" target="_blank"><b>Refund and Return Policy</b></a>                                        <input type="checkbox" name="agree" value="1" checked="checked">
                    </div>
                    <button id="button-confirm" class="btn submit-btn confirm-button" type="submit">Confirm Order</button>
                </div>
            </form>
        </div>

    </section>
    <!-- Product Content End-->

@endsection
