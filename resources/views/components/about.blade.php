@extends('landing')
@section('title')
    - About
@endsection
@section('content')
    @include('components.bread-crumb-landing', ['title' => 'About', 'route' => 'about'])
    <!--== About Us Area Start ==-->
    <section id="aboutUs-area" style="background-color: #edeff2;" class="pt-9">
        <div class="ruby-container-about">
            <div class="row">
                <div class="col-lg-6">
                    <!-- About Image Area Start -->
                    <div class="about-image-wrap">
                        <a href="/about"><img src="{{ $about_img ?? '' }}"
                                alt="About Us" width="500" height="800" class="img-fluid" /></a>
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

    
@endsection
