@props(['product', 'key'])

<!---Single Product start --->

<div class="product-thumb ws-box">
    <div class="img-holder">
        <a href="/product/{{$product->slug}}"><img src="{{ asset('storage/'. $product->image) }}" alt="{{ $product->name }}" width="228" height="228"></a>
    </div>
    <div class="product-info">
        <div class="product-content-blcok">
            <h4 class="product-name">
                <a href="/product/{{$product->slug}}">{{ $product->name }}</a>
            </h4>
            <div class="short-description">
                <ul><li>Speed: 3.5GHz
                    </li><li>Cache: L2: 1MB, L3: 4MB
                    </li></ul>
                <ul><li>Cores-2 &amp; Threads-4
                    </li><li>Memory Speed: 2667MHz</li></ul>
            </div>
        </div>
        <div class="actions">
            <div class="price space-between">
{{--                <span>7,000৳</span>--}}
                <a class="btn-add btn" href="/builder-products/add/{{ $key }}/{{ $product->slug }}">Add</a>
            </div>
        </div>
    </div>
</div>
<!---Single Product end --->
