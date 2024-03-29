@extends('layouts.app')
@section('title')
    Product Comparison
@endsection

@section('main-content')
    <!-- Header Link Section Start -->
    <section class="header-link">
        <div class="container">
            <div class="row">
                <div class="col-md-12 link-menu">
                    <ul class="">
                        <li class=""><a class="" href=""><i class="fa-solid fa-house-chimney"></i></a></li>
                        <li class="link-menu-item"><a class="" href="">Product Comparison</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Link Section End-->

    <!-- Product Compare Start-->
    <section class="product-compare">
        <div class="container">
            <div class="row">
                <div class="table-responsive">
                    <form class="form-cmpr" action="/product/compare/add" method="POST">
                        @csrf
                        <input type="hidden" name="product_id">
                    </form>
                    <table class="table table-hover cmpr-table count-{{ Cache::get('cmpr-prod')->count() + 1 }}">
                        <thead></thead>
                        <tbody>
                            <tr class="cmpr-header">
                                <td class="compare-blurb name">
                                    <h4>Product Comparison</h4>
                                    <p>Find and select products to see the differences and similarities between them</p>
                                </td>
                                @foreach ($products as $product )
                                <td class="value">
                                    <div class="compare-item-wrapper">
                                        <div class="cmpr-field">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                            <input class="cmpr-product" type="text" placeholder="Search and Select Product" autocomplete="off">
                                            <input type="hidden" class="prod-id" value="{{ $product->item_code }}">
                                        </div>
                                        <div class="p-item-img">
                                            <img src="{{ asset('storage/'. $product->image ) }}" alt="MSI OPTIX MAG275R2 27&quot; FHD 170Hz IPS Gaming Monitor" width="228" height="228">
                                        </div>
                                        <a class="p-item-name" href=""><strong>{{ $product->name }}</strong></a>
                                        <div class="p-item-price">
                                            <span>{{ $product->views }}৳</span>
                                        </div>
                                        <a href="/product/compare/remove/{{ $product->item_code }}" class="remove">Remove</a>
                                    </div>
                                </td>
                                @endforeach
                                <td class="value blank m-hide">
                                    <div class="compare-item-wrapper">
                                        <div class="cmpr-field">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                            <input class="cmpr-product" type="text" placeholder="Search and Select Product" autocomplete="off">
                                            <input type="hidden" class="prod-id">
                                        </div>
                                        <p>Find and select product to compare</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="name">Model</td>
                                @foreach ($products as $product )
                                <td class="value">{{ $product->name }}</td>
                                @endforeach
                                <td class="value"></td>
                            </tr>
                            <tr>
                                <td class="name">Brand</td>
                                @foreach ($products as $product )
                                <td class="value">{{ $product->brand->name }}</td>
                                @endforeach
                                <td class="value"></td>
                            </tr>
                            <tr>
                                <td class="name">Availability</td>
                                @foreach ($products as $product )
                                <td class="value">{{ $product->in_stock ? "In Stock" : "Out of Stock" }}</td>
                                @endforeach
                                <td class="value"></td>
                            </tr>
                            <tr>
                                <td class="name">Rating</td>
                                @foreach ($products as $product )
                                <td class="value rating">
                                    <div class="rating-star">
                                        <span class="material-icons"><i class="fa-solid fa-star"></i></span>
                                        <span class="material-icons"><i class="fa-solid fa-star"></i></span>
                                        <span class="material-icons"><i class="fa-solid fa-star"></i></span>
                                        <span class="material-icons"><i class="fa-solid fa-star"></i></span>
                                        <span class="material-icons"><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <div class="rating-text">Based on 0 reviews.</div>
                                </td>
                                @endforeach
                                <td class="value"></td>
                            </tr>
                            {{-- <tr>
                                <td class="name">Summary</td>
                                <td class="value short-desc">
                                    <ul class="p-0 m-0">
                                        <li>Resolution: FHD (1920 x 1080)
                                        </li><li>Display: IPS, 170Hz, 1ms
                                        </li><li>Ports: 1x Display Port, 2x HDMI, 2x USB Type A, 1x USB Type B
                                        </li><li>Features: FreeSync</li>
                                    </ul>
                                </td>
                                <td class="value"></td>
                                <td class="value"></td>
                            </tr> --}}
                       </tbody>
                       <thead>
                            <tr>
                                <td colspan="3"><i class="fa-solid fa-angle-down"></i><strong>Basic Information</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="name">Processor</td>
                            @foreach ($products as $product )
                                <td class="value">{{ $product->type()->processor }}</td>
                            @endforeach
                            <td class="value"></td>
                        </tr>
                        <tr>
                            <td class="name">Motherboard</td>
                            @foreach ($products as $product )
                            <td class="value">{{ $product->type()->motherboard }}</td>
                            @endforeach
                            <td class="value"></td>
                        </tr>
                        <tr>
                            <td class="name">RAM</td>
                            @foreach ($products as $product )
                                <td class="value">{{ $product->type()->ram }}</td>
                            @endforeach
                            <td class="value"></td>
                        </tr>
                        <tr>
                            <td class="name">Graphics Card</td>
                            @foreach ($products as $product )
                                <td class="value">{{ $product->type()->graphics_card }}</td>
                            @endforeach
                            <td class="value"></td>            
                        </tr>
                        <tr>
                            <td class="name">Storage</td>
                            @foreach ($products as $product )
                                <td class="value">{{ $product->type()->storage }}</td>
                            @endforeach
                            <td class="value"></td>            
                        </tr>
                        <tr>
                            <td class="name">Power Supply</td>
                            @foreach ($products as $product )
                                <td class="value">{{ $product->type()->power_supply }}</td>
                            @endforeach
                            <td class="value"></td>            
                        </tr>
                        <tr>
                            <td class="name">Casing</td>
                            @foreach ($products as $product )
                                <td class="value">{{ $product->type()->casing }}</td>
                            @endforeach
                            <td class="value"></td>            
                        </tr>
                    
                        </tbody>
                       {{-- <thead>
                           <tr>
                               <td colspan="3"><i class="fa-solid fa-angle-down"></i><strong>Display Features</strong></td>
                           </tr>
                       </thead>
                       <tbody>
                       <tr>
                           <td class="name">Display Size</td>
                           <td class="value">27 inch (69cm)</td>
                           <td class="value"></td>
                       </tr>
                       <tr>
                           <td class="name">Display Type</td>
                           <td class="value">LED</td>
                           <td class="value"></td>
                       </tr>
                       <tr>
                           <td class="name">Panel Type</td>
                           <td class="value">IPS</td>
                           <td class="value"></td>
                       </tr>
                       <tr>
                           <td class="name">Resolution</td>
                           <td class="value">Full HD (1920 x 1080)</td>
                           <td class="value"></td>            </tr>
                       <tr>
                           <td class="name">Pixel pitch(MM)</td>
                           <td class="value">0.3114(H) x 0.3114(V)</td>
                           <td class="value"></td>
                       </tr>
                       <tr>
                           <td class="name">Display Surface</td>
                           <td class="value">Anti-glare</td>
                           <td class="value"></td>
                       </tr>
                       <tr>
                           <td class="name">Aspect Ratio</td>
                           <td class="value">16:9</td>
                           <td class="value"></td>
                       </tr>
                       <tr>
                           <td class="name">Viewing Angle</td>
                           <td class="value">178°(H) / 178°(V)</td>
                           <td class="value"></td>
                       </tr>
                       <tr>
                           <td class="name">Brightness</td>
                           <td class="value">250 nits</td>
                           <td class="value"></td>
                       </tr>
                       <tr>
                           <td class="name">Contrast Ratio</td>
                           <td class="value">1000:1</td>
                           <td class="value"></td>
                       </tr>
                       <tr>
                           <td class="name">Refresh Rate</td>
                           <td class="value">170Hz</td>
                           <td class="value"></td>
                       </tr>
                       <tr>
                           <td class="name">Color Support</td>
                           <td class="value">16.7M</td>
                           <td class="value"></td>
                       </tr>
                       <tr>
                           <td class="name">Color Gamut</td>
                           <td class="value">97.30% SRGB</td>
                           <td class="value"></td>
                       </tr>
                       <tr>
                           <td class="name">Response Time</td>
                           <td class="value">1ms (MPRT)</td>
                           <td class="value"></td>
                       </tr>
                       </tbody>
                       <thead>
                           <tr>
                               <td colspan="3"><i class="fa-solid fa-angle-down"></i><strong>Video Features</strong></td>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td class="name">Free Sync Support</td>
                               <td class="value">Free Sync Premium</td>
                               <td class="value"></td>
                           </tr>
                       </tbody>
                       <thead>
                           <tr>
                               <td colspan="3"><i class="fa-solid fa-angle-down"></i><strong>Connectivity</strong></td>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td class="name">Display Port</td>
                               <td class="value">1x Display Port (1.2a)</td>
                               <td class="value"></td>
                           </tr>
                           <tr>
                               <td class="name">HDMI</td>
                               <td class="value">2x HDMI</td>
                               <td class="value"></td>
                           </tr>
                           <tr>
                               <td class="name">USB Port(s)</td>
                               <td class="value">2x USB 2.0 Type A
                                   1x USB 2.0 Type B</td>
                               <td class="value"></td>
                           </tr>
                       </tbody>
                       <thead>
                           <tr>
                               <td colspan="3"><i class="fa-solid fa-angle-down"></i><strong>Mechanical Design</strong></td>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td class="name">Tilt</td>
                               <td class="value">-5° ~ 20°</td>
                               <td class="value"></td>
                           </tr>
                           <tr>
                               <td class="name">Swivel</td>
                               <td class="value">-45°~ 45°</td>
                               <td class="value"></td>
                           </tr>
                           <tr>
                               <td class="name">Pivot</td>
                               <td class="value">-90°~ 90°
                               </td>
                               <td class="value"></td>
                           </tr>
                           <tr>
                               <td class="name">Height Adjustment</td>
                               <td class="value">0~130 mm</td>
                               <td class="value"></td>
                           </tr>
                           <tr>
                               <td class="name">Vesa Wall Mount</td>
                               <td class="value">100 x 100 mm</td>
                               <td class="value"></td>
                           </tr>
                       </tbody>
                       <thead>
                           <tr>
                               <td colspan="3"><i class="fa-solid fa-angle-down"></i><strong>Physical Specification</strong></td>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td class="name">Dimension</td>
                               <td class="value">612.5 x 405.6 x 233.7mm / 24.11 x15.97 x 9.2 inch
                               </td>
                               <td class="value"></td>
                           </tr>
                       </tbody>
                       <thead>
                           <tr>
                               <td colspan="3"><i class="fa-solid fa-angle-down"></i><strong>Power</strong></td>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td class="name">Type</td>
                               <td class="value">External Adaptor 20V 2.25A</td>
                               <td class="value"></td>
                           </tr>
                           <tr>
                               <td class="name">Power Consumption</td>
                               <td class="value">27W</td>
                               <td class="value"></td>
                           </tr>
                           <tr>
                               <td class="name">Voltage</td>
                               <td class="value">100~240V, 50~60Hz
                               </td>
                               <td class="value"></td>
                           </tr>
                       </tbody>
                       <thead>
                           <tr>
                               <td colspan="3"><i class="fa-solid fa-angle-down"></i><strong>Warranty Information</strong></td>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td class="name">Warranty</td>
                               <td class="value">3 Years </td>
                               <td class="value"></td>
                           </tr>
                       </tbody>
                       <tbody>
                           <tr>
                               <td class="name"></td>
                               <td class="value"><input type="button" value="Buy Now" class="w-100 submit-btn btn-block"></td>
                               <td class="value"></td>
                           </tr>
                       </tbody> --}}
                   </table>
               </div>
           </div>
        </div>
    </section>
    <!-- Product compare End-->

@endsection


@section('js')
    <script type="text/javascript">
        $(".prod-id").on("change", function () {
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
