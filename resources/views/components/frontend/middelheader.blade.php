<div class="header-middle">
    <div class="container">
        <div class="header-left">
            <button class="mobile-menu-toggler">
                <span class="sr-only">Toggle mobile menu</span>
                <i class="icon-bars"></i>
            </button>

            <a href="{{ route('frontend.index') }}" class="logo">
                <img src="{{ asset('frontend/img/company.png') }}" alt="JBMM" width="200" height="35">
            </a>
        </div>

        <div class="header-center">
            <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                <form action="#" method="get">
                    <div class="header-search-wrapper search-wrapper-wide">
                        <label for="q" class="sr-only">Search</label>
                        <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                        <input type="search" class="form-control" name="q" id="q"
                            placeholder="Search product ..." required>
                    </div>
                </form>
            </div>
        </div>

        <div class="header-right">

            <div class="wishlist">
                <a href="{{ route('frontend.wishlist') }}" title="Wishlist">
                    <div class="icon">
                        <i class="icon-heart-o"></i>
                        <span class="wishlist-count badge">3</span>
                    </div>
                    <p>Wishlist</p>
                </a>
            </div>

            <div class="cart-dropdown">
                <a href="{{ route('frontend.cart') }}" class="dropdown-toggle">
                    <div class="icon">
                        <i class="icon-shopping-cart"></i>
                        <span class="cart-count">2</span>
                    </div>
                    <p>Cart</p>
                </a>

            </div>

        </div>
    </div>
</div>
