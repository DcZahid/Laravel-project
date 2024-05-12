<section class="main-slider main-slider-one">
    <div class="swiper-container thm-swiper__slider"
        data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>
        <div class="swiper-wrapper">
            @foreach ($slider as $s)
                <!--Start Main Slider One-->
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image:url({{asset('pictures/'. $s->photo) }})">
                    </div>

                    <div class="container">
                        <div class="main-slider-one__content text-center">
                            <div class="title">
                                <h2>{{$s->title}}</h2>
                            </div>
                            <div class="text">
                                <p>{{$s->details}}</p>
                            </div>

                            <div class="main-slider-one__content-btn">
                                <div class="btn-one">
                                    <a class="thm-btn" href="contact.html">
                                        <span class="txt">{{$s->btn}}</span>
                                        <i class="icon-plus-1"></i>
                                    </a>
                                </div>

                                <div class="btn-two">
                                    <a class="thm-btn" href="contact.html">
                                        <span class="txt">{{$s->btn2}}</span>
                                        <i class="icon-plus-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--End Main Slider One-->

            <!--Start Main Slider One-->
            {{-- <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image:url(assets/images/slides/slider-v1-img2.jpg)">
                </div>

                <div class="container">
                    <div class="main-slider-one__content text-center">
                        <div class="title">
                            <h2>Creating Business <br> with Authentic Integrity</h2>
                        </div>
                        <div class="text">
                            <p>Class tristique sagittis natoque tincidunt semper risus montes mauris
                                pellentesque in <br> aenean lorem quis mauris proin untrupt aptent fames</p>
                        </div>

                        <div class="main-slider-one__content-btn">
                            <div class="btn-one">
                                <a class="thm-btn" href="contact.html">
                                    <span class="txt">Explore service</span>
                                    <i class="icon-plus-1"></i>
                                </a>
                            </div>

                            <div class="btn-two">
                                <a class="thm-btn" href="contact.html">
                                    <span class="txt">contact us</span>
                                    <i class="icon-plus-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!--End Main Slider One-->

            <!--Start Main Slider One-->
            {{-- <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image:url(assets/images/slides/slider-v1-img3.jpg)">
                </div>

                <div class="container">
                    <div class="main-slider-one__content text-center">
                        <div class="title">
                            <h2>Creating Business <br> with Authentic Integrity</h2>
                        </div>
                        <div class="text">
                            <p>Class tristique sagittis natoque tincidunt semper risus montes mauris
                                pellentesque in <br> aenean lorem quis mauris proin untrupt aptent fames</p>
                        </div>

                        <div class="main-slider-one__content-btn">
                            <div class="btn-one">
                                <a class="thm-btn" href="contact.html">
                                    <span class="txt">Explore service</span>
                                    <i class="icon-plus-1"></i>
                                </a>
                            </div>

                            <div class="btn-two">
                                <a class="thm-btn" href="contact.html">
                                    <span class="txt">contact us</span>
                                    <i class="icon-plus-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!--End Main Slider One-->

        </div>

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-back"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-back"></i>
            </div>
        </div>

    </div>
</section>
