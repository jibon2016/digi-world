@props(['product'])

<!---Single Product start --->
<div class="shop-product-item">
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
            <h4 class="p-item-name"><a href="/product/{{ $product->slug }}">{{ $product->name }}</a></h4>
            <div class="p-item-price">
                <span class="price-new">{{ $product->views }}tk</span>
                <span class="price-old">{{ $product->sales }}</span>
            </div>
        </div>
    </div>
</div>
<!---Single Product end --->
