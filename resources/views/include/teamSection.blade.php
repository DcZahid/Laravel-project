<section class="team-one">
    <div class="auto-container">
        <div class="sec-title text-center">
            <div class="sec-title__tagline">
                <h6>Expert Member</h6>
            </div>
            <h2 class="sec-title__title">Dedicated Creative Team</h2>
        </div>
        <div class="row">
            @foreach ($team as $t)
            <!--Start Team One Single-->
            <div class="team-one__outer">
                    
                
                <div class="team-one__single wow fadeInUp" data-wow-delay=".3s">
                    <div class="team-one__single-img">
                        <img src="{{asset('pictures/'. $t->photo) }}" alt="#">
                    </div>

                    <div class="team-one__single-content">
                        <h2><a href="contact.html">{{$t->name}}</a></h2>
                        <p>{{$t->company}}</p>
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
            {{-- <div class="team-one__outer">
                <div class="team-one__single wow fadeInDown" data-wow-delay=".3s">
                    <div class="team-one__single-img">
                        <img src="assets/images/team/team-v1-img2.jpg" alt="#">
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
            </div> --}}
            <!--End Team One Single-->

            <!--Start Team One Single-->
            {{-- <div class="team-one__outer">
                <div class="team-one__single wow fadeInUp" data-wow-delay=".3s">
                    <div class="team-one__single-img">
                        <img src="assets/images/team/team-v1-img3.jpg" alt="#">
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
            </div> --}}
            <!--End Team One Single-->

            <!--Start Team One Single-->
            {{-- <div class="team-one__outer">
                <div class="team-one__single wow fadeInDown" data-wow-delay=".3s">
                    <div class="team-one__single-img">
                        <img src="assets/images/team/team-v1-img4.jpg" alt="#">
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
            </div> --}}
            <!--End Team One Single-->

            <!--Start Team One Single-->
            {{-- <div class="team-one__outer">
                <div class="team-one__single wow fadeInUp" data-wow-delay=".3s">
                    <div class="team-one__single-img">
                        <img src="assets/images/team/team-v1-img5.jpg" alt="#">
                    </div>

                    <div class="team-one__single-content">
                        <h2><a href="contact.html">Brian M. Schafer</a></h2>
                        <p>Manager</p>
                        <ul class="social-links">
                            <li><a href="#"><span class="icon-facebook-1"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin-big-logo"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            <!--End Team One Single-->
            @endforeach
        </div>
    </div>
</section>