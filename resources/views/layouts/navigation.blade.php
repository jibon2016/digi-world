<section class="category sticky-top" id="main-nav">
    <nav class="navbar p-0  h-100  ">
        <div class="container-xl">
            <ul class="navbar-nav">
                @foreach($categories as $category)
                    <li class="nav-item ps-0 {{ $category->children->isEmpty() ? '' : 'has-child'  }}">
                        <a class="nav-link text-white" href="/products">{{ $category->name }}</a>
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
                            <li><a href="" class=" nav-item see-all">Show All {{ $category->name }}</a></li>
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</section>
