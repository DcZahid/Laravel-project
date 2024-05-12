<section class="feature-one">
    <div class="shape1"><img src="assets/images/shapes/feature-v1-shape3.png" alt="#"></div>
    <div class="shape2 float-bob-y"><img src="assets/images/shapes/feature-v1-shape4.png" alt="#">
    </div>
    <div class="shape3"><img src="assets/images/shapes/feature-v1-shape5.png" alt="#"></div>
    <div class="shape4 rotate-me"><img src="assets/images/shapes/feature-v1-shape6.png" alt="#"></div>
    <div class="shape5 float-bob-y"><img src="assets/images/shapes/feature-v1-shape4.png" alt="#">
    </div>
    <div class="container">
        <div class="row">
            <!--Start Feature One Content-->
            <div class="col-xl-6">
                <div class="feature-one__content">
                    <div class="sec-title">
                        <div class="sec-title__tagline">
                            <h6>{{ $feature->title }}</h6>
                        </div>
                        <h2 class="sec-title__title">{{ $feature->title1 }}</h2>
                    </div>

                    <div class="feature-one__content-text">
                        <p>{{ $feature->details }}</p>
                    </div>

                    <ul class="feature-one__content-list">
                        <li>
                            <p><span class="icon-check"></span>{{ $feature->span }}</p>
                        </li>

                        <li>
                            <p><span class="icon-check"></span>{{ $feature->span1 }}</p>
                        </li>

                        <li>
                            <p><span class="icon-check"></span>{{ $feature->span2 }}</p>
                        </li>

                        <li>
                            <p><span class="icon-check"></span> {{ $feature->span3 }}</p>
                        </li>
                    </ul>

                    <div class="btn-box">
                        <a class="thm-btn" href="about.html">
                            <span class="txt">{{ $feature->btn }}</span>
                            <i class="icon-plus-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!--End Feature One Content-->


            <!--Start Feature One Right-->
            <div class="col-xl-6">
                <div class="feature-one__right">
                    <div class="row filter-layout masonary-layout">
                        @foreach ($fblock as $f)
                            <!--Start Feature One Right Single-->
                            <div class="col-xl-6 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="feature-one__right-single">
                                    <div class="feature-one__right-single-bg"
                                        style="background-image: url(assets/images/shapes/feature-v1-shape2.png);">
                                    </div>
                                    <div class="icon-box"
                                        style="background-image: url(assets/images/shapes/feature-v1-shape1.png);">
                                        <span class="{{$f->icon }}"></span>
                                    </div>
                                    <div class="text-box">
                                        <h2><a href="business-audit.html">{{$f->title }}</a></h2>
                                        <p>{{$f->details }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!--End Feature One Right Single-->

                        <!--Start Feature One Right Single-->
                        {{-- <div class="col-xl-6 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.2s">
                            <div class="feature-one__right-single mt30">
                                <div class="feature-one__right-single-bg"
                                    style="background-image: url(assets/images/shapes/feature-v1-shape2.png);">
                                </div>
                                <div class="icon-box"
                                    style="background-image: url(assets/images/shapes/feature-v1-shape1.png);">
                                    <span class="icon-focus-1"></span>
                                </div>
                                <div class="text-box">
                                    <h2><a href="business-audit.html">Focuse Expertise</a></h2>
                                    <p>Habitasse lacus ans imperdiet porttitor in hymenaeos eleifend tempor
                                        fringilla
                                        nonum</p>
                                </div>
                            </div>
                        </div> --}}
                        <!--End Feature One Right Single-->

                        <!--Start Feature One Right Single-->
                        {{-- <div class="col-xl-6 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                            <div class="feature-one__right-single">
                                <div class="feature-one__right-single-bg"
                                    style="background-image: url(assets/images/shapes/feature-v1-shape2.png);">
                                </div>
                                <div class="icon-box"
                                    style="background-image: url(assets/images/shapes/feature-v1-shape1.png);">
                                    <span class="icon-coaching"></span>
                                </div>
                                <div class="text-box">
                                    <h2><a href="business-audit.html">Specialize Team</a></h2>
                                    <p>Habitasse lacus ans imperdiet porttitor in hymenaeos eleifend tempor
                                        fringilla
                                        nonum</p>
                                </div>
                            </div>
                        </div> --}}
                        <!--End Feature One Right Single-->

                        <!--Start Feature One Right Single-->
                        {{-- <div class="col-xl-6 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.4s">
                            <div class="feature-one__right-single">
                                <div class="feature-one__right-single-bg"
                                    style="background-image: url(assets/images/shapes/feature-v1-shape2.png);">
                                </div>
                                <div class="icon-box"
                                    style="background-image: url(assets/images/shapes/feature-v1-shape1.png);">
                                    <span class="icon-presentation"></span>
                                </div>
                                <div class="text-box">
                                    <h2><a href="business-audit.html">Data Analytics</a></h2>
                                    <p>Habitasse lacus ans imperdiet porttitor in hymenaeos eleifend tempor
                                        fringilla
                                        nonum</p>
                                </div>
                            </div>
                        </div> --}}
                        <!--End Feature One Right Single-->
                    </div>
                </div>
            </div>
            <!--End Feature One Right-->
        </div>
    </div>
</section>
