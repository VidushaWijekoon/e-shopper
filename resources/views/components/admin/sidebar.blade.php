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

            <li class="sidebar-item {{ 'admin/category' == request()->path() ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.category') }}">
                    <i class="align-middle" data-feather="tag"></i>
                    <span class="align-middle">Category</span>
                </a>
            </li>

            <li class="sidebar-item {{ 'admin/brand-color' == request()->path() ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.brand') }}">
                    <i class="align-middle" data-feather="copy"></i>
                    <span class="align-middle">Brand & Colour</span>
                </a>
            </li>

            <li class="sidebar-item {{ 'admin/product' == request()->path() ? 'active' : '' }}">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="layers"></i>
                    <span class="align-middle">Product</span>
                </a>
            </li>

            <li class="sidebar-header">Pages</li>

            <li class="sidebar-item {{ 'admin/sliders' == request()->path() ? 'active' : '' }}">
                <a class="sidebar-link" href="#">
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

            <li class="sidebar-header">Finance & Reports</li>

            <li class="sidebar-item {{ 'admin/orders' == request()->path() ? 'active' : '' }}">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="book"></i>
                    <span class="align-middle">Orders</span>
                </a>
            </li>

            <li class="sidebar-item {{ 'admin/sales' == request()->path() ? 'active' : '' }}">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="book-open"></i>
                    <span class="align-middle">Sales</span>
                </a>
            </li>

            <li class="sidebar-item {{ 'admin/reports' == request()->path() ? 'active' : '' }}">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="briefcase"></i>
                    <span class="align-middle">Reports</span>
                </a>
            </li>


            <li class="sidebar-header">Authentication & Other</li>

            <li class="sidebar-item {{ 'admin/users' == request()->path() ? 'active' : '' }}">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="user"></i>
                    <span class="align-middle">Profile</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('website.homepage') }}">
                    <i class="align-middle" data-feather="home"></i>
                    <span class="align-middle">E-Commerce Page</span>
                </a>
            </li>

        </ul>

    </div>
</nav>