<div class="header-middle">
    <div class="container">
        <div class="header-left">
            <button class="mobile-menu-toggler">
                <span class="sr-only">Toggle mobile menu</span>
                <i class="icon-bars"></i>
            </button>

            <a href="{{ route('frontend.index') }}" class="logo">
                <img src="{{ asset('img/logo/Logo_1.png') }}" alt="JBMM Logo" width="200" height="35">
            </a>
        </div>

        <div class="header-right">
            <div class="header-search header-search-extended header-search-visible header-search-no-radius">
                <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                <form action="#" method="get">
                    <div class="header-search-wrapper search-wrapper-wide">
                        <label for="q" class="sr-only">Search</label>
                        <input type="search" class="form-control" name="q" id="q"
                            placeholder="Search product ..." required>

                        <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                    </div>
                </form>
            </div>

            <div class="header-dropdown-link">

                <div class="account">
                    <a href="#" title="My account">
                        <div class="icon">
                            <i class="bi bi-globe"></i>
                        </div>
                        <p>English</p>
                    </a>
                </div>

                <div class="wishlist">
                    <a href="{{ route('frontend.wishlist') }}" title="Wishlist">
                        <div class="icon">
                            <i class="icon-heart-o"></i>
                            <span class="wishlist-count badge">3</span>
                        </div>
                        <p>Wishlist</p>
                    </a>
                </div>

                <div class="dropdown cart-dropdown">
                    <a href="{{ route('frontend.cart') }}" class="dropdown-toggle">
                        <div class="icon">
                            <i class="icon-shopping-cart"></i>
                            <span class="cart-count">2</span>
                        </div>
                        <p>Cart</p>
                    </a>
                </div>

                @guest
                    @if (Route::has('login'))
                        <div class="account">
                            <a href="#" title="My account">
                                <div class="icon">
                                    <i class="icon-user"></i>
                                </div>
                                <p>Account</p>
                            </a>
                        </div>
                    @endif
                @else
                    <div class="account">
                        <a href="{{ route('frontend.accounts-dashboard') }}" title="My account">
                            <div class="icon">
                                <i class="icon-user"></i>
                            </div>
                            <p>{{ ucfirst(Auth::user()->name) }}</p>
                        </a>
                    </div>
                @endguest

            </div>
        </div>
    </div>
</div>
