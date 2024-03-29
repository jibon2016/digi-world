{{-- <section class="category shadow sticky-lg-top ">
    <div class="container-xl h-100">
        <div class="row h-100">
            <div class="col-md-12 p-0 h-100">
                <nav class="navbar navbar-expand-xl h-100  ">
                    <div class="container-fluid p-0">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                @foreach($categories as $category)
                                    <li class="nav-item ps-0 border-end border-secondary">
                                        <a class="nav-link text-black" href="/products">{{ $category->name }}</a>
                                        <ul class="drop-down drop-menu-1">
                                            @foreach($category->children as $subCategory)
                                                <li class="nav-item {{ $subCategory->children->isEmpty() ? '' : 'has-child'  }} {{ $subCategory->children->count() >15 ? 'multi-col': '' }}">
                                                    <a class="nav-link" href="/products">{{$subCategory->name}}</a>
                                                    <div class="drop-down drop-menu-2 ">
                                                        @foreach($subCategory->children as $childCategory)
                                                            <ul class="p-0">
                                                                <li class="nav-item"><a class="nav-link" href="/products">{{ $childCategory->name}}</a></li>
                                                            </ul>
                                                        @endforeach
                                                    </div>
                                                </li>
                                            @endforeach 
                                            <li><a href="" class="see-all">Show All {{ $category->name }}</a></li>
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section> --}}
