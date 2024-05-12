<section class="blog-one">
    <div class="blog-one__bg" style="background-image: url(assets/images/backgrounds/blog-v1-bg.png);"></div>
    <div class="container">
        <div class="sec-title text-center">
            <div class="sec-title__tagline">
                <h6>Latest Articles</h6>
            </div>
            <h2 class="sec-title__title">Every Update From Blog</h2>
        </div>
        <div class="row">
            @foreach ($blog as $b)
                
            
            <!--Start Blog One Single-->
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                <div class="blog-one__single">
                    <div class="blog-one__single-img">
                        <img src="{{asset('pictures/'. $b->photo) }}" alt="#">
                    </div>

                    <div class="blog-one__single-content">
                        <p>{{$b->date}}</span></p>
                        <h2><a href="{{url('blogdetails')}}">{{$b->details}}</a></h2>
                        <div class="btn-box">
                            <a href="blog-details.html">{{$b->btn}} <span class="icon-plus-1"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!--End Blog One Single-->

            <!--Start Blog One Single-->
            {{-- <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                <div class="blog-one__single">
                    <div class="blog-one__single-img">
                        <img src="assets/images/blog/blog-v1-img2.jpg" alt="#">
                    </div>

                    <div class="blog-one__single-content">
                        <p>startup - <span>Dec 30, 2023</span></p>
                        <h2><a href="blog-details.html">Habitant accum dapibus felis enim bibendum
                                aliquam ligula tempor</a></h2>
                        <div class="btn-box">
                            <a href="blog-details.html">read more <span class="icon-plus-1"></span></a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!--End Blog One Single-->

            <!--Start Blog One Single-->
            {{-- <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                <div class="blog-one__single">
                    <div class="blog-one__single-img">
                        <img src="assets/images/blog/blog-v1-img3.jpg" alt="#">
                    </div>

                    <div class="blog-one__single-content">
                        <p>creative - <span>Dec 30, 2023</span></p>
                        <h2><a href="blog-details.html">Dictumst sceler pentibus lectus egestas antena
                                pulvinar sapien nonapan</a></h2>
                        <div class="btn-box">
                            <a href="blog-details.html">read more <span class="icon-plus-1"></span></a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!--End Blog One Single-->
        </div>
    </div>
</section>