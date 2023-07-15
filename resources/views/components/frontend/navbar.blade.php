<div class="header-bottom sticky-header">
    <div class="container">
        <div class="header-left">
            <div class="dropdown category-dropdown">
                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" data-display="static" title="Browse Categories">
                    Browse Categories <i class="icon-angle-down"></i>
                </a>

                <div class="dropdown-menu">
                    <nav class="side-nav">
                        <ul class="menu-vertical sf-arrows">
                            <li class="item-lead"><a href="#">Daily offers</a></li>
                            <li class="item-lead"><a href="#">Gift Ideas</a></li>
                            <li><a href="#">Beds</a></li>
                            <li><a href="#">Lighting</a></li>
                            <li><a href="#">Sofas & Sleeper sofas</a></li>
                            <li><a href="#">Storage</a></li>
                            <li><a href="#">Armchairs & Chaises</a></li>
                            <li><a href="#">Decoration </a></li>
                            <li><a href="#">Kitchen Cabinets</a></li>
                            <li><a href="#">Coffee & Tables</a></li>
                            <li><a href="#">Outdoor Furniture </a></li>
                        </ul><!-- End .menu-vertical -->
                    </nav><!-- End .side-nav -->
                </div><!-- End .dropdown-menu -->
            </div><!-- End .category-dropdown -->
        </div><!-- End .header-left -->

        <div class="header-center">
            <nav class="main-nav">
                <ul class="menu sf-arrows">
                    <li class="megamenu-container active">
                        <a href="#" class="#">Home</a>
                    </li>
                    <li class="megamenu-container">
                        <a href="#" class="#">About</a>
                    </li>
                </ul>
                <!-- End .menu -->
            </nav>
            <!-- End .main-nav -->
        </div>
        <!-- End .header-center -->

        <div class="header-right">

            <ul class="nav">
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i>
                    {{ __('Sign Out') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endguest
            </ul>
        </div>
    </div><!-- End .container -->
</div><!-- End .header-bottom -->