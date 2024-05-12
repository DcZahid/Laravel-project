@extends('layout')

@section('title')
    About
@endsection

@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>

        <div class="container">
            <div class="page-header__inner text-center">
                <h2>About us</h2>
                <div class="icon-box">
                    <span class="icon-right-arrow-1"></span>
                </div>
                <ul class="thm-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><span>-</span></li>
                    <li>About us</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="about-two">
        <div class="about-two__pattern" style="background-image: url(assets/images/pattern/about-v2-pattern.png);">
        </div>
        <div class="container">
            <div class="row">
                <!--Start About Two Img-->
                <div class="col-xl-6">
                    <div class="about-two__img clearfix">
                        <div class="about-two__img1">
                            <div class="shape1 float-bob-y"><img src="assets/images/shapes/about-v2-shape1.png"
                                    alt="#"></div>
                            <div class="inner">
                                <img src="assets/images/about/about-v2-img1.jpg" alt="#">
                            </div>
                        </div>
                        <div class="about-two__img2 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="3000ms">
                            <img src="assets/images/about/about-v2-img2.jpg" alt="#">
                        </div>
                    </div>
                </div>
                <!--End About Two Img-->

                <!--Start About Two Content-->
                <div class="col-xl-6">
                    <div class="about-two__content">
                        <div class="sec-title">
                            <div class="sec-title__tagline">
                                <h6>About Company</h6>
                            </div>
                            <h2 class="sec-title__title">Best Solutions Incredible <br> Business Success</h2>
                        </div>
                        <div class="about-two__content-text">
                            <p>Facilisis tempor aenean lectus elementum malsuada estibuls <br> magnis interdum eget
                                mattis pretium ulvinar </p>
                        </div>

                        <div class="about-two__counter">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="about-two__counter-single">
                                        <h2><span class="odometer" data-count="80">00</span> <span class="percent">%</span>
                                        </h2>
                                        <h3>Happy Customer</h3>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="about-two__counter-single">
                                        <h2><span class="odometer" data-count="2">00</span> <span class="k">k</span>
                                            <span class="plus">+</span>
                                        </h2>
                                        <h3>Project Completed</h3>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="about-two__content-list">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="about-two__content-list-single">
                                        <ul>
                                            <li>
                                                <p><span class="icon-check"></span> Making idea happens</p>
                                            </li>

                                            <li>
                                                <p><span class="icon-check"></span> Innovating every platform</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="about-two__content-list-single">
                                        <ul>
                                            <li>
                                                <p><span class="icon-check"></span> Nurturing business ideas</p>
                                            </li>

                                            <li>
                                                <p><span class="icon-check"></span> Experience full of trust</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-two__content-btn">
                            <a class="thm-btn style2" href="about.html">
                                <span class="txt">About company</span>
                                <i class="icon-plus-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--End About Two Content-->
            </div>
        </div>
    </section>
    <!--End About Two -->


    <!--Start Team One -->
    {{-- <section class="team-one team-one--about">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sec-title__tagline">
                    <h6>Expert Member</h6>
                </div>
                <h2 class="sec-title__title">Dedicated Creative Team</h2>
            </div>
            <div class="row">
                <!--Start Team One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="team-one__single wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-one__single-img">
                            <img src="assets/images/team/team-v1-img6.jpg" alt="#">
                        </div>

                        <div class="team-one__single-content">
                            <h2><a href="contact.html">Carlos L. Martin</a></h2>
                            <p>Founder</p>
                            <ul class="social-links">
                                <li><a href="#"><span class="icon-facebook-1"></span></a></li>
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                                <li><a href="#"><span class="icon-linkedin-big-logo"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Team One Single-->

                <!--Start Team One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="team-one__single wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-one__single-img">
                            <img src="assets/images/team/team-v1-img7.jpg" alt="#">
                        </div>

                        <div class="team-one__single-content">
                            <h2><a href="contact.html">Loraine R. Redy</a></h2>
                            <p>Co Founder</p>
                            <ul class="social-links">
                                <li><a href="#"><span class="icon-facebook-1"></span></a></li>
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                                <li><a href="#"><span class="icon-linkedin-big-logo"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Team One Single-->

                <!--Start Team One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="team-one__single wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-one__single-img">
                            <img src="assets/images/team/team-v1-img8.jpg" alt="#">
                        </div>

                        <div class="team-one__single-content">
                            <h2><a href="contact.html">Eddie C. Henley</a></h2>
                            <p>Consultant</p>
                            <ul class="social-links">
                                <li><a href="#"><span class="icon-facebook-1"></span></a></li>
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                                <li><a href="#"><span class="icon-linkedin-big-logo"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Team One Single-->

                <!--Start Team One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="team-one__single wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-one__single-img">
                            <img src="assets/images/team/team-v1-img9.jpg" alt="#">
                        </div>

                        <div class="team-one__single-content">
                            <h2><a href="contact.html">David S. French</a></h2>
                            <p>Designer</p>
                            <ul class="social-links">
                                <li><a href="#"><span class="icon-facebook-1"></span></a></li>
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                                <li><a href="#"><span class="icon-linkedin-big-logo"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Team One Single-->
            </div>
        </div>
    </section> --}}
    @include('include.teamSection')
    <!--End Team One -->

    <!--Start Working Process One -->
    <section class="working-process-one">
        <div class="shape2 float-bob-y"><img src="assets/images/shapes/working-process-v1-shape2.png" alt="#">
        </div>
        <div class="shape3"><img src="assets/images/shapes/working-process-v1-shape3.png" alt="#"></div>
        <div class="shape4 rotate-me"><img src="assets/images/shapes/working-process-v1-shape4.png" alt="#"></div>
        <div class="shape5 float-bob-y"><img src="assets/images/shapes/working-process-v1-shape5.png" alt="#">
        </div>
        <div class="working-process-one__pattern"
            style="background-image: url(assets/images/pattern/working-process-v1-pattern.png);"></div>
        <div class="container">
            <div class="sec-title text-center">
                <div class="sec-title__tagline">
                    <h6>Working Process</h6>
                </div>
                <h2 class="sec-title__title">Easy Way Get Service</h2>
            </div>
            <div class="row filter-layout masonary-layout">
                <!--Start Working Process One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="working-process-one__single text-center">
                        <div class="number-box"> 01 </div>
                        <div class="working-process-one__single-icon"
                            style="background-image: url(assets/images/shapes/working-process-v1-shape1.png);">
                            <span class="icon-learning"></span>
                        </div>

                        <div class="working-process-one__single-content">
                            <h3><a href="business-audit.html">Online Request</a></h3>
                            <p>Habitasse lacus ans imperdiet porttitor into hymenaeos eleifend tempo fringila nonum
                            </p>
                        </div>
                    </div>
                </div>
                <!--End Working Process One Single-->

                <!--Start Working Process One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="working-process-one__single mt30 text-center">
                        <div class="number-box"> 02 </div>
                        <div class="working-process-one__single-icon"
                            style="background-image: url(assets/images/shapes/working-process-v1-shape1.png);">
                            <span class="icon-advice"></span>
                        </div>

                        <div class="working-process-one__single-content">
                            <h3><a href="business-audit.html">Discuss Budget</a></h3>
                            <p>Habitasse lacus ans imperdiet porttitor into hymenaeos eleifend tempo fringila nonum
                            </p>
                        </div>
                    </div>
                </div>
                <!--End Working Process One Single-->

                <!--Start Working Process One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="working-process-one__single text-center">
                        <div class="number-box"> 03 </div>
                        <div class="working-process-one__single-icon"
                            style="background-image: url(assets/images/shapes/working-process-v1-shape1.png);">
                            <span class="icon-arm-wrestling"></span>
                        </div>

                        <div class="working-process-one__single-content">
                            <h3><a href="business-audit.html">Research Work</a></h3>
                            <p>Habitasse lacus ans imperdiet porttitor into hymenaeos eleifend tempo fringila nonum
                            </p>
                        </div>
                    </div>
                </div>
                <!--End Working Process One Single-->

                <!--Start Working Process One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="working-process-one__single mt30 text-center">
                        <div class="number-box"> 04 </div>
                        <div class="working-process-one__single-icon"
                            style="background-image: url(assets/images/shapes/working-process-v1-shape1.png);">
                            <span class="icon-focus-1"></span>
                        </div>

                        <div class="working-process-one__single-content">
                            <h3><a href="business-audit.html">Ready to Start</a></h3>
                            <p>Habitasse lacus ans imperdiet porttitor into hymenaeos eleifend tempo fringila nonum
                            </p>
                        </div>
                    </div>
                </div>
                <!--End Working Process One Single-->
            </div>
        </div>
    </section>
    <!--End Working Process One -->


    <!--Start Testimonials Two-->
    <section class="testimonials-two testimonials-two--about">
        <div class="container">
            <!--Start Testimonials Two Inner-->
            <div class="testimonials-two__inner">
                <div class="sec-title">
                    <div class="sec-title__tagline">
                        <h6>Testimonials</h6>
                    </div>
                    <h2 class="sec-title__title">Happy Clients Feedback <br> About Service</h2>
                </div>

                <div class="testimonials-two__img-box">
                    <ul class="testimonials-two__img-list">
                        <li>
                            <div class="testimonials-two__img-list-single">
                                <img src="assets/images/testimonial/testimonials-v2-img1.png" alt="#">
                            </div>
                        </li>

                        <li class="ml85 pb20">
                            <div class="testimonials-two__img-list-single">
                                <img src="assets/images/testimonial/testimonials-v2-img2.png" alt="#">
                            </div>
                        </li>

                        <li class="ml85">
                            <div class="testimonials-two__img-list-single">
                                <img src="assets/images/testimonial/testimonials-v2-img3.png" alt="#">
                            </div>
                        </li>

                        <li>
                            <div class="testimonials-two__img-list-single">
                                <img src="assets/images/testimonial/testimonials-v2-img4.png" alt="#">
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="testimonials-two__content">
                    <div class="shape1"><img src="assets/images/shapes/testimonials-v2-shape1.png" alt="#">
                    </div>

                    <div class="swiper-container thm-swiper__slider"
                        data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#testimonials-two__swiper-button-next",
                "prevEl": "#testimonials-two__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>

                        <div class="swiper-wrapper">

                            <!--Start Swiper Slide-->
                            <div class="swiper-slide">
                                <div class="testimonials-two__content-single">
                                    <div class="testimonials-two__content-single-inner">
                                        <div class="content-box">
                                            <p>Libero toriquent socise an turpis dapibus nunc pede duise
                                                justo vitaed mointe vehicula nisle proin quam praesent
                                                luictuse condimentum ornare and vehicula volutpat proiner
                                                netuse interdum consequat nesquie curabitur ametins lecitus
                                                to tristique sagittis iaculis commodo maurisa molestie</p>

                                            <div class="client-info">
                                                <div class="img-box">
                                                    <img src="assets/images/testimonial/testimonials-v2-img6.png"
                                                        alt="#">
                                                </div>

                                                <div class="title-box">
                                                    <h3>Barbara Jenkins</h3>
                                                    <p>Founder Of Good Sampark</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="img-box">
                                            <div class="inner">
                                                <img src="assets/images/testimonial/testimonials-v2-img5.png"
                                                    alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Swiper Slide-->

                            <!--Start Swiper Slide-->
                            <div class="swiper-slide">
                                <div class="testimonials-two__content-single">
                                    <div class="testimonials-two__content-single-inner">
                                        <div class="content-box">
                                            <p>Turpis Libero toriquent socise an dapibus nunc pede duise
                                                justo vitaed mointe vehicula nisle proin quam praesent
                                                luictuse condimentum ornare and vehicula volutpat proiner
                                                netuse interdum consequat nesquie curabitur ametins lecitus
                                                to tristique sagittis iaculis commodo maurisa molestie</p>

                                            <div class="client-info">
                                                <div class="img-box">
                                                    <img src="assets/images/testimonial/testimonials-v2-img6.png"
                                                        alt="#">
                                                </div>

                                                <div class="title-box">
                                                    <h3>Barbara Jenkins</h3>
                                                    <p>Founder Of Good Sampark</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="img-box">
                                            <div class="inner">
                                                <img src="assets/images/testimonial/testimonials-v2-img7.jpg"
                                                    alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Swiper Slide-->

                            <!--Start Swiper Slide-->
                            <div class="swiper-slide">
                                <div class="testimonials-two__content-single">
                                    <div class="testimonials-two__content-single-inner">
                                        <div class="content-box">
                                            <p>Volutpat proiner netuse interdum consequat nesquie curabitur Libero
                                                toriquent socise an turpis dapibus nunc pede duise justo vitaed
                                                mointe vehicula nisle
                                                proin quam praesent luictuse condimentum ornare and vehicula ametins
                                                lecitus to tristique sagittis iaculis commodo maurisa molestie</p>

                                            <div class="client-info">
                                                <div class="img-box">
                                                    <img src="assets/images/testimonial/testimonials-v2-img6.png"
                                                        alt="#">
                                                </div>

                                                <div class="title-box">
                                                    <h3>Barbara Jenkins</h3>
                                                    <p>Founder Of Good Sampark</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="img-box">
                                            <div class="inner">
                                                <img src="assets/images/testimonial/testimonials-v2-img8.jpg"
                                                    alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Swiper Slide-->

                            <!--Start Swiper Slide-->
                            <div class="swiper-slide">
                                <div class="testimonials-two__content-single">
                                    <div class="testimonials-two__content-single-inner">
                                        <div class="content-box">
                                            <p>Socise an turpis dapibus Libero toriquent nunc pede duise
                                                justo vitaed mointe vehicula nisle proin quam praesent
                                                luictuse condimentum ornare and vehicula volutpat proiner
                                                netuse interdum consequat nesquie curabitur ametins lecitus
                                                to tristique sagittis iaculis commodo maurisa molestie</p>

                                            <div class="client-info">
                                                <div class="img-box">
                                                    <img src="assets/images/testimonial/testimonials-v2-img6.png"
                                                        alt="#">
                                                </div>

                                                <div class="title-box">
                                                    <h3>Barbara Jenkins</h3>
                                                    <p>Founder Of Good Sampark</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="img-box">
                                            <div class="inner">
                                                <img src="assets/images/testimonial/testimonials-v2-img9.jpg"
                                                    alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Swiper Slide-->

                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="testimonials-two__nav">
                            <div class="swiper-button-prev" id="testimonials-two__swiper-button-next">
                                <i class="icon-back"></i>
                            </div>
                            <div class="swiper-button-next" id="testimonials-two__swiper-button-prev">
                                <i class="icon-back"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--End Testimonials Two Inner-->
        </div>
    </section>
    <!--End Testimonials Two-->


    <!--Start Brand Two-->
    <section class="brand-two brand-two--about">
        <div class="brand-two--about__pattern"
            style="background-image: url(assets/images/pattern/brand-v2-about-pattern.png);"></div>
        <div class="container">
            <div class="sec-title text-center">
                <div class="sec-title__tagline">
                    <h6>Exclusive Service</h6>
                </div>
                <h2 class="sec-title__title">Worldwide Trusted Clients</h2>
            </div>
            <div class="thm-swiper__slider swiper-container"
                data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": {       "delay": 5000 }, "breakpoints": {
                            "0": {
                                "spaceBetween": 30,
                                "slidesPerView": 1
                            },
                            "375": {
                                "spaceBetween": 30,
                                "slidesPerView": 1
                            },
                            "575": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "768": {
                                "spaceBetween": 30,
                                "slidesPerView": 3
                            },
                            "992": {
                                "spaceBetween": 30,
                                "slidesPerView": 4
                            },
                            "1199": {
                                "spaceBetween": 30,
                                "slidesPerView": 6
                            }
                        }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="img-box">
                            <img src="assets/images/brand/brand-v2-img1.png" alt="#">
                        </div>

                        <div class="img-box2">
                            <img src="assets/images/brand/brand-v2-img7.png" alt="#">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="img-box">
                            <img src="assets/images/brand/brand-v2-img2.png" alt="#">
                        </div>

                        <div class="img-box2">
                            <img src="assets/images/brand/brand-v2-img8.png" alt="#">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="img-box">
                            <img src="assets/images/brand/brand-v2-img3.png" alt="#">
                        </div>

                        <div class="img-box2">
                            <img src="assets/images/brand/brand-v2-img9.png" alt="#">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="img-box">
                            <img src="assets/images/brand/brand-v2-img4.png" alt="#">
                        </div>

                        <div class="img-box2">
                            <img src="assets/images/brand/brand-v2-img10.png" alt="#">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="img-box">
                            <img src="assets/images/brand/brand-v2-img5.png" alt="#">
                        </div>

                        <div class="img-box2">
                            <img src="assets/images/brand/brand-v2-img11.png" alt="#">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="img-box">
                            <img src="assets/images/brand/brand-v2-img6.png" alt="#">
                        </div>

                        <div class="img-box2">
                            <img src="assets/images/brand/brand-v2-img12.png" alt="#">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="img-box">
                            <img src="assets/images/brand/brand-v2-img1.png" alt="#">
                        </div>

                        <div class="img-box2">
                            <img src="assets/images/brand/brand-v2-img7.png" alt="#">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="img-box">
                            <img src="assets/images/brand/brand-v2-img2.png" alt="#">
                        </div>

                        <div class="img-box2">
                            <img src="assets/images/brand/brand-v2-img8.png" alt="#">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="img-box">
                            <img src="assets/images/brand/brand-v2-img3.png" alt="#">
                        </div>

                        <div class="img-box2">
                            <img src="assets/images/brand/brand-v2-img9.png" alt="#">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="img-box">
                            <img src="assets/images/brand/brand-v2-img4.png" alt="#">
                        </div>

                        <div class="img-box2">
                            <img src="assets/images/brand/brand-v2-img10.png" alt="#">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="img-box">
                            <img src="assets/images/brand/brand-v2-img5.png" alt="#">
                        </div>

                        <div class="img-box2">
                            <img src="assets/images/brand/brand-v2-img11.png" alt="#">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="img-box">
                            <img src="assets/images/brand/brand-v2-img6.png" alt="#">
                        </div>

                        <div class="img-box2">
                            <img src="assets/images/brand/brand-v2-img12.png" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brand Two -->

    <!--Start Blog Two -->
    <section class="blog-two">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sec-title__tagline">
                    <h6>Latest Story</h6>
                </div>
                <h2 class="sec-title__title">Every Articles from Blog</h2>
            </div>
            <div class="row">
                <!--Start Blog Two Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="blog-two__single">
                        <div class="blog-two__single-img">
                            <div class="blog-two__single-img-inner">
                                <img src="assets/images/blog/blog-v2-img1.jpg" alt="#">
                            </div>
                            <div class="overlay-text">
                                <span>creative</span>
                            </div>
                        </div>

                        <div class="blog-two__single-content">
                            <p>by: david - <span>Dec 30, 2023</span></p>
                            <h2><a href="blog-details.html">Luctus iaculis maecenas arcu habitasse ridiculus</a>
                            </h2>
                            <div class="btn-box">
                                <a href="blog-details.html">continue reading <span class="icon-plus-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Blog Two Single-->

                <!--Start Blog Two Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="blog-two__single">
                        <div class="blog-two__single-img">
                            <div class="blog-two__single-img-inner">
                                <img src="assets/images/blog/blog-v2-img2.jpg" alt="#">
                            </div>
                            <div class="overlay-text">
                                <span>business</span>
                            </div>
                        </div>

                        <div class="blog-two__single-content">
                            <p>by: david - <span>Dec 30, 2023</span></p>
                            <h2><a href="blog-details.html">Habitant accum dapibus felis bibendum aliquam</a></h2>
                            <div class="btn-box">
                                <a href="blog-details.html">continue reading <span class="icon-plus-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Blog Two Single-->

                <!--Start Blog Two Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="blog-two__single">
                        <div class="blog-two__single-img">
                            <div class="blog-two__single-img-inner">
                                <img src="assets/images/blog/blog-v2-img3.jpg" alt="#">
                            </div>
                            <div class="overlay-text">
                                <span>finance</span>
                            </div>
                        </div>

                        <div class="blog-two__single-content">
                            <p>by: david - <span>Dec 30, 2023</span></p>
                            <h2><a href="blog-details.html">Auctor purus quisque augue gravida in habitas</a></h2>
                            <div class="btn-box">
                                <a href="blog-details.html">continue reading <span class="icon-plus-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Blog Two Single-->

                <!--Start Blog Two Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                    data-wow-duration="1000ms">
                    <div class="blog-two__single">
                        <div class="blog-two__single-img">
                            <div class="blog-two__single-img-inner">
                                <img src="assets/images/blog/blog-v2-img4.jpg" alt="#">
                            </div>
                            <div class="overlay-text">
                                <span>statistics</span>
                            </div>
                        </div>

                        <div class="blog-two__single-content">
                            <p>by: david - <span>Dec 30, 2023</span></p>
                            <h2><a href="blog-details.html">Potenti antular montes etiam lacinia nulla aliquam</a>
                            </h2>
                            <div class="btn-box">
                                <a href="blog-details.html">continue reading <span class="icon-plus-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Blog Two Single-->
            </div>
        </div>
    </section>
@endsection