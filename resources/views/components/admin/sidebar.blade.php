<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('admin.dashboard') }}">
            <span class="align-middle">
                JBMM E-Commerce
            </span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">E-Commerce</li>

            <li class="sidebar-item {{ 'admin/dashboard' == request()->path() ? 'active' : '' }}">
                <a class="sidebar-link " href="{{ route('admin.dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="#customer" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="briefcase"></i>
                    <span class="align-middle">Customer Management</span>
                </a>
                <ul id="customer" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Customers</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#store" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="copy"></i>
                    <span class="align-middle">Store Management</span>
                </a>
                <ul id="store" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.category') }}">Categories</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.color-brand') }}">Color & Brand</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.product') }}">Products</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#payment" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="copy"></i>
                    <span class="align-middle">Payment & Shipping</span>
                </a>
                <ul id="payment" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Alerts</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Buttons</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item {{ 'admin/sliders' == request()->path() ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.slider') }}">
                    <i class="align-middle" data-feather="airplay"></i>
                    <span class="align-middle">Tracking</span>
                </a>
            </li>

            <li class="sidebar-header">Discount & Promotions</li>

            <li class="sidebar-item {{ 'admin/sliders' == request()->path() ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.slider') }}">
                    <i class="align-middle" data-feather="grid"></i>
                    <span class="align-middle">Sliders</span>
                </a>
            </li>

            <li class="sidebar-item {{ 'admin/promotions' == request()->path() ? 'active' : '' }}">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="list"></i>
                    <span class="align-middle">Promotions</span>
                </a>
            </li>

            <li class="sidebar-item {{ 'admin/offers' == request()->path() ? 'active' : '' }}">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="command"></i>
                    <span class="align-middle">Offers</span>
                </a>
            </li>

            <li class="sidebar-item {{ 'admin/offers' == request()->path() ? 'active' : '' }}">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="crop"></i>
                    <span class="align-middle">Coupen</span>
                </a>
            </li>

            <li class="sidebar-header">Finance & Reports</li>

            <li class="sidebar-item {{ 'admin/orders' == request()->path() ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.approval-stages') }}">
                    <i class="align-middle" data-feather="lock"></i>
                    <span class="align-middle">Approve</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="#order" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layers"></i>
                    <span class="align-middle">Order & Shipping</span>
                </a>
                <ul id="order" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Alerts</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Buttons</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-cards.html">Cards</a>
                    </li>
                </ul>
            </li>


            <li class="sidebar-header">Authentication & Other</li>

            <li class="sidebar-item {{ 'admin/users' == request()->path() ? 'active' : '' }}">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="user"></i>
                    <span class="align-middle">{{ __('Administrator') }}</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('frontend.index') }}">
                    <i class="align-middle" data-feather="home"></i>
                    <span class="align-middle">E-Commerce Page</span>
                </a>
            </li>

        </ul>

    </div>
</nav>
