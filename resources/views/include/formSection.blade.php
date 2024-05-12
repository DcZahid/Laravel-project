<section class="contact-one">
    <div class="container">
        <div class="row">
            <!--Start Contact One Img-->
            <div class="col-xl-6">
                <div class="contact-one__img clearfix">
                    <div class="contact-one__img1">
                        <div class="shape1 float-bob-y"><img src="assets/images/shapes/contact-v1-shape1.png"
                                alt="#"></div>
                        <div class="inner">
                            <img src="assets/images/resources/contact-v1-img1.jpg" alt="#">
                        </div>
                    </div>
                    <div class="contact-one__img2 wow fadeInLeft" data-wow-delay="100ms"
                        data-wow-duration="1500ms">
                        <img src="assets/images/resources/contact-v1-img2.jpg" alt="#">
                    </div>
                </div>
            </div>
            <!--End Contact One Img-->

            <!--Start Contact One Form-->
            <div class="col-xl-6">
                <div class="contact-one__form">

                    <div class="sec-title">
                        <div class="sec-title__tagline">
                            <h6>Get In Touch</h6>
                        </div>
                        <h2 class="sec-title__title">Delivering Best Solutions <br> For Happy Client</h2>
                    </div>

                    <form id="contact-form" 
                        action="{{route('contact.store')}}"
                         method="post">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input-box">
                                    <input type="text" name="name" value="" placeholder="NAME *"
                                        required="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input-box">
                                    <input type="email" name="email" value=""
                                        placeholder="EMAIL *" required="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input-box">
                                    <input type="text" placeholder="PHONE *" name="phone">
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input-box">
                                    <input type="text" placeholder="SUBJECT *" name="subject">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="input-box">
                                    <textarea name="message" placeholder="WRITE YOUR MESSAGE *"></textarea>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-one__form-btn">
                                    <button class="thm-btn" type="submit"
                                        data-loading-text="Please wait...">
                                        <span class="txt">send message</span>
                                        <i class="icon-plus-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--End Contact One Form-->
        </div>
    </div>
</section>