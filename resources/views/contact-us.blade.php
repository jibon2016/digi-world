@extends('layouts.app')
@section('title')
    Contact-us
@endsection

@section('main-content')

<!-- Contact-us Section Start -->
    <section class="contact-us">
        <h2 class="heading">Contact-us</h2>
        <div class="container">
            <div class="row contact-bg py-3 my-2 rounded">
                <div class="border-end border-black col-md-6 d-flex align-items-center">
                    <div class="px-3 d-flex justify-content-between ">
                        <div class="help-line my-2 mx-3">
                            <span class="fs-2"><i class="fa-solid fa-phone border-black border rounded p-1 me-2"></i></span>
                        </div>
                        <div class="help-line-content">
                            <p class="m-0">Contact-us (9am - 5pm)</p>
                            <span class="fs-3"> Help-line 01XXX-XXXXXX</span>
                            <p class="m-0 fs-6">House 24, Road 1, Block B, Unit A-1, Niketon, Gulshan 1, Dhaka 1212, Bangladesh.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-5 g-map">
                    <h4>Digi World in Google Map</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.282384031734!2d90.4128508!3d23.772956699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c79a90611881%3A0x51dde8d9e7aae4a!2sKore%20Search!5e0!3m2!1sen!2sbd!4v1702181582042!5m2!1sen!2sbd" height="250" style="border:0;" allowfullscreen="" width="100%" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>  
        </div>
    </section>
<!-- Conteact-us Section End -->

@endsection
