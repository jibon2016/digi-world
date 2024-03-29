@extends('layouts.app')
@section('title')
    PC Builder
@endsection

@section('main-content')
    <!-- Header Link Section Start -->
    <section class="header-link">
        <div class="container">
            <div class="row">
                <div class="col-md-12 link-menu">
                    <ul class="">
                        <li class=""><a class="" href=""><i class="fa-solid fa-house-chimney"></i></a></li>
                        <li class="link-menu-item"><a class="" href="">PC Builder</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Link Section End-->

    <!-- PC Buldier Content Start-->
    <section class="pcb-content">
        <div class="container">
            <div class="row bg-white">
                <div class="col-md-12 pcb-header">
                    <div class="digi-world-logo">
                        <div class="logo d-flex align-items-center">
                            <span class="fs-4"><a class="text-decoration-none text-black" href="/">Digi-World</a></span>
                        </div>
                    </div>
                    <div class="actions">
                        <div class="all-actions">
                            <a class="action" href="">
                                <i class="fa-solid fa-floppy-disk"></i>
                                <span class="m-hide action-text">Save PC</span>
                            </a>
                            <a class="action" href="">
                                <i class="fa-solid fa-basket-shopping"></i>
                                <span class="m-hide action-text">Add to Cart</span>
                            </a>
                            <a class="action" href="/pc-builder/pdf">
                                <i class="fa-solid fa-print"></i>
                                <span class="m-hide action-text">Print</span>
                            </a>
                            <a class="action" href="">
                                <i class="fa-solid fa-clapperboard"></i>
                                <span class="m-hide action-text">Screenshot</span>
                            </a>
                            <a class="ms-3 btn st-outline" href="">Get a Quote</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="pcb-inner-content">
                        <div class="pcb-top-content">
                            <div class="left">
                                <h1 class="m-hide">PC Builder - Build your own Computer - Digi-World </h1>
                                <div class="checkbox-inline">
                                    <input class="input-hide" name="hide" type="checkbox">
                                    <label for="input-hide">Hide Unconfigured Components</label>
                                </div>
                            </div>
                            <div class="right">
                                <div class="total-amount estimated-watt">
                                    <span class="amount">0w</span>
                                    <br>
                                    <span class="items">Estimated Wattage</span>
                                    <span class="betaa">BETA</span>
                                </div>
                                <div class="total-amount t-price">
                                    <span class="amount">0৳</span>
                                    <br>
                                    <span class="items">0 items</span>
                                </div>
                            </div>
                        </div>
                        <div class="pcb-content">
                            <div class="content-label">Core Components</div>
                            @if(Cache::get('builder-prod')['processor'])
                                <div class="c-item">
                                    <div class="img">
                                        <img src="{{ asset('storage/'. Cache::get('builder-prod')['processor']->image ) }}" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="component-name">
                                            <span>Processor</span>
                                            <span class="mark">Required</span>
                                        </div>
                                        <div class="product-name">{{ Cache::get('builder-prod')['processor']->name }}</div>
                                    </div>
                                    <div class="item-price">
                                        <div class="price">{{ Cache::get('builder-prod')['processor']->views }}৳</div>
                                    </div>
                                    <div class="actions">
                                        <div class="action-items">
                                            <a class="fs-5 me-2" href="/builder-products/remove/processor" title="Remove"><i class="fa-solid fa-xmark"></i></a>
                                            <a class="fs-5" href="" title="Choose"><i class="fa-solid fa-arrows-rotate"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="c-item blank">
                                    <div class="img">
                                        <span class="img-ico processor"></span>
                                    </div>
                                    <div class="details">
                                        <div class="component-name">
                                            <span>Processor</span>
                                            <span class="mark">Required</span>
                                        </div>
                                        <div class="product-name"></div>
                                    </div>
                                    <div class="item-price"></div>
                                    <div class="action">
                                        <a class="gift-btn st-outline" href="/products/processor" title="">Choose</a>
                                    </div>
                                </div>
                            @endif
                            @if(Cache::get('builder-prod')['cpu_cooler'])
                                <div class="c-item">
                                    <div class="img">
                                        <img src="{{ asset('storage/'. Cache::get('builder-prod')['cpu_cooler']->image ) }}" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="component-name">
                                            <span>CPU Cooler</span>
                                        </div>
                                        <div class="product-name">{{ Cache::get('builder-prod')['cpu_cooler']->name }}</div>
                                    </div>
                                    <div class="item-price">
                                        <div class="price">{{ Cache::get('builder-prod')['cpu_cooler']->views }}৳</div>
                                    </div>
                                    <div class="actions">
                                        <div class="action-items">
                                            <a class="fs-5 me-2" href="/builder-products/remove/cpu_cooler" title="Remove"><i class="fa-solid fa-xmark"></i></a>
                                            <a class="fs-5" href="" title="Choose"><i class="fa-solid fa-arrows-rotate"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @else
                            <div class="c-item blank">
                                <div class="img">
                                    <span class="img-ico cpu-cooler"></span>
                                </div>
                                <div class="details">
                                    <div class="component-name">
                                        <span>CPU Cooler</span>
                                    </div>
                                    <div class="product-name"></div>
                                </div>
                                <div class="item-price"></div>
                                <div class="action">
                                    <a class="gift-btn st-outline" href="/products/cpu_cooler" title="">Choose</a>
                                </div>
                            </div>
                            @endif
                            @if(Cache::get('builder-prod')['motherboard'])
                                <div class="c-item">
                                    <div class="img">
                                        <img src="{{ asset('storage/'. Cache::get('builder-prod')['motherboard']->image ) }}" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="component-name">
                                            <span>Motherboard</span>
                                        </div>
                                        <div class="product-name">{{ Cache::get('builder-prod')['motherboard']->name }}</div>
                                    </div>
                                    <div class="item-price">
                                        <div class="price">{{ Cache::get('builder-prod')['motherboard']->views }}৳</div>
                                    </div>
                                    <div class="actions">
                                        <div class="action-items">
                                            <a class="fs-5 me-2" href="/builder-products/remove/motherboard" title="Remove"><i class="fa-solid fa-xmark"></i></a>
                                            <a class="fs-5" href="" title="Choose"><i class="fa-solid fa-arrows-rotate"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @else
                            <div class="c-item blank">
                                <div class="img">
                                    <span class="img-ico motherboard"></span>
                                </div>
                                <div class="details">
                                    <div class="component-name">
                                        <span>Motherboard</span>
                                        <span class="mark">Required</span>
                                    </div>
                                    <div class="product-name"></div>
                                </div>
                                <div class="item-price"></div>
                                <div class="action">
                                    <a class="gift-btn st-outline" href="/products/motherboard" title="">Choose</a>
                                </div>
                            </div>
                            @endif
                            @if(Cache::get('builder-prod')['ram'])
                            <div class="c-item">
                                <div class="img">
                                    <img src="{{ asset('storage/'. Cache::get('builder-prod')['ram']->image ) }}" alt="">
                                </div>
                                <div class="details">
                                    <div class="component-name">
                                        <span>RAM</span>
                                        <span class="mark">Required</span>
                                    </div>
                                    <div class="product-name">{{ Cache::get('builder-prod')['ram']->name }}</div>
                                </div>
                                <div class="item-price">
                                    <div class="price">{{ Cache::get('builder-prod')['ram']->views }}৳</div>
                                </div>
                                <div class="actions">
                                    <div class="action-items">
                                        <a class="fs-5 me-2" href="/builder-products/remove/ram" title="Remove"><i class="fa-solid fa-xmark"></i></a>
                                        <a class="fs-5" href="" title="Choose"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="c-item blank">
                                <div class="img">
                                    <span class="img-ico ram"></span>
                                </div>
                                <div class="details">
                                    <div class="component-name">
                                        <span>RAM</span>
                                        <span class="mark">Required</span>
                                    </div>
                                    <div class="product-name"></div>
                                </div>
                                <div class="item-price"></div>
                                <div class="action">
                                    <a class="gift-btn st-outline" href="/products/ram" title="">Choose</a>
                                </div>
                            </div>
                            @endif
                            @if(Cache::get('builder-prod')['storage'])
                                <div class="c-item">
                                    <div class="img">
                                        <img src="{{ asset('storage/'. Cache::get('builder-prod')['storage']->image ) }}" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="component-name">
                                            <span>Storage</span>
                                            <span class="mark">Required</span>
                                        </div>
                                        <div class="product-name">{{ Cache::get('builder-prod')['storage']->name }}</div>
                                    </div>
                                    <div class="item-price">
                                        <div class="price">{{ Cache::get('builder-prod')['storage']->views }}৳</div>
                                    </div>
                                    <div class="actions">
                                        <div class="action-items">
                                            <a class="fs-5 me-2" href="/builder-products/remove/storage" title="Remove"><i class="fa-solid fa-xmark"></i></a>
                                            <a class="fs-5" href="" title="Choose"><i class="fa-solid fa-arrows-rotate"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @else
                            <div class="c-item blank">
                                <div class="img">
                                    <span class="img-ico storage"></span>
                                </div>
                                <div class="details">
                                    <div class="component-name">
                                        <span>Storage</span>
                                        <span class="mark">Required</span>
                                    </div>
                                    <div class="product-name"></div>
                                </div>
                                <div class="item-price"></div>
                                <div class="action">
                                    <a class="gift-btn st-outline" href="/products/storage" title="">Choose</a>
                                </div>
                            </div>
                            @endif
                            @if(Cache::get('builder-prod')['graphics_card'])
                                <div class="c-item">
                                    <div class="img">
                                        <img src="{{ asset('storage/'. Cache::get('builder-prod')['graphics_card']->image ) }}" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="component-name">
                                            <span>Graphics Card</span>
                                        </div>
                                        <div class="product-name">{{ Cache::get('builder-prod')['graphics_card']->name }}</div>
                                    </div>
                                    <div class="item-price">
                                        <div class="price">{{ Cache::get('builder-prod')['graphics_card']->views }}৳</div>
                                    </div>
                                    <div class="actions">
                                        <div class="action-items">
                                            <a class="fs-5 me-2" href="/builder-products/remove/graphics_card" title="Remove"><i class="fa-solid fa-xmark"></i></a>
                                            <a class="fs-5" href="" title="Choose"><i class="fa-solid fa-arrows-rotate"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @else
                            <div class="c-item blank">
                                <div class="img">
                                    <span class="img-ico graphics-card"></span>
                                </div>
                                <div class="details">
                                    <div class="component-name">
                                        <span>Graphics Card</span>
                                    </div>
                                    <div class="product-name"></div>
                                </div>
                                <div class="item-price"></div>
                                <div class="action">
                                    <a class="gift-btn st-outline" href="/products/graphics_card" title="">Choose</a>
                                </div>
                            </div>
                            @endif
                            @if(Cache::get('builder-prod')['power_supply'])
                                <div class="c-item">
                                    <div class="img">
                                        <img src="{{ asset('storage/'. Cache::get('builder-prod')['power_supply']->image ) }}" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="component-name">
                                            <span>Power Supply</span>
                                        </div>
                                        <div class="product-name">{{ Cache::get('builder-prod')['power_supply']->name }}</div>
                                    </div>
                                    <div class="item-price">
                                        <div class="price">{{ Cache::get('builder-prod')['power_supply']->views }}৳</div>
                                    </div>
                                    <div class="actions">
                                        <div class="action-items">
                                            <a class="fs-5 me-2" href="/builder-products/remove/power_supply" title="Remove"><i class="fa-solid fa-xmark"></i></a>
                                            <a class="fs-5" href="" title="Choose"><i class="fa-solid fa-arrows-rotate"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @else
                            <div class="c-item blank">
                                <div class="img">
                                    <span class="img-ico power-supply"></span>
                                </div>
                                <div class="details">
                                    <div class="component-name">
                                        <span>Power Supply</span>
                                    </div>
                                    <div class="product-name"></div>
                                </div>
                                <div class="item-price"></div>
                                <div class="action">
                                    <a class="gift-btn st-outline" href="/products/power_supply" title="">Choose</a>
                                </div>
                            </div>
                            @endif
                            <div class="c-item blank">
                                <div class="img">
                                    <span class="img-ico casing"></span>
                                </div>
                                <div class="details">
                                    <div class="component-name">
                                        <span>Casing</span>
                                    </div>
                                    <div class="product-name"></div>
                                </div>
                                <div class="item-price"></div>
                                <div class="action">
                                    <a class="gift-btn st-outline" href="/products/casing" title="">Choose</a>
                                </div>
                            </div>
                            <div class="content-label">Peripherals & Others</div>
                            <div class="c-item blank">
                                <div class="img">
                                    <span class="img-ico monitor"></span>
                                </div>
                                <div class="details">
                                    <div class="component-name">
                                        <span>Monitor</span>
                                    </div>
                                    <div class="product-name"></div>
                                </div>
                                <div class="item-price"></div>
                                <div class="action">
                                    <a class="gift-btn st-outline" href="/products/monitor" title="">Choose</a>
                                </div>
                            </div>
                            <div class="c-item blank">
                                <div class="img">
                                    <span class="img-ico casing-cooler"></span>
                                </div>
                                <div class="details">
                                    <div class="component-name">
                                        <span>Casing Cooler</span>
                                    </div>
                                    <div class="product-name"></div>
                                </div>
                                <div class="item-price"></div>
                                <div class="action">
                                    <a class="gift-btn st-outline" href="/products/casing cooler" title="">Choose</a>
                                </div>
                            </div>
                            <div class="c-item blank">
                                <div class="img">
                                    <span class="img-ico keyboard"></span>
                                </div>
                                <div class="details">
                                    <div class="component-name">
                                        <span>Keyboard</span>
                                    </div>
                                    <div class="product-name"></div>
                                </div>
                                <div class="item-price"></div>
                                <div class="action">
                                    <a class="gift-btn st-outline" href="/products/keyboard" title="">Choose</a>
                                </div>
                            </div>
                            <div class="c-item blank">
                                <div class="img">
                                    <span class="img-ico mouse"></span>
                                </div>
                                <div class="details">
                                    <div class="component-name">
                                        <span>Mouse</span>
                                    </div>
                                    <div class="product-name"></div>
                                </div>
                                <div class="item-price"></div>
                                <div class="action">
                                    <a class="gift-btn st-outline" href="/products/mouse" title="">Choose</a>
                                </div>
                            </div>
                            <div class="c-item blank">
                                <div class="img">
                                    <span class="img-ico antivirus"></span>
                                </div>
                                <div class="details">
                                    <div class="component-name">
                                        <span>Anti Virus</span>
                                    </div>
                                    <div class="product-name"></div>
                                </div>
                                <div class="item-price"></div>
                                <div class="action">
                                    <a class="gift-btn st-outline" href="/products/anti virus" title="">Choose</a>
                                </div>
                            </div>
                            <div class="c-item blank">
                                <div class="img">
                                    <span class="img-ico headphone"></span>
                                </div>
                                <div class="details">
                                    <div class="component-name">
                                        <span>Headphones</span>
                                    </div>
                                    <div class="product-name"></div>
                                </div>
                                <div class="item-price"></div>
                                <div class="action">
                                    <a class="gift-btn st-outline" href="/products/headphone" title="">Choose</a>
                                </div>
                            </div>
                            <div class="c-item blank">
                                <div class="img">
                                    <span class="img-ico ups"></span>
                                </div>
                                <div class="details">
                                    <div class="component-name">
                                        <span>UPS</span>
                                    </div>
                                    <div class="product-name"></div>
                                </div>
                                <div class="item-price"></div>
                                <div class="action">
                                    <a class="gift-btn st-outline" href="/products/ups" title="">Choose</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PC Buldier Content End-->

@endsection
