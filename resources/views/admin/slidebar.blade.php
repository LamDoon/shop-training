<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="/assets/admin/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>

                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li
                    class="sidebar-item active ">
                    <a href="index.html" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Products</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{asset('admin/products/list')}}">List</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{asset('admin/products/create')}}">Create</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{asset('admin/categories/list')}}">Categories</a>
                        </li>
                    </ul>
                </li>
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Authentication</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="component-alert.html">{{ session('email') }}</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-badge.html">Create</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ url('/admin/logout') }}">Logout</a>
                        </li>
                    </ul>
                </li>

                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-collection-fill"></i>
                        <span>Extra Components</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="extra-component-avatar.html">Avatar</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="extra-component-sweetalert.html">Sweet Alert</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="extra-component-toastify.html">Toastify</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="extra-component-rating.html">Rating</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="extra-component-divider.html">Divider</a>
                        </li>
                    </ul>
                </li>

                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Layouts</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="layout-default.html">Default Layout</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="layout-vertical-1-column.html">1 Column</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="layout-vertical-navbar.html">Vertical Navbar</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="layout-rtl.html">RTL Layout</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="layout-horizontal.html">Horizontal Menu</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
