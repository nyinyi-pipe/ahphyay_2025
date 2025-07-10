@extends('landing')

@section('title')
    - Home
    
@endsection

@section('content')
    <!--== Banner // Slider Area Start ==-->
    <section id="banner-area">
        <div class="ruby-container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="banner-carousel" class="owl-carousel">
                        <!-- Banner Single Carousel Start -->
                        <div class="single-carousel-wrap slide-item-1" style="background-image: url({{ $banner_1->value ?? '' }});">
                            <div class="banner-caption text-center text-lg-left">
                                <h4 style="color: #5e2207;">Ngyan Store</h4>
                                <h3 class="h3-banner">Lorem ipsum dolor </h3>
                                <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                <a href="#" class="btn-long-arrow">Shop Now</a>
                            </div>
                        </div>
                        <!-- Banner Single Carousel End -->

                        <!-- Banner Single Carousel Start -->
                        <div class="single-carousel-wrap slide-item-2" style="background-image: url({{ $banner_2->value ?? '' }});">
                            <div class="banner-caption text-center text-lg-left">
                                <h4 style="color:#5e2207;">Ngyan Store</h4>
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
                                        <a href="#"><img src="bootstrap/img/jewellery-cat.jpg" alt="Men Category"
                                                class="img-fluid" /></a>

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
                        <a href="/about"><img src="{{ $about_img->value ?? '' }}"
                                alt="about-img" width="480" height="750" class="img-fluid" /></a>
                    </div>
                    <!-- About Image Area End -->
                </div>

                <div class="col-lg-6 m-auto">
                    <!-- About Text Area Start -->
                    <div class="about-content-wrap ml-0 ml-lg-5 mt-5 mt-lg-0">
                        <h2 class="fs-3 fs-md-2 fs-lg-1 fw-bold">About Us</h2>
                        <h3 class="fs-5 fs-md-4 fs-lg-3 fw-semibold">What is <span style="color: #5e2207;">"Ngyan"</span>?
                        </h3>
                        <div class="about-text">
                            <p>
                                Ngyan, established in 2016, is a socio-economic development organization committed to
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
                        <h3>How <span style="color: #5e2207;">"Ngyan"</span> Can Help You?
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
                                style="color: #5e2207;">"Ngyan"</span> Provides</h3>
                        <div class="about-text">
                            <p class="">
                                <span class="about-content">1. Sustainable, High-Quality Products:</span> By choosing
                                Ngyan, you benefit from eco-friendly,
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
                                - Email: support@Ngyan.com<br>
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
                                blog@Ngyan.com for guest post opportunities.
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
@endsection