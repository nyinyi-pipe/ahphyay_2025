<!--== Header Area Start ==-->
<header id="header-area">
    <div class="ruby-container">
        <div class="row">
            <!-- Logo Area Start -->
            <div class="col-3 col-lg-1 col-xl-2 m-auto">
                <a href="/" class="logo-area">
                    <img src="{{ $logo ?? '' }}" style="filter: brightness(250%);" width="60" class=""
                        alt="Logo" class="img-fluid" />
                </a>
            </div>
            <!-- Logo Area End -->

            <!-- Navigation Area Start -->
            <div class="col-3 col-lg-9 col-xl-8 m-auto">
                <div class="main-menu-wrap">
                    <nav id="mainmenu">
                        <ul>
                            <li class=""><a href="/home">Home</a>

                            </li>
                            <li class="dropdown-show"><a href="#">Shop</a>
                                <ul class="mega-menu-wrap dropdown-nav">
                                    <li class="mega-menu-item"><a href="shop.html" class="mega-item-title">Shop
                                            Layout</a>
                                        <ul>
                                            <li><a href="shop.html">Shop Left Sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                            <li><a href="shop-left-full-wide.html">Shop Left Full Wide</a></li>
                                            <li><a href="shop-right-full-wide.html">Shop Right Full Wide</a></li>
                                            <li><a href="shop-full-wide.html">Shop Without Sidebar</a></li>
                                        </ul>
                                    </li>

                                    <li class="mega-menu-item"><a href="single-product.html"
                                            class="mega-item-title">Single
                                            Products</a>
                                        <ul>
                                            <li><a href="single-product.html">Single Product</a></li>
                                            <li><a href="single-product-normal.html">Single Product Normal</a></li>
                                            <li><a href="single-product-group.html">Single Product Group</a></li>
                                            <li><a href="single-product-external.html">Single Product External</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-show"><a href="#">Blog</a>
                                <ul class="dropdown-nav">
                                    <li><a href="blog.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-grid.html">Blog Grid Layout</a></li>
                                    <li><a href="single-blog.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/about') }}">About Us</a></li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Navigation Area End -->

            <!-- Header Right Meta Start -->
            <div class="col-6 col-lg-2 m-auto">
                <div class="header-right-meta text-right">
                    <ul>

                        {{-- <li class="settings"><a href="#"><i class="fa fa-cog"></i></a>
                            <div class="site-settings d-block d-sm-flex">

                                <dl class="my-account">
                                    <dt>My Account</dt>
                                    <dd><a href="#">Dashboard</a></dd>
                                    <dd><a href="#">Profile</a></dd>
                                    <dd><a href="#">Sign</a></dd>
                                </dl>

                                <dl class="language">
                                    <dt>Language</dt>
                                    <dd class="current"><a href="#">English (US)</a></dd>
                                    <dd><a href="#">English (UK)</a></dd>
                                    <dd><a href="#">Chinees</a></dd>
                                    <dd><a href="#">Bengali</a></dd>
                                    <dd><a href="#">Hindi</a></dd>
                                    <dd><a href="#">Japanees</a></dd>
                                </dl>
                            </div>
                        </li> --}}

                        <li class="">
                            @auth
                                @if (auth()->user()->hasRole('superadmin'))
                                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                @elseif (auth()->user()->hasRole('customer'))
                                    <a href="{{ route('customer.dashboard') }}">Dashboard</a>
                                @elseif(auth()->user()->hasRole('supplier'))
                                    <a href="{{ route('supplier.dashboard') }}">Dashboard</a>
                                @endif
                            @else
                                <a href="{{ route('login') }}">Login</a>
                            @endauth
                            <div class="site-settings d-block d-sm-flex">

                                <dl class="my-account">
                                    <dt>My Account</dt>
                                    <dd><a href="#">Dashboard</a></dd>
                                    <dd><a href="#">Profile</a></dd>
                                    <dd><a href="#">Sign</a></dd>
                                </dl>

                                <dl class="language">
                                    <dt>Language</dt>
                                    <dd class="current"><a href="#">English (US)</a></dd>
                                    <dd><a href="#">English (UK)</a></dd>
                                    <dd><a href="#">Chinees</a></dd>
                                    <dd><a href="#">Bengali</a></dd>
                                    <dd><a href="#">Hindi</a></dd>
                                    <dd><a href="#">Japanees</a></dd>
                                </dl>
                            </div>
                        </li>
                        <li class="shop-cart"><a href="#"><i class="fa fa-shopping-bag"></i> <span
                                    class="count">3</span></a>
                            <div class="mini-cart">
                                <div class="mini-cart-body">
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            <a href="#"><img class="img-fluid" src="bootstrap/img/product-1.jpg"
                                                    alt="Products" /></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="#">Sprite Yoga Companion</a></h2>
                                            <div class="cal d-flex align-items-center">
                                                <span class="quantity">3</span>
                                                <span class="multiplication">X</span>
                                                <span class="price">$77.00</span>
                                            </div>
                                        </div>
                                        <a href="#" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            <a href="#"><img class="img-fluid" src="bootstrap/img/product-2.jpg"
                                                    alt="Products" /></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2><a href="#">Yoga Companion Kit</a></h2>
                                            <div class="cal d-flex align-items-center">
                                                <span class="quantity">2</span>
                                                <span class="multiplication">X</span>
                                                <span class="price">$6.00</span>
                                            </div>
                                        </div>
                                        <a href="#" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            <a href="#"><img class="img-fluid"
                                                    src="bootstrap/img/product-3.jpg" alt="Products" /></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2><a href="#">Sprite Yoga Companion Kit</a></h2>
                                            <div class="cal d-flex align-items-center">
                                                <span class="quantity">1</span>
                                                <span class="multiplication">X</span>
                                                <span class="price">$116.00</span>
                                            </div>
                                        </div>
                                        <a href="#" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </div>
                                <div class="mini-cart-footer">
                                    <a href="checkout.html" class="btn-add-to-cart">Checkout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header Right Meta End -->
        </div>
    </div>
</header>
<!--== Header Area End ==-->
