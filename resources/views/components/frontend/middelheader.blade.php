<div class="header-middle">
    <div class="container">
        <div class="header-left">
            <button class="mobile-menu-toggler">
                <span class="sr-only">Toggle mobile menu</span>
                <i class="icon-bars"></i>
            </button>

            <a href="index.html" class="logo">
                <img src="{{ asset('frontend/img/company.jpg') }}" alt="Molla Logo" width="200" height="35">
            </a>
        </div><!-- End .header-left -->

        <div class="header-center">
            <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                <form action="#" method="get">
                    <div class="header-search-wrapper search-wrapper-wide">
                        <label for="q" class="sr-only">Search</label>
                        <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                        <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..."
                            required>
                    </div>
                    <!-- End .header-search-wrapper -->
                </form>
            </div>
            <!-- End .header-search -->
        </div>

        <div class="header-right">




            <div class="wishlist">
                <a href="#" title="Wishlist">
                    <div class="icon">
                        <i class="icon-heart-o"></i>
                        <span class="wishlist-count badge">3</span>
                    </div>
                    <p>Wishlist</p>
                </a>
            </div><!-- End .compare-dropdown -->

            <div class="dropdown cart-dropdown">
                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" data-display="static">
                    <div class="icon">
                        <i class="icon-shopping-cart"></i>
                        <span class="cart-count">2</span>
                    </div>
                    <p>Cart</p>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-cart-products">
                        <div class="product">
                            <div class="product-cart-details">
                                <h4 class="product-title">
                                    <a href="product.html">Beige knitted elastic runner shoes</a>
                                </h4>

                                <span class="cart-product-info">
                                    <span class="cart-product-qty">1</span>
                                    x $84.00
                                </span>
                            </div><!-- End .product-cart-details -->

                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                </a>
                            </figure>
                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                        </div><!-- End .product -->

                        <div class="product">
                            <div class="product-cart-details">
                                <h4 class="product-title">
                                    <a href="product.html">Blue utility pinafore denim dress</a>
                                </h4>

                                <span class="cart-product-info">
                                    <span class="cart-product-qty">1</span>
                                    x $76.00
                                </span>
                            </div><!-- End .product-cart-details -->

                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                </a>
                            </figure>
                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                        </div><!-- End .product -->
                    </div><!-- End .cart-product -->

                    <div class="dropdown-cart-total">
                        <span>Total</span>

                        <span class="cart-total-price">$160.00</span>
                    </div><!-- End .dropdown-cart-total -->

                    <div class="dropdown-cart-action">
                        <a href="cart.html" class="btn btn-primary">View Cart</a>
                        <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i
                                class="icon-long-arrow-right"></i></a>
                    </div><!-- End .dropdown-cart-total -->
                </div><!-- End .dropdown-menu -->
            </div><!-- End .cart-dropdown -->

        </div><!-- End .header-right -->
    </div><!-- End .container -->
</div><!-- End .header-middle -->