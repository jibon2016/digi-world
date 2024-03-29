@props(['product'])
<!---Single Product start --->
<div class="product-item">
    <div class="product-item-inner shadow">
        <div class="marks">
            <span class="mark">Get 20% off</span>
        </div>
        <div class="p-item-img">
            <a href="/product/{{ $product->slug }}">
                <img src="{{ asset('storage/'. $product->image) }}" alt="" width="228" height="228">
            </a>
        </div>
        <div class="p-item-details">
            <h4 class="p-item-name"><a href="/product/{{ $product->slug }}">{{ $product->title }}</a></h4>
            <div class="p-item-price">
                <span class="price-new">{{ $product->offer_price }}</span>
                <span class="price-old">{{ $product->regular_price }}</span>
            </div>
        </div>
    </div>
</div>
<!---Single Product end --->
