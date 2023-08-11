<div>
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">List<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="toolbox">
                        <div class="toolbox-left">
                            <div class="toolbox-info">
                                Showing <span>9 of 56</span> Products
                            </div>
                        </div>

                        <div class="toolbox-right">
                            <div class="toolbox-sort">
                                <label for="sortby">Sort by:</label>
                                <div class="select-custom">
                                    <select name="sortby" id="sortby" class="form-control">
                                        <option value="relevence" selected="selected">Relevance</option>
                                        <option value="high-to-low">High to Low</option>
                                        <option value="low-to-high">Low to High</option>
                                        <option value="rating">Most Rated</option>
                                        <option value="popularity">Popularity</option>
                                        <option value="new-arrivals">New Arrivals</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="products mb-3">
                        @foreach ($products as $productsItem)
                            <div class="product product-list">
                                <div class="row">
                                    <div class="col-6 col-lg-3">
                                        <figure class="product-media">
                                            <span class="product-label label-new">New</span>
                                            <a
                                                href="{{ url('/products/' . $productsItem->category->slug . '/' . $productsItem->slug) }}">
                                                <img src="{{ asset($productsItem->productImages[2]->image) }}"
                                                    alt="Product image" class="product-image">
                                            </a>
                                        </figure>
                                    </div>

                                    <div class="col-6 col-lg-3 order-lg-last">
                                        <div class="product-list-action">
                                            <div class="product-price">
                                                د.إ {{ $productsItem->product_selling_price }}
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 20%;"></div>

                                                </div>
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div>

                                            <a href="#" class="btn-product btn-cart "
                                                style="margin-top: 100px"><span>add to
                                                    cart</span></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="product-body product-action-inner">
                                            <a href="#" class="btn-product btn-wishlist"
                                                title="Add to wishlist"><span>add to wishlist</span></a>
                                            <div class="product-cat">
                                                <a href="#"
                                                    class="text-capitalize">{{ $productsItem->category->title }}</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title">
                                                <a href="#" class="text-capitalize">{{ $productsItem->title }}</a>
                                            </h3>

                                            <div class="product-content">
                                                <p class="text-capitalize">{{ $productsItem->short_description }}</p>
                                            </div><!-- End .product-content -->

                                            <div class="product-nav product-nav-thumbs ">
                                                @foreach ($productsItem->productImages as $image)
                                                    <img src="{{ asset($image->image) }}" alt="{{ $image->id }}"
                                                        width="80" class="mx-3">
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

                <aside class="col-lg-3 order-lg-first">
                    <div class="sidebar sidebar-shop">
                        <div class="widget widget-clean">
                            <label>Filters:</label>
                            <a href="#" class="sidebar-filter-clear">Clean All</a>
                        </div>

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true"
                                    aria-controls="widget-1">
                                    Category
                                </a>
                            </h3>

                            <div class="collapse show" id="widget-1">
                                <div class="widget-body">
                                    <div class="filter-items filter-items-count">
                                        @foreach ($categories as $categoryItem)
                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="{{ $categoryItem->title }}">
                                                    <label class="custom-control-label text-capitalize"
                                                        for="{{ $categoryItem->title }}">{{ $categoryItem->title }}</label>
                                                </div>
                                                <span class="item-count">0</span>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-2" role="button" aria-expanded="true"
                                    aria-controls="widget-2">
                                    Size
                                </a>
                            </h3>

                            <div class="collapse show" id="widget-2">
                                <div class="widget-body">
                                    <div class="filter-items">
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="size-1">
                                                <label class="custom-control-label" for="size-1">XS</label>
                                            </div>
                                        </div>

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="size-2">
                                                <label class="custom-control-label" for="size-2">S</label>
                                            </div>
                                        </div>

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked
                                                    id="size-3">
                                                <label class="custom-control-label" for="size-3">M</label>
                                            </div>
                                        </div>

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked
                                                    id="size-4">
                                                <label class="custom-control-label" for="size-4">L</label>
                                            </div>
                                        </div>

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="size-5">
                                                <label class="custom-control-label" for="size-5">XL</label>
                                            </div>
                                        </div>

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="size-6">
                                                <label class="custom-control-label" for="size-6">XXL</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-3" role="button" aria-expanded="true"
                                    aria-controls="widget-3">
                                    Colour
                                </a>
                            </h3>

                            <div class="collapse show" id="widget-3">
                                <div class="widget-body">
                                    <div class="filter-colors">
                                        <a href="#" style="background: #b87145;"><span class="sr-only">Color
                                                Name</span></a>
                                        <a href="#" style="background: #f0c04a;"><span class="sr-only">Color
                                                Name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                Name</span></a>
                                        <a href="#" class="selected" style="background: #cc3333;"><span
                                                class="sr-only">Color Name</span></a>
                                        <a href="#" style="background: #3399cc;"><span class="sr-only">Color
                                                Name</span></a>
                                        <a href="#" style="background: #669933;"><span class="sr-only">Color
                                                Name</span></a>
                                        <a href="#" style="background: #f2719c;"><span class="sr-only">Color
                                                Name</span></a>
                                        <a href="#" style="background: #ebebeb;"><span class="sr-only">Color
                                                Name</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-4" role="button" aria-expanded="true"
                                    aria-controls="widget-4">
                                    Brand
                                </a>
                            </h3>

                            <div class="collapse show" id="widget-4">
                                <div class="widget-body">
                                    <div class="filter-items">

                                        @foreach ($products as $productsItem)
                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="{{ $productsItem->brand->title }}">
                                                    <label class="custom-control-label text-capitalize"
                                                        for="{{ $productsItem->brand->title }}">{{ $productsItem->brand->title }}</label>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
