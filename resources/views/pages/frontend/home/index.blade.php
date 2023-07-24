@extends('layouts.frontend.app')
@section('content')

<div class="intro-slider-container mb-5">
    @include('pages.frontend.hero-slider.index')
</div>

<div class="container">
    @include('pages.frontend.categories.index')
</div>

<div class="container electronics">
    <div class="heading heading-flex heading-border mb-3">
        <div class="heading-left">
            <h2 class="title">Electronics</h2><!-- End .title -->
        </div><!-- End .heading-left -->

        <div class="heading-right">
            <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="elec-new-link" data-toggle="tab" href="#elec-new-tab" role="tab"
                        aria-controls="elec-new-tab" aria-selected="true">New</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="elec-featured-link" data-toggle="tab" href="#elec-featured-tab" role="tab"
                        aria-controls="elec-featured-tab" aria-selected="false">Featured</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="elec-best-link" data-toggle="tab" href="#elec-best-tab" role="tab"
                        aria-controls="elec-best-tab" aria-selected="false">Best Seller</a>
                </li>
            </ul>
        </div><!-- End .heading-right -->
    </div><!-- End .heading -->

    <div class="tab-content tab-content-carousel">
        <div class="tab-pane p-0 fade show active" id="elec-new-tab" role="tabpanel" aria-labelledby="elec-new-link">
            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                <div class="product">
                    <figure class="product-media">
                        <span class="product-label label-new">New</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-13/products/product-6.jpg" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Appliances</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Neato Robotics</a></h3>
                        <!-- End .product-title -->
                        <div class="product-price">
                            $399.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 12 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product">
                    <figure class="product-media">
                        <span class="product-label label-top">Top</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-13/products/product-7.jpg" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Laptops</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3>
                        <!-- End .product-title -->
                        <div class="product-price">
                            $1,199.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="assets/images/demos/demo-13/products/product-8.jpg" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Audio</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth Speaker</a></h3>
                        <!-- End .product-title -->
                        <div class="product-price">
                            $79.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 6 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product">
                    <figure class="product-media">
                        <span class="product-label label-new">New</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-13/products/product-9.jpg" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Tablets</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro with Wi-Fi 256GB </a>
                        </h3><!-- End .product-title -->
                        <div class="product-price">
                            $899.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #edd2c8;"><span class="sr-only">Color
                                    name</span></a>
                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product">
                    <figure class="product-media">
                        <span class="product-label label-sale">Sale</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-13/products/product-10.jpg" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Cell Phone</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Google - Pixel 3 XL 128GB</a></h3>
                        <!-- End .product-title -->
                        <div class="product-price">
                            <span class="new-price">$350.00</span>
                            <span class="old-price">Was $410.00</span>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 10 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color
                                    name</span></a>
                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            </div><!-- End .owl-carousel -->
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="elec-featured-tab" role="tabpanel" aria-labelledby="elec-featured-link">
            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                <div class="product">
                    <figure class="product-media">
                        <span class="product-label label-new">New</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-13/products/product-9.jpg" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Tablets</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro with Wi-Fi 256GB </a>
                        </h3><!-- End .product-title -->
                        <div class="product-price">
                            $899.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #edd2c8;"><span class="sr-only">Color
                                    name</span></a>
                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product">
                    <figure class="product-media">
                        <span class="product-label label-sale">Sale</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-13/products/product-10.jpg" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Cell Phone</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Google - Pixel 3 XL 128GB</a></h3>
                        <!-- End .product-title -->
                        <div class="product-price">
                            $899.99
                            <span class="new-price">$350.00</span>
                            <span class="old-price">Was $410.00</span>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 10 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color
                                    name</span></a>
                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="assets/images/demos/demo-13/products/product-8.jpg" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Audio</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth Speaker</a></h3>
                        <!-- End .product-title -->
                        <div class="product-price">
                            $79.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 6 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product">
                    <figure class="product-media">
                        <span class="product-label label-top">Top</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-13/products/product-7.jpg" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Laptops</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3>
                        <!-- End .product-title -->
                        <div class="product-price">
                            $1,199.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            </div><!-- End .owl-carousel -->
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="elec-best-tab" role="tabpanel" aria-labelledby="elec-best-link">
            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                <div class="product">
                    <figure class="product-media">
                        <span class="product-label label-top">Top</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-13/products/product-7.jpg" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Laptops</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3>
                        <!-- End .product-title -->
                        <div class="product-price">
                            $1,199.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="assets/images/demos/demo-13/products/product-8.jpg" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Audio</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth Speaker</a></h3>
                        <!-- End .product-title -->
                        <div class="product-price">
                            $79.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 6 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product">
                    <figure class="product-media">
                        <span class="product-label label-new">New</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-13/products/product-6.jpg" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Appliances</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Neato Robotics</a></h3>
                        <!-- End .product-title -->
                        <div class="product-price">
                            $399.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 12 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product">
                    <figure class="product-media">
                        <span class="product-label label-sale">Sale</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-13/products/product-10.jpg" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Cell Phone</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Google - Pixel 3 XL 128GB</a></h3>
                        <!-- End .product-title -->
                        <div class="product-price">
                            $899.99
                            <span class="new-price">$350.00</span>
                            <span class="old-price">Was $410.00</span>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 10 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color
                                    name</span></a>
                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product">
                    <figure class="product-media">
                        <span class="product-label label-new">New</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-13/products/product-9.jpg" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Tablets</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro with Wi-Fi 256GB </a>
                        </h3><!-- End .product-title -->
                        <div class="product-price">
                            $899.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #edd2c8;"><span class="sr-only">Color
                                    name</span></a>
                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            </div><!-- End .owl-carousel -->
        </div><!-- .End .tab-pane -->
    </div><!-- End .tab-content -->
</div><!-- End .container -->

<div class="mb-3"></div><!-- End .mb-3 -->


@endsection