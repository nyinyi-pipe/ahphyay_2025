{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'AhPhyay') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('admin/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        
    </div>
</body>

</html> --}}

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>AHPHYAY - Web App</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="bootstrap/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700" />
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" />

    <!--=== Bootstrap CSS ===-->
    <link href="bootstrap/css/vendor/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--=== Plugins CSS ===-->
    <link href="bootstrap/css/plugins.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="bootstrap/css/style.css" rel="stylesheet">

    <link href="bootstrap/css/custom.css" rel="stylesheet" href="">

    <!-- Modernizer JS -->
    <script src="bootstrap/js/vendor/modernizr-2.8.3.min.js"></script>




    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!--== Header Area Start ==-->
    <header id="header-area">
        <div class="ruby-container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-3 col-lg-1 col-xl-2 m-auto">
                    <a href="index.html" class="logo-area">
                        <img src="" alt="Logo" class="img-fluid" />
                    </a>
                </div>
                <!-- Logo Area End -->

                <!-- Navigation Area Start -->
                <div class="col-3 col-lg-9 col-xl-8 m-auto">
                    <div class="main-menu-wrap">
                        <nav id="mainmenu">
                            <ul>
                                <li class="dropdown-show"><a href="index.html">Home</a>
                                    <ul class="dropdown-nav sub-dropdown">
                                        <li><a href="index.html">Home Layout 1</a></li>

                                    </ul>
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
                                <li class="dropdown-show"><a href="#">Pages</a>
                                    <ul class="dropdown-nav">
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="login-register.html">Login & Register</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-show"><a href="#">Men</a>
                                    <ul class="mega-menu-wrap dropdown-nav">
                                        <li class="mega-menu-item"><a href="shop-left-full-wide.html"
                                                class="mega-item-title">Shirt</a>
                                            <ul>
                                                <li><a href="shop.html">Tops & Tees</a></li>
                                                <li><a href="shop.html">Polo Short Sleeve</a></li>
                                                <li><a href="shop.html">Graphic T-Shirts</a></li>
                                                <li><a href="shop.html">Jackets & Coats</a></li>
                                                <li><a href="shop.html">Fashion Jackets</a></li>
                                            </ul>
                                        </li>

                                        <li class="mega-menu-item"><a href="shop-left-full-wide.html"
                                                class="mega-item-title">Jeans</a>
                                            <ul>
                                                <li><a href="shop.html">Crochet</a></li>
                                                <li><a href="shop.html">Sleeveless</a></li>
                                                <li><a href="shop.html">Stripes</a></li>
                                                <li><a href="shop.html">Sweaters</a></li>
                                                <li><a href="shop.html">Hoodies</a></li>
                                            </ul>
                                        </li>

                                        <li class="mega-menu-item"><a href="shop-left-full-wide.html"
                                                class="mega-item-title">Shoes</a>
                                            <ul>
                                                <li><a href="shop.html">Tops & Tees</a></li>
                                                <li><a href="shop.html">Polo Short Sleeve</a></li>
                                                <li><a href="shop.html">Graphic T-Shirts</a></li>
                                                <li><a href="shop.html">Jackets & Coats</a></li>
                                                <li><a href="shop.html">Fashion Jackets</a></li>
                                            </ul>
                                        </li>

                                        <li class="mega-menu-item"><a href="shop-left-full-wide.html"
                                                class="mega-item-title">Watches</a>
                                            <ul>
                                                <li><a href="shop.html">Crochet</a></li>
                                                <li><a href="shop.html">Sleeveless</a></li>
                                                <li><a href="shop.html">Stripes</a></li>
                                                <li><a href="shop.html">Sweaters</a></li>
                                                <li><a href="shop.html">Hoodies</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-show"><a href="shop-left-full-wide.html">Women</a>
                                    <ul class="mega-menu-wrap dropdown-nav">
                                        <li class="mega-menu-item"><a href="shop-left-full-wide.html"
                                                class="mega-item-title">Kamiz</a>
                                            <ul>
                                                <li><a href="shop.html">Tops & Tees</a></li>
                                                <li><a href="shop.html">Polo Short Sleeve</a></li>
                                                <li><a href="shop.html">Graphic T-Shirts</a></li>
                                                <li><a href="shop.html">Jackets & Coats</a></li>
                                                <li><a href="shop.html">Fashion Jackets</a></li>
                                            </ul>
                                        </li>

                                        <li class="mega-menu-item"><a href="shop-left-full-wide.html"
                                                class="mega-item-title">Life Style</a>
                                            <ul>
                                                <li><a href="shop.html">Crochet</a></li>
                                                <li><a href="shop.html">Sleeveless</a></li>
                                                <li><a href="shop.html">Stripes</a></li>
                                                <li><a href="shop.html">Sweaters</a></li>
                                                <li><a href="shop.html">Hoodies</a></li>
                                            </ul>
                                        </li>

                                        <li class="mega-menu-item"><a href="shop-left-full-wide.html"
                                                class="mega-item-title">Shoes</a>
                                            <ul>
                                                <li><a href="shop.html">Tops & Tees</a></li>
                                                <li><a href="shop.html">Polo Short Sleeve</a></li>
                                                <li><a href="shop.html">Graphic T-Shirts</a></li>
                                                <li><a href="shop.html">Jackets & Coats</a></li>
                                                <li><a href="shop.html">Fashion Jackets</a></li>
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
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Navigation Area End -->

                <!-- Header Right Meta Start -->
                <div class="col-6 col-lg-2 m-auto">
                    <div class="header-right-meta text-right">
                        <ul>
                            <li><a href="#" class="modal-active"><i class="fa fa-search"></i></a></li>
                            <li class="settings"><a href="#"><i class="fa fa-cog"></i></a>
                                <div class="site-settings d-block d-sm-flex">
                                    <dl class="currency">
                                        <dt>Currency</dt>
                                        <dd class="current"><a href="#">USD</a></dd>
                                        <dd><a href="#">AUD</a></dd>
                                        <dd><a href="#">CAD</a></dd>
                                        <dd><a href="#">BDT</a></dd>
                                    </dl>

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
                                                <a href="#"><img class="img-fluid"
                                                        src="bootstrap/img/product-1.jpg" alt="Products" /></a>
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
                                                <a href="#"><img class="img-fluid"
                                                        src="bootstrap/img/product-2.jpg" alt="Products" /></a>
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

    <!--== Search Box Area Start ==-->
    <div class="body-popup-modal-area">
        <span class="modal-close"><img src="bootstrap/img/cancel.png" alt="Close" class="img-fluid" /></span>
        <div class="modal-container d-flex">
            <div class="search-box-area">
                <div class="search-box-form">
                    <form action="#" method="post">
                        <input type="search" placeholder="type keyword and hit enter" />
                        <button class="btn" type="button"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--== Search Box Area End ==-->

    <!--== Banner // Slider Area Start ==-->
    <section id="banner-area">
        <div class="ruby-container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="banner-carousel" class="owl-carousel">
                        <!-- Banner Single Carousel Start -->
                        <div class="single-carousel-wrap slide-item-1">
                            <div class="banner-caption text-center text-lg-left">
                                <h4 style="color: #5e2207;">Ahphyay Store</h4>
                                <h3 class="h3-banner">Lorem ipsum dolor </h3>
                                <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                <a href="#" class="btn-long-arrow">Shop Now</a>
                            </div>
                        </div>
                        <!-- Banner Single Carousel End -->

                        <!-- Banner Single Carousel Start -->
                        <div class="single-carousel-wrap slide-item-2">
                            <div class="banner-caption text-center text-lg-left">
                                <h4 style="color:#5e2207;">Ahphyay Store</h4>
                                <h3 class="h3-banner">Lorem ipsum dolor</h3>
                                <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                <a href="#" class="btn-long-arrow">Shop Now</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Banner Slider End ==-->

    <!--== Products by Category Area Start ==-->
    <div id="product-categories-area" style="background-color: white;" class="pt-9 mt-2 ">

        <div class="ruby-container-about">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Products Categories</h2>
                        <p>Best products on sale.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="large-size-cate">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-cat-item">
                                    <figure class="category-thumb">
                                        <a href="#"><img
                                                src="https://m.media-amazon.com/images/I/61O10tAWsyL._AC_SX569_.jpg"
                                                alt="Women Category" class="img-fluid" /></a>

                                        <figcaption class="category-name">
                                            <a href="#">Shop For ...</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single-cat-item">
                                    <figure class="category-thumb">
                                        <a href="#"><img
                                                src="https://m.media-amazon.com/images/I/61O10tAWsyL._AC_SX569_.jpg"
                                                alt="Men Category" class="img-fluid" /></a>

                                        <figcaption class="category-name">
                                            <a href="#">Shop For ...</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" style="margin-bottom: 30px;">
                    <div class="small-size-cate">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-cat-item">
                                    <figure class="category-thumb">
                                        <a href="#"><img src="bootstrap/img/jewellery-cat.jpg"
                                                alt="Men Category" class="img-fluid" /></a>

                                        <figcaption class="category-name">
                                            <a href="#">Jewellery</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single-cat-item">
                                    <figure class="category-thumb">
                                        <a href="#"><img src="bootstrap/img/women-cat2.jpg" alt="Men Category"
                                                class="img-fluid" /></a>

                                        <figcaption class="category-name">
                                            <a href="#">Kamiz</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single-cat-item">
                                    <figure class="category-thumb">
                                        <a href="#"><img src="bootstrap/img/watch-cat.jpg" alt="Men Category"
                                                class="img-fluid" /></a>

                                        <figcaption class="category-name">
                                            <a href="#">watches</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single-cat-item">
                                    <figure class="category-thumb">
                                        <a href="#"><img src="bootstrap/img/suit-cat.jpg" alt="Men Category"
                                                class="img-fluid" /></a>

                                        <figcaption class="category-name">
                                            <a href="#">Men Suit</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Products by Category Area End ==-->

    <!--== About Us Area Start ==-->
    <section id="aboutUs-area" style="background-color: #edeff2;" class="pt-9">
        <div class="ruby-container-about">
            <div class="row">
                <div class="col-lg-6">
                    <!-- About Image Area Start -->
                    <div class="about-image-wrap">
                        <a href="about.html"><img
                                src="https://ahphyay.com/images/6755ac63c37f0photo_2024-12-03_18-23-54.jpg"
                                alt="About Us" class="img-fluid" /></a>
                    </div>
                    <!-- About Image Area End -->
                </div>

                <div class="col-lg-6 m-auto">
                    <!-- About Text Area Start -->
                    <div class="about-content-wrap ml-0 ml-lg-5 mt-5 mt-lg-0">
                        <h2 class="fs-3 fs-md-2 fs-lg-1 fw-bold">About Us</h2>
                        <h3 class="fs-5 fs-md-4 fs-lg-3 fw-semibold">What is <span
                                style="color: #5e2207;">"AhPhyay"</span>?</h3>
                        <div class="about-text">
                            <p>
                                AhPhyay, established in 2016, is a socio-economic development organization committed to
                                overcoming social, economic, and organizational challenges through innovative,
                                progressive, professional, and academic means in the 21st century. <br>

                                <span class="about-content">Purpose-Driven Enterprise:</span> Establish a structured
                                social enterprise focused on
                                sustainability and social value. <br>

                                <span class="about-content">Eco-Friendly Craftsmanship:</span> Produce quality artisan
                                handcrafts that are environmentally
                                responsible and accessible to all. <br>

                                <span class="about-content">Job Creation & Skill Development:</span> Provide
                                professional growth and create job
                                opportunities in underserved communities. <br>

                                <span class="about-content">Empowering Entrepreneurs:</span> Support youth and women
                                through an intensive incubation
                                program, helping them start and scale their businesses.
                            </p>

                        </div>
                        <h3>How <span style="color: #5e2207;">"AhPhyay"</span> Can Help You?
                        </h3>
                        <div class="about-text">
                            <p>
                                <span class="about-content">Support Sustainable Choices:</span> We offer eco-friendly,
                                high-quality artisan products that
                                allow you to make responsible purchasing decisions while supporting environmental
                                sustainability. <br>

                                <span class="about-content">Empower Your Career:</span> Whether you're seeking
                                employment or professional growth, our
                                social enterprise model creates job opportunities and provides skill development to help
                                you thrive. <br>

                                <span class="about-content">Launch Your Business:</span> Through our intensive
                                incubation program, we empower youth and
                                women to turn their entrepreneurial dreams into reality with the tools, mentorship, and
                                resources needed to start and grow their own businesses.
                            </p>

                        </div>
                    </div>
                    <!-- About Text Area End -->
                </div>
            </div>
            <div class="row mt-2 mb-10">
                <div class="col-lg-12 mx-auto">
                    <div class="about-content-wrap">
                        <h3 class="fs-5 fs-md-4 fs-lg-3 fw-semibold mt-4">What benefits <span
                                style="color: #5e2207;">"AhPhyay"</span> Provides</h3>
                        <div class="about-text">
                            <p class="">
                                <span class="about-content">1. Sustainable, High-Quality Products:</span> By choosing
                                AhPhyay, you benefit from eco-friendly,
                                responsibly produced artisan goods, allowing you to support ethical consumption. <br>
                                <span class="about-content">2. Career Growth and Opportunities:</span> Our enterprise
                                provides you with access to job opportunities
                                and professional skill development, helping you advance in your career or acquire new
                                skills. <br>
                                <span class="about-content">3. Entrepreneurial Support:</span> If you're an aspiring
                                entrepreneur, we offer a comprehensive incubation
                                program that equips you with the knowledge, resources, and mentorship to successfully
                                start and
                                grow your own business
                            </p> <a href="about.html" class="btn btn-long-arrow">Learn More</a> <br> <br>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </section>
    <!--== About Us Area End ==-->



    <!--== FAQ Area Start ==-->
    <div class="faq-container">
        <div class="faq-header">
            <h1 class="faq-title">Frequently Asked Questions</h1>
            <p class="faq-subtitle">Find answers to common questions about our products, services, and policies</p>

            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" id="faqSearch" class="search-box"
                    placeholder="Search for questions or keywords...">
            </div>
        </div>

        <div class="categories-container">
            <button class="category-btn active" data-category="all">
                <i class="fas fa-star"></i> All FAQs
            </button>
            <button class="category-btn" data-category="orders">
                <i class="fas fa-shopping-cart"></i> Orders & Shipping
            </button>
            <button class="category-btn" data-category="payments">
                <i class="fas fa-credit-card"></i> Payments
            </button>
            <button class="category-btn" data-category="returns">
                <i class="fas fa-exchange-alt"></i> Returns & Refunds
            </button>
            <button class="category-btn" data-category="account">
                <i class="fas fa-user"></i> Account & Support
            </button>
            <button class="category-btn" data-category="products">
                <i class="fas fa-box"></i> Products & Stock
            </button>
            <button class="category-btn" data-category="blog">
                <i class="fas fa-newspaper"></i> Blog & Offers
            </button>
        </div>

        <div class="faq-content">
            <!-- Orders & Shipping -->
            <div class="faq-category" data-category="orders">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h2 class="category-title">Orders & Shipping</h2>
                </div>

                <div class="accordion" id="ordersAccordion">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                1. How do I place an order?
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#ordersAccordion">
                            <div class="accordion-body">
                                You can easily place an order by browsing our product categories, adding items to your
                                cart, and proceeding to checkout. You’ll need to provide your shipping address and
                                select a payment method.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2. Do you offer international shipping?
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#ordersAccordion">
                            <div class="accordion-body">
                                Currently, we only ship within Myanmar. We plan to expand our delivery coverage soon!
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3. How long will it take to receive my order?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#ordersAccordion">
                            <div class="accordion-body">
                                Standard delivery usually takes 2-5 business days depending on your location. You’ll
                                receive a tracking number once your order is dispatched.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                4. How can I track my order?
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#ordersAccordion">
                            <div class="accordion-body">
                                Once your order is shipped, we’ll send you an email or SMS with a tracking link so you
                                can follow your package in real-time.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payments -->
            <div class="faq-category" data-category="payments">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <h2 class="category-title">Payments</h2>
                </div>

                <div class="accordion" id="paymentsAccordion">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                5. What payment methods do you accept?
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#paymentsAccordion">
                            <div class="accordion-body">
                                We accept MPU cards, KBZ Pay, Wave Money, bank transfers, and cash on delivery (COD) in
                                selected locations.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                6. Is it safe to make payments on your website?
                            </button>
                        </h3>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#paymentsAccordion">
                            <div class="accordion-body">
                                Yes, our website uses SSL encryption and secure payment gateways to protect your
                                personal and payment information.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Returns & Refunds -->
            <div class="faq-category" data-category="returns">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <h2 class="category-title">Returns & Refunds</h2>
                </div>

                <div class="accordion" id="returnsAccordion">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingSeven">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                7. Can I return a product if I'm not satisfied?
                            </button>
                        </h3>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#returnsAccordion">
                            <div class="accordion-body">
                                Yes, we have a 7-day return policy. Products must be unused and in original packaging.
                                See our Return Policy page for more details.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                8. How do I get a refund?
                            </button>
                        </h3>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#returnsAccordion">
                            <div class="accordion-body">
                                Once we receive and inspect your returned item, we will process the refund within 3-7
                                business days. Refunds will be credited to your original payment method.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Account & Support -->
            <div class="faq-category" data-category="account">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <h2 class="category-title">Account & Support</h2>
                </div>

                <div class="accordion" id="accountAccordion">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingNine">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                9. Do I need an account to order?
                            </button>
                        </h3>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                            data-bs-parent="#accountAccordion">
                            <div class="accordion-body">
                                You can order as a guest, but creating an account allows you to view order history,
                                track shipments, and receive special offers.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                10. How do I reset my password?
                            </button>
                        </h3>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                            data-bs-parent="#accountAccordion">
                            <div class="accordion-body">
                                Click on "Forgot Password" on the login page and follow the instructions. You'll receive
                                a reset link via email.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingEleven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEleven" aria-expanded="false"
                                aria-controls="collapseEleven">
                                11. How can I contact customer service?
                            </button>
                        </h3>
                        <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                            data-bs-parent="#accountAccordion">
                            <div class="accordion-body">
                                You can reach us via:<br>
                                - Live Chat on the website<br>
                                - Email: support@ahphyay.com<br>
                                - Phone: +95 9 123 456 789
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products & Stock -->
            <div class="faq-category" data-category="products">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="fas fa-box"></i>
                    </div>
                    <h2 class="category-title">Products & Stock</h2>
                </div>

                <div class="accordion" id="productsAccordion">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingTwelve">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                                12. Are your products genuine?
                            </button>
                        </h3>
                        <div id="collapseTwelve" class="accordion-collapse collapse show"
                            aria-labelledby="headingTwelve" data-bs-parent="#productsAccordion">
                            <div class="accordion-body">
                                Yes, we source all our products from verified suppliers and trusted brands.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThirteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThirteen" aria-expanded="false"
                                aria-controls="collapseThirteen">
                                13. What if a product is out of stock?
                            </button>
                        </h3>
                        <div id="collapseThirteen" class="accordion-collapse collapse"
                            aria-labelledby="headingThirteen" data-bs-parent="#productsAccordion">
                            <div class="accordion-body">
                                You can click "Notify Me" on the product page to receive an alert once the item is back
                                in stock.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog & Offers -->
            <div class="faq-category" data-category="blog">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h2 class="category-title">Blog & Offers</h2>
                </div>

                <div class="accordion" id="blogAccordion">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFourteen">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFourteen" aria-expanded="true"
                                aria-controls="collapseFourteen">
                                14. How do I stay updated on promotions?
                            </button>
                        </h3>
                        <div id="collapseFourteen" class="accordion-collapse collapse show"
                            aria-labelledby="headingFourteen" data-bs-parent="#blogAccordion">
                            <div class="accordion-body">
                                Subscribe to our newsletter or follow us on Facebook to receive the latest offers,
                                product updates, and blog posts.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFifteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFifteen" aria-expanded="false"
                                aria-controls="collapseFifteen">
                                15. Can I contribute to the blog?
                            </button>
                        </h3>
                        <div id="collapseFifteen" class="accordion-collapse collapse"
                            aria-labelledby="headingFifteen" data-bs-parent="#blogAccordion">
                            <div class="accordion-body">
                                Yes! If you're a writer or expert, feel free to reach out to us via email at
                                blog@ahphyay.com for guest post opportunities.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="no-results" id="noResults">
            <i class="fas fa-search"></i>
            <h3>No Results Found</h3>
            <p>We couldn't find any FAQs matching your search. Try different keywords or browse by category.</p>
        </div>
    </div>
    <!--== FAQ Area End ==-->


    <!--== Testimonial Area Start ==-->
    <section id="testimonial-area">
        <div class="ruby-container-testi">
            <div class="testimonial-wrapper">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2>What People Say</h2>
                            <p>Testimonials</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <div class="testimonial-content-wrap">
                            <div id="testimonialCarousel" class="owl-carousel">
                                <div class="single-testimonial-item">
                                    <p>These guys have been absolutely outstanding. When I needed them they came through
                                        in
                                        a big way! I know that if you buy this theme, you'll get the one thing we all
                                        look
                                        for when we buy on Themeforest, and that's real support for the craziest of
                                        requests!</p>

                                    <h3 class="client-name">Luis Manrata</h3>
                                    <span class="client-email">you@email.here</span>
                                </div>

                                <div class="single-testimonial-item">
                                    <p>These guys have been absolutely outstanding. When I needed them they came through
                                        in
                                        a big way! I know that if you buy this theme, you'll get the one thing we all
                                        look
                                        for when we buy on Themeforest, and that's real support for the craziest of
                                        requests!</p>

                                    <h3 class="client-name">John Dibba</h3>
                                    <span class="client-email">you@email.here</span>
                                </div>

                                <div class="single-testimonial-item">
                                    <p>These guys have been absolutely outstanding. When I needed them they came through
                                        in
                                        a big way! I know that if you buy this theme, you'll get the one thing we all
                                        look
                                        for when we buy on Themeforest, and that's real support for the craziest of
                                        requests!</p>

                                    <h3 class="client-name">Alex Tuntuni</h3>
                                    <span class="client-email">you@email.here</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Testimonial Area End ==-->

    <!--== Blog Area Start ==-->
    <section id="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2>From Our Blog</h2>
                        <p>Share your latest posts or best articles will post here.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="blog-content-wrap">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!-- Single Blog Item Start -->
                        <div class="single-blog-wrap">
                            <figure class="blog-thumb">
                                <a href="single-blog.html"><img src="bootstrap/img/blog-thumb.jpg" alt="blog"
                                        class="img-fluid" /></a>
                                <figcaption class="blog-icon">
                                    <a href="single-blog.html"><i class="fa fa-file-image-o"></i></a>
                                </figcaption>
                            </figure>

                            <div class="blog-details">
                                <h3><a href="single-blog.html">Mirum est notare quam</a></h3>
                                <span class="post-date">20/June/2018</span>
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                    litterarum.</p>
                                <a href="single-blog.html" class="btn-long-arrow">Read More</a>
                            </div>
                        </div>
                        <!-- Single Blog Item End -->
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <!-- Single Blog Item Start -->
                        <div class="single-blog-wrap">
                            <figure class="blog-thumb">
                                <a href="single-blog.html"><img src="bootstrap/img/blog-thumb-2.jpg" alt="blog"
                                        class="img-fluid" /></a>
                                <figcaption class="blog-icon">
                                    <a href="single-blog.html"><i class="fa fa-file-image-o"></i></a>
                                </figcaption>
                            </figure>

                            <div class="blog-details">
                                <h3><a href="single-blog.html">Mirum est notare quam</a></h3>
                                <span class="post-date">20/June/2018</span>
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                    litterarum.</p>
                                <a href="single-blog.html" class="btn-long-arrow">Read More</a>
                            </div>
                        </div>
                        <!-- Single Blog Item End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Single Blog Item Start -->
                        <div class="single-blog-wrap">
                            <figure class="blog-thumb">
                                <a href="single-blog.html"><img src="bootstrap/img/blog-thumb-3.jpg" alt="blog"
                                        class="img-fluid" /></a>
                                <figcaption class="blog-icon">
                                    <a href="single-blog.html"><i class="fa fa-file-image-o"></i></a>
                                </figcaption>
                            </figure>

                            <div class="blog-details">
                                <h3><a href="single-blog.html">Mirum est notare quam</a></h3>
                                <span class="post-date">20/June/2018</span>
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                    litterarum.</p>
                                <a href="single-blog.html" class="btn-long-arrow">Read More</a>
                            </div>
                        </div>
                        <!-- Single Blog Item End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Blog Area End ==-->



    <!-- Footer Area Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 footer-section">
                    <div class="footer-logo">CompanyName</div>
                    <p class="footer-about">We are dedicated to providing the best service to our customers. Our
                        mission
                        is to create innovative solutions that make a difference in people's lives.</p>
                    <div class="social-links">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-section">
                    <h5>Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 footer-section">
                    <h5>Support</h5>
                    <ul class="footer-links">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Contact Support</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 footer-section">
                    <h5>Newsletter</h5>
                    <p class="footer-about">Subscribe to our newsletter for updates, news, and exclusive offers.</p>
                    <div class="footer-newsletter">
                        <input type="email" placeholder="Enter your email">
                        <button class="newsletter-btn">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <ul class="footer-bottom-links">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                </ul>
                <p>© 2024 CompanyName. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- Start All Modal Content -->
    <!--== Product Quick View Modal Area Wrap ==-->
    <div class="modal fade" id="quickView" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="bootstrap/img/cancel.png" alt="Close"
                            class="img-fluid" /></span>
                </button>
                <div class="modal-body">
                    <div class="quick-view-content single-product-page-content">
                        <div class="row">
                            <!-- Product Thumbnail Start -->
                            <div class="col-lg-5 col-md-6">
                                <div class="product-thumbnail-wrap">
                                    <div class="product-thumb-carousel owl-carousel">
                                        <div class="single-thumb-item">
                                            <a href="single-product.html"><img class="img-fluid"
                                                    src="bootstrap/img/single-pro-thumb.jpg" alt="Product" /></a>
                                        </div>

                                        <div class="single-thumb-item">
                                            <a href="single-product.html"><img class="img-fluid"
                                                    src="bootstrap/img/single-pro-thumb-2.jpg" alt="Product" /></a>
                                        </div>

                                        <div class="single-thumb-item">
                                            <a href="single-product.html"><img class="img-fluid"
                                                    src="bootstrap/img/single-pro-thumb-3.jpg" alt="Product" /></a>
                                        </div>

                                        <div class="single-thumb-item">
                                            <a href="single-product.html"><img class="img-fluid"
                                                    src="bootstrap/img/single-pro-thumb-4.jpg" alt="Product" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Thumbnail End -->

                            <!-- Product Details Start -->
                            <div class="col-lg-7 col-md-6 mt-5 mt-md-0">
                                <div class="product-details">
                                    <h2><a href="single-product.html">Crown Summit Backpack</a></h2>

                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                    <span class="price">$52.00</span>

                                    <div class="product-info-stock-sku">
                                        <span class="product-stock-status">In Stock</span>
                                        <span class="product-sku-status ml-5"><strong>SKU</strong> MH03</span>
                                    </div>

                                    <p class="products-desc">Ideal for cold-weathered training worked lorem ipsum
                                        outdoors,
                                        the Chaz Hoodie promises superior warmth with every wear. Thick material blocks
                                        out
                                        the wind as ribbed cuffs and bottom band seal in body heat Lorem ipsum dolor sit
                                        amet, consectetur adipisicing elit. Enim, reprehenderit.</p>
                                    <div class="shopping-option-item">
                                        <h4>Color</h4>
                                        <ul class="color-option-select d-flex">
                                            <li class="color-item black">
                                                <div class="color-hvr">
                                                    <span class="color-fill"></span>
                                                    <span class="color-name">Black</span>
                                                </div>
                                            </li>

                                            <li class="color-item green">
                                                <div class="color-hvr">
                                                    <span class="color-fill"></span>
                                                    <span class="color-name">green</span>
                                                </div>
                                            </li>

                                            <li class="color-item orange">
                                                <div class="color-hvr">
                                                    <span class="color-fill"></span>
                                                    <span class="color-name">Orange</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="product-quantity d-flex align-items-center">
                                        <div class="quantity-field">
                                            <label for="qty">Qty</label>
                                            <input type="number" id="qty" min="1" max="100"
                                                value="1" />
                                        </div>

                                        <a href="cart.html" class="btn btn-add-to-cart">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Details End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Product Quick View Modal Area End ==-->
    <!-- End All Modal Content -->

    <!-- Scroll to Top Start -->
    <a href="#" class="scrolltotop"><i class="fa fa-angle-up"></i></a>
    <!-- Scroll to Top End -->


    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="bootstrap/js/vendor/jquery-3.3.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="bootstrap/js/vendor/jquery-migrate-1.4.1.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="bootstrap/js/vendor/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="bootstrap/js/vendor/bootstrap.min.js"></script>
    <!--=== Plugins Min Js ===-->
    <script src="bootstrap/js/plugins.js"></script>

    <!--=== Active Js ===-->
    <script src="bootstrap/js/active.js"></script>
    <script src="bootstrap/js/custom.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>
