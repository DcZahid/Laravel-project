<section class="services-one">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sec-title__tagline">
                <h6>Exclusive Service</h6>
            </div>
            <h2 class="sec-title__title">Explore Our Services</h2>
        </div>
        <div class="row">

            @foreach ($service as $t)
                <!--Start Services One Single-->
                <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="services-one__single">
                        <div class="services-one__single-bg"
                            style="background-image: url(assets/images/backgrounds/services-v1-single-bg.png);">
                        </div>
                        <div class="services-one__single-inner">
                            <div class="text-box">
                                <h2><a href="business-audit.html">{{ $t->title }}</a></h2>
                                <p>{{ $t->details }}</p>
                                <div class="btn-box">
                                    <a href="business-audit.html">{{ $t->btn }} <span
                                            class="icon-plus"></span></a>
                                </div>
                            </div>

                            <div class="icon-box"
                                style="background-image: url(assets/images/shapes/services-v1-shape1.png);">
                                <span class="{{ $t->class }}"></span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
