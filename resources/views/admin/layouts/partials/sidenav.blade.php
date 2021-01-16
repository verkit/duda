<div id="aside" class="page-sidenav no-shrink  nav-expand  animate fadeInLeft fade" aria-hidden="true">
    <div class="sidenav h-100 modal-dialog bg-white box-shadow">
        <!-- sidenav top -->
        <!-- Flex nav content -->
        <div class="flex scrollable hover">
            <div class="nav-border b-primary" data-nav>
                <ul class="nav bg">
                    <li class="nav-header hidden-folded">
                        <span>Main</span>
                    </li>
                    <li class="@yield('dashboard')">
                        <a href="/admin" class="i-con-h-a">
                            <span class="nav-icon">
                                <i class="i-con i-con-home"><i></i></i>
                            </span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="@yield('message')">
                        <a href="{{route('message.index')}}" class="i-con-h-a">
                            <span class="nav-icon">
                                <i class="i-con i-con-mail"><i></i></i>
                            </span>
                            <span class="nav-text">Message</span>
                            {{-- <span class="nav-badge">
                                <b class="badge badge-sm badge-pill bg-primary">5</b>
                            </span> --}}
                        </a>
                    </li>
                    <li class="@yield('payment')">
                        <a href="{{route('payment.index')}}" class="i-con-h-a">
                            <span class="nav-icon">
                                <i class="i-con i-con-file"><i></i></i>
                            </span>
                            <span class="nav-text">Payment Confirmation</span>
                        </a>
                    </li>
                    <li class="nav-header hidden-folded">
                        <span>Order</span>
                    </li>
                    <li class="@yield('create-order')">
                        <a href="{{route('order.create')}}" class="i-con-h-a">
                            <span class="nav-icon">
                                <i class='i-con i-con-plus'><i></i></i>
                            </span>
                            <span class="nav-text">Add Order</span>
                        </a>
                    </li>
                    <li class="@yield('order')">
                        <a href="{{route('order.index')}}" class="i-con-h-a">
                            <span class="nav-icon">
                                <i class="i-con i-con-list"><i></i></i>
                            </span>
                            <span class="nav-text">List Order</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav ">
                    <li class="nav-header hidden-folded">
                        <span>Services</span>
                    </li>
                    <li class="@yield('service')">
                        <a href="#" class="i-con-h-a">
                            <span class="nav-icon">
                                <i class='i-con i-con-layer'><i></i></i>
                            </span>
                            <span class="nav-text">Services</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub">
                            <li class="@yield('create-service')">
                                <a href="{{route('service.create')}}" class="">
                                    <span class="nav-text">Add Service</span>
                                </a>
                            </li>
                            <li class="@yield('list-service')">
                                <a href="{{route('service.index')}}" class="">
                                    <span class="nav-text">List Service</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="@yield('product')">
                        <a href="#" class="i-con-h-a">
                            <span class="nav-icon">
                                <i class='i-con i-con-grid'><i></i></i>
                            </span>
                            <span class="nav-text">Products</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub">
                            <li class="@yield('create-product')">
                                <a href="{{route('product.create')}}" class="">
                                    <span class="nav-text">Add Product</span>
                                </a>
                            </li>
                            <li class="@yield('list-product')">
                                <a href="{{route('product.index')}}" class="">
                                    <span class="nav-text">List Product</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="@yield('coupon')">
                        <a href="#" class="i-con-h-a">
                            <span class="nav-icon">
                                <i class='i-con i-con-bookmark'><i></i></i>
                            </span>
                            <span class="nav-text">Coupons</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub">
                            <li class="@yield('create-coupon')">
                                <a href="{{route('coupon.create')}}" class="">
                                    <span class="nav-text">Add Coupon</span>
                                </a>
                            </li>
                            <li class="@yield('list-coupon')">
                                <a href="{{route('coupon.index')}}" class="">
                                    <span class="nav-text">List Coupon</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header hidden-folded">
                        <span>Content</span>
                    </li>
                    <li class="@yield('news')">
                        <a href="{{route('news.index')}}" class="i-con-h-a">
                            <span class="nav-icon">
                                <i class="i-con i-con-page"><i></i></i>
                            </span>
                            <span class="nav-text">News</span>
                        </a>
                    </li>
                    <li class="@yield('protfolio')">
                        <a href="{{route('portfolio.index')}}" class="i-con-h-a">
                            <span class="nav-icon">
                                <i class="i-con i-con-photo"><i></i></i>
                            </span>
                            <span class="nav-text">Portfolios</span>
                        </a>
                    </li>
                    <li class="nav-header hidden-folded">
                        <span>Extra</span>
                    </li>
                    <li class="@yield('bank')">
                        <a href="{{route('bank.index')}}" class="i-con-h-a">
                            <span class="nav-icon">
                                <i class="i-con i-con-file"><i></i></i>
                            </span>
                            <span class="nav-text">Bank</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="{{route('bank.index')}}" class="i-con-h-a">
                            <span class="nav-icon">
                                <i class="i-con i-con-file"><i></i></i>
                            </span>
                            <span class="nav-text">Statistic</span>
                        </a>
                    </li> --}}
                    <li class="nav-header hidden-folded">
                        <span>Setting</span>
                    </li>
                    <li class="@yield('website')">
                        <a href="{{route('web.index')}}" class="i-con-h-a">
                            <span class="nav-icon">
                                <i class="i-con i-con-circle"><i></i></i>
                            </span>
                            <span class="nav-text">Website</span>
                        </a>
                    </li>
                    <li class="@yield('admin')">
                        <a href="{{route('user.index')}}" class="i-con-h-a">
                            <span class="nav-icon">
                                <i class="i-con i-con-users"><i></i></i>
                            </span>
                            <span class="nav-text">Admin</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- sidenav bottom -->
        <div class="no-shrink ">
            <div class="text-sm p-3 b-t">
                <div class="hidden-folded text-sm">
                    <div class="mt-1">
                        <a href="index.html" class="text-muted">About</a>
                    </div>
                    <div class="text-muted"><small class="text-muted">&copy; Copyright 2018, Agile</small></div>
                </div>
            </div>
        </div>
    </div>
</div>
