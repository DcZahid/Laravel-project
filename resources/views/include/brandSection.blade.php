<section class="brand-one">
    <div class="brand-one__bg" style="background-image: url(assets/images/backgrounds/brand-v1-bg.png);">
    </div>
    <div class="container">
        <div class="thm-swiper__slider swiper-container"
            data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
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
                            "767": {
                                "spaceBetween": 30,
                                "slidesPerView": 3
                            },
                            "991": {
                                "spaceBetween": 30,
                                "slidesPerView": 4
                            },
                            "1199": {
                                "spaceBetween": 30,
                                "slidesPerView": 6
                            }
                        }}'>
            <div class="swiper-wrapper">
                @foreach ($brand as $b)
                    <div class="swiper-slide">
                        <div class="img-box">
                            <img src="{{asset('pictures/'. $b->photo) }}" alt="#">
                        </div>

                        <div class="img-box2">
                            <img src="{{asset('pictures/'. $b->photo2) }}" alt="#">
                        </div>
                    </div>
                @endforeach

                {{-- <div class="swiper-slide">
                    <div class="img-box">
                        <img src="assets/images/brand/brand-v1-img2.png" alt="#">
                    </div>

                    <div class="img-box2">
                        <img src="assets/images/brand/brand-v1-img8.png" alt="#">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="assets/images/brand/brand-v1-img3.png" alt="#">
                    </div>

                    <div class="img-box2">
                        <img src="assets/images/brand/brand-v1-img9.png" alt="#">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="assets/images/brand/brand-v1-img4.png" alt="#">
                    </div>

                    <div class="img-box2">
                        <img src="assets/images/brand/brand-v1-img10.png" alt="#">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="assets/images/brand/brand-v1-img5.png" alt="#">
                    </div>

                    <div class="img-box2">
                        <img src="assets/images/brand/brand-v1-img11.png" alt="#">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="assets/images/brand/brand-v1-img6.png" alt="#">
                    </div>

                    <div class="img-box2">
                        <img src="assets/images/brand/brand-v1-img12.png" alt="#">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="assets/images/brand/brand-v1-img1.png" alt="#">
                    </div>

                    <div class="img-box2">
                        <img src="assets/images/brand/brand-v1-img7.png" alt="#">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="assets/images/brand/brand-v1-img2.png" alt="#">
                    </div>

                    <div class="img-box2">
                        <img src="assets/images/brand/brand-v1-img8.png" alt="#">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="assets/images/brand/brand-v1-img3.png" alt="#">
                    </div>

                    <div class="img-box2">
                        <img src="assets/images/brand/brand-v1-img9.png" alt="#">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="assets/images/brand/brand-v1-img4.png" alt="#">
                    </div>

                    <div class="img-box2">
                        <img src="assets/images/brand/brand-v1-img10.png" alt="#">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="assets/images/brand/brand-v1-img5.png" alt="#">
                    </div>

                    <div class="img-box2">
                        <img src="assets/images/brand/brand-v1-img11.png" alt="#">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="assets/images/brand/brand-v1-img6.png" alt="#">
                    </div>

                    <div class="img-box2">
                        <img src="assets/images/brand/brand-v1-img12.png" alt="#">
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
