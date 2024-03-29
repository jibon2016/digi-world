

<div class="input-group">
    <input type="text" name="search" autocomplete="off" class="search-input form-control rounded-0 p-2 shadow-none" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
    <div class="search-dropdown-menu">
        <div class="search-details">
            <ul class="nav nav-tabs">
                <li data-tab="tab-prod" class="active">Products</li>
                <li data-tab="tab-cat" class="">Categories</li>
            </ul>
            <div id="tab-prod" class="search-results">
            </div>
            <div id="tab-cat" class="search-results" style="display: none;">
                <div class="search-item">
                    <a href="">
                        <div class="image">
                            <img src="{{ asset('assets/images/products/product-sample.png') }}">
                        </div>
                        <div class="name">Gaming Router</div>
                    </a>
                </div>
                <div class="search-item">
                    <a href="">
                        <div class="image">
                            <img src="">
                        </div>
                        <div class="name">Pantum Toner</div>
                    </a>
                </div>
                <div class="search-item">
                    <a href="">
                        <div class="image">
                            <img src="{{ asset('assets/images/products/product-sample.png') }}">
                        </div>
                        <div class="name">Dahua PTZ Camera</div>
                    </a>
                </div>
                <div class="search-item">
                    <a href="">
                        <div class="image">
                            <img src="">
                        </div>
                        <div class="name"> Dell Workstation</div>
                    </a>
                </div>
                <div class="search-item">
                    <a href="">
                        <div class="image">
                            <img src="">
                        </div>
                        <div class="name"> HP Workstation</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <span class="input-group-text bg-none fs-4" id="basic-addon2">
        <i class="fa-solid fa-magnifying-glass"></i>
    </span>
</div>

@section('js')
    <script type="text/javascript">

    </script>
@endsection
