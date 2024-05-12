@extends('blog.blogLayout')

@section('blog.blogcontent')
    <!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
    </div>

    <div class="container">
        <div class="page-header__inner text-center">
            <h2>Our Blog</h2>
            <div class="icon-box">
                <span class="icon-right-arrow-1"></span>
            </div>
            <ul class="thm-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><span>-</span></li>
                <li>Our Blog</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->



<!--Start Blog Page-->
<section class="blog-page">
    <div class="container">
        <div class="row">
            <!--Start Blog Page Content-->
            <div class="col-xl-8">
                <div class="blog-page__content">
                    <!--Start Blog Page Content Single-->
                    <div class="blog-page__content-single">
                        <div class="blog-page__content-single-img">
                            <div class="inner">
                                <img src="assets/images/blog/blog-page-img1.jpg" alt="#">
                            </div>
                        </div>

                        <div class="blog-page__content-single-content">
                            <p><span>Finance</span> - Dec 30, 2022 - (02) Comment</p>
                            <h2><a href="blog-details.html">Ridiculus ultrices phasus acumsan class tempor <br>
                                    conubia tempors
                                    nullam</a></h2>
                            <div class="btn-box">
                                <a href="blog-details.html">read more <span class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--End Blog Page Content Single-->

                    <!--Start Blog Page Content Single-->
                    <div class="blog-page__content-single">
                        <div class="blog-page__content-single-img">
                            <div class="inner">
                                <img src="assets/images/blog/blog-page-img2.jpg" alt="#">
                            </div>
                        </div>

                        <div class="blog-page__content-single-content">
                            <p><span>business</span> - Dec 30, 2022 - (02) Comment</p>
                            <h2><a href="blog-details.html">Fusce maecenas ante felis rhoncus donec tortor <br>
                                    morbilace mauris
                                    tempus</a></h2>
                            <div class="btn-box">
                                <a href="blog-details.html">read more <span class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--End Blog Page Content Single-->

                    <!--Start Blog Page Content Single-->
                    <div class="blog-page__content-single video">
                        <div class="blog-page__content-single-img">
                            <div class="inner">
                                <img src="assets/images/blog/blog-page-img3.jpg" alt="#">
                                <div class="blog-page-video__icon">
                                    <a href="https://www.youtube.com/watch?v=pVE92TNDwUk"
                                        class="blog-page-video__btn video-popup">
                                        <span class="icon-play1"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-page__content-single-content">
                            <p><span>corporate</span> - Dec 30, 2022 - (02) Comment</p>
                            <h2><a href="blog-details.html">Dolor mollis adipiscing scelerisque nunc felis <br>
                                    nostra Iaculis
                                    ligula tellus</a></h2>
                            <div class="btn-box">
                                <a href="blog-details.html">read more <span class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--End Blog Page Content Single-->

                    <!--Start Blog Page Content Single-->
                    <div class="blog-page__content-single style2">
                        <div class="blog-page__content-single-img-outer">
                            <div class="owl-carousel owl-theme thm-owl__carousel blog-page__content-single-img-carousel"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": true,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-back\"></span>","<span class=\"icon-back\"></span>"],
                                "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 1
                                        },
                                        "992": {
                                            "items": 1
                                        },
                                        "1200": {
                                            "items": 1
                                        }
                                    }
                                }'>

                                <div class="blog-page__content-single-img">
                                    <div class="inner">
                                        <img src="assets/images/blog/blog-page-img4.jpg" alt="#">
                                    </div>
                                </div>

                                <div class="blog-page__content-single-img">
                                    <div class="inner">
                                        <img src="assets/images/blog/blog-page-img3.jpg" alt="#">
                                    </div>
                                </div>

                                <div class="blog-page__content-single-img">
                                    <div class="inner">
                                        <img src="assets/images/blog/blog-page-img2.jpg" alt="#">
                                    </div>
                                </div>

                                <div class="blog-page__content-single-img">
                                    <div class="inner">
                                        <img src="assets/images/blog/blog-page-img1.jpg" alt="#">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="blog-page__content-single-content">
                            <p><span>Finance</span> - Dec 30, 2022 - (02) Comment</p>
                            <h2><a href="blog-details.html">Fames porta mole congue mollis integer elite <br>
                                    eleifend ante
                                    maecenas</a></h2>
                            <div class="btn-box">
                                <a href="blog-details.html">read more <span class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--End Blog Page Content Single-->

                    <!--Start Blog Page Content Single-->
                    <div class="blog-page__content-single">
                        <div class="blog-page__content-single-img">
                            <div class="inner">
                                <img src="assets/images/blog/blog-page-img5.jpg" alt="#">
                            </div>
                        </div>

                        <div class="blog-page__content-single-content">
                            <p><span>Finance</span> - Dec 30, 2022 - (02) Comment</p>
                            <h2><a href="blog-details.html">Imperdiet laoreet tempus non aliquet etiam <br>
                                    ultricies semper
                                    viverra leo</a></h2>
                            <div class="btn-box">
                                <a href="blog-details.html">read more <span class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--End Blog Page Content Single-->

                </div>
            </div>
            <!--End Blog Page Content-->


            <!--Start Sidebar-->
            <div class="col-xl-4">
                <div class="sidebar">
                    <!--Start Sidebar Single-->
                    <div class="sidebar-single sidebar__search wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="sidebar__bg"
                            style="background-image: url(assets/images/backgrounds/sidebar-bg1.png);"></div>
                        <div class="title-box">
                            <h2>Search</h2>
                        </div>
                        <form action="#" class="sidebar__search-form">
                            <input type="search" placeholder="SEARCH...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!--End Sidebar Single-->

                    <!--Start Sidebar Single-->
                    <div class="sidebar-single sidebar__category wow animated fadeInUp" data-wow-delay="0.2s">
                        <div class="sidebar__bg"
                            style="background-image: url(assets/images/backgrounds/sidebar-bg2.png);"></div>
                        <div class="title-box">
                            <h2>Category</h2>
                        </div>

                        <ul class="sidebar__category-list">
                            <li>
                                <a href="#"> Experience <span>08</span></a>
                            </li>

                            <li>
                                <a href="#"> Business Audit <span>12</span></a>
                            </li>

                            <li>
                                <a href="#"> Economy <span>05</span></a>
                            </li>

                            <li>
                                <a href="#"> Investments <span>15</span></a>
                            </li>

                            <li>
                                <a href="#"> Consultation <span>08</span></a>
                            </li>

                            <li>
                                <a href="#"> Corporate <span>12</span></a>
                            </li>

                        </ul>
                    </div>
                    <!--End Sidebar Single-->

                    <!--Start Sidebar Single-->
                    <div class="sidebar-single sidebar__recent-post wow animated fadeInUp"
                        data-wow-delay="0.3s">
                        <div class="sidebar__bg"
                            style="background-image: url(assets/images/backgrounds/sidebar-bg2.png);"></div>
                        <div class="title-box">
                            <h2>Recent Post</h2>
                        </div>

                        <ul class="sidebar__recent-pos-list">
                            <li>
                                <div class="inner">
                                    <div class="img-box">
                                        <img src="assets/images/blog/sidebar-img1.jpg" alt="#">
                                    </div>
                                    <div class="content-box">
                                        <p>15 jan 2023</p>
                                        <h3><a href="blog-details.html">Nulla laore sceler <br> habitant massa
                                                eget <br>
                                                suscipit</a></h3>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner">
                                    <div class="img-box">
                                        <img src="assets/images/blog/sidebar-img2.jpg" alt="#">
                                    </div>
                                    <div class="content-box">
                                        <p>15 jan 2023</p>
                                        <h3><a href="blog-details.html">Diam urna duis <br> nunc lacus blandite
                                                <br> nullam
                                                litora</a></h3>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner">
                                    <div class="img-box">
                                        <img src="assets/images/blog/sidebar-img3.jpg" alt="#">
                                    </div>
                                    <div class="content-box">
                                        <p>15 jan 2023</p>
                                        <h3><a href="blog-details.html">Lorem diam sem <br> congue luctus
                                                cubilia <br> nam justo
                                                morbi</a></h3>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--End Sidebar Single-->

                    <!--Start Sidebar Single-->
                    <div class="sidebar-single sidebar__tags wow animated fadeInUp" data-wow-delay="0.4s">
                        <div class="sidebar__bg"
                            style="background-image: url(assets/images/backgrounds/sidebar-bg2.png);"></div>
                        <div class="title-box">
                            <h2>Solid Tags</h2>
                        </div>

                        <ul class="sidebar__tags-list">
                            <li><a href="#">Startup</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Agency</a></li>
                            <li><a href="#">Consultation</a></li>
                            <li><a href="#">career</a></li>
                            <li><a href="#">Corporate</a></li>
                            <li><a href="#">Investment</a></li>
                            <li><a href="#">Strategy</a></li>
                        </ul>
                    </div>
                    <!--End Sidebar Single-->

                    <!--Start Sidebar Single-->
                    <div class="sidebar-single sidebar__contact wow animated fadeInUp" data-wow-delay="0.5s">
                        <div class="sidebar__contact-box text-center">
                            <div class="sidebar__contact-pattern"
                                style="background-image: url(assets/images/pattern/service-details-pattern2.png);">
                            </div>
                            <div class="icon-box">
                                <span class="icon-phone-call"></span>
                            </div>
                            <h2>Have Any <br> Query Feel Free <br> Contact</h2>
                            <div class="btn-box">
                                <a class="thm-btn" href="contact.html">
                                    <span class="txt">get quote</span>
                                    <i class="icon-plus-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End Sidebar Single-->
                </div>
            </div>
            <!--End Sidebar-->
        </div>

        <ul class="styled-pagination clearfix">
            <li class="prev"><a href="#">prev</a>
            </li>
            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="next"><a href="#">next</a>
            </li>
        </ul>
    </div>
</section>
<!--End Blog Page-->
@endsection