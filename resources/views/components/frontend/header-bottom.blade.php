<div class="header-bottom sticky-header">
    <div class="container">
        <div style="background-color: #333; display: flex; width: 100%;">
            <div class="header-left">
                <div class="dropdown category-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" data-display="static" title="Browse Categories">
                        Browse Categories
                    </a>

                    <div class="dropdown-menu">
                        <nav class="side-nav">
                            @foreach ($categories as $categoryItems)
                                <ul class="menu-vertical sf-arrows">
                                    <li class="item-lead text-capitalize">
                                        <a
                                            href="{{ url('/products/' . $categoryItems->slug) }}">{{ $categoryItems->title }}</a>
                                    </li>
                                </ul>
                            @endforeach

                        </nav>
                    </div>
                </div>
            </div>

            <div class="header-center">

                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="megamenu-container active">
                            <a href="#">Home</a>
                        </li>
                        <li class="megamenu-container">
                            <a href="#">About</a>
                        </li>
                        <li class="megamenu-container">
                            <a href="#">Contact</a>
                        </li>

                    </ul>
                </nav>
            </div>

            <div class="header-right">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item text-decoration-none list-unstyled">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    <span class="mx-3">|</span>
                    @if (Route::has('register'))
                        <li class="nav-item text-decoration-none list-unstyled" style="margin: 0 10px">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @endguest
            </div>
        </div>
    </div>
</div>
