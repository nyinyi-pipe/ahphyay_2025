<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>Ngyan @yield('title')</title>

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
    
</head>

<body>

    @include('components.header')
    @yield('content')
    @include('components.footer',['company_name' => $company_name ?? ''])


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
    <script src="bootstrap/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="bootstrap/js/vendor/bootstrap.min.js"></script>
    <!--=== Plugins Min Js ===-->
    <script src="bootstrap/js/plugins.js"></script>

    <!--=== Active Js ===-->
    <script src="bootstrap/js/active.js"></script>
    <script src="bootstrap/js/custom.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @script('script')


</body>

</html>
