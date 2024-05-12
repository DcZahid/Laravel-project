<header class="main-header main-header-one">

    <!--Start Main Header One Top-->
    <div class="main-header-one__top">
        <div class="container">
            <div class="main-header-one__top-inner">

                <div class="main-header-one__top-left">
                    <ul class="main-header__contact-info">
                        <li>
                            <div class="inner">
                                <div class="icon-box">
                                    <span class="icon-envelope"></span>
                                </div>
                                <div class="text-box">
                                    <p><a href="mailto:yourmail@email.com">info@coran24.com</a></p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="inner">
                                <div class="icon-box">
                                    <span class="icon-location1"></span>
                                </div>
                                <div class="text-box">
                                    <p>Kimberly Way Boston, MA 02215</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="main-header-one__top-right">
                    <div class="main-header__language-switcher">
                        <div class="inner clearfix">
                            <div class="icon-box">
                                <span class="icon-world"></span>
                            </div>
                            <div class="language-switcher">
                                <div id="polyglotLanguageSwitcher">
                                    <form action="#">
                                        <select id="polyglot-language-options">
                                            <option id="en" value="en" selected>English</option>
                                            <option id="fr" value="fr">French</option>
                                            <option id="de" value="de">German</option>
                                            <option id="it" value="it">Italian</option>
                                            <option id="es" value="es">Spanish</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="main-header-one__top-social-links">
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-linkedin-big-logo"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Main Header One Top-->

    <!--Start Main Header One Bottom-->
    <div class="main-header-one__bottom">
        <div class="main-header-one__bottom-inner">
            <nav class="main-menu main-menu-one">
                <div class="main-menu__wrapper clearfix">
                    <div class="container">
                        <div class="main-menu__wrapper-inner">


                            <div class="main-header-one__bottom-left">
                                <div class="logo-box-one">
                                    <a href="{{url('/')}}">
                                        <img src="assets/images/resources/logo-1.png" alt="Awesome Logo"
                                            title="">
                                    </a>
                                </div>
                            </div>

                            <div class="main-header-one__bottom-middle">
                                <div class="main-menu-box">
                                    <a href="#" class="mobile-nav__toggler">
                                        <i class="fa fa-bars"></i>
                                    </a>

                                    <ul class="main-menu__list">
                                        <li class="dropdown {{request()->is('/')?'current':''}}">
                                            <a href="{{url('/')}}">Home</a>
                                            {{-- <ul>
                                                <li>
                                                    <a href="index.html">Home One</a>
                                                </li>
                                                <li><a href="index-2.html">Home Two</a></li>
                                                <li><a href="index-3.html">Home Three</a></li>
                                                <li class="dropdown">
                                                    <a href="#">Header Styles</a>
                                                    <ul>
                                                        <li><a href="index.html">Header One</a></li>
                                                        <li><a href="index-2.html">Header Two</a></li>
                                                        <li><a href="index-3.html">Header Three</a></li>
                                                    </ul>
                                                </li>
                                            </ul> --}}
                                        </li>

                                        <li  class="{{ request()->is('about') ? 'current' : '' }}">
                                            <a href="{{url('/about')}}">About</a>
                                        </li>

                                        <li class="dropdown">
                                            <a href="#">Services</a>
                                            {{-- <ul>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="business-audit.html">Business Audit</a>
                                                </li>
                                                <li><a href="financial-advice.html">Financial Advice</a>
                                                </li>
                                                <li><a href="tax-strategy.html">Tax Strategy</a>
                                                </li>
                                                <li><a href="life-insurance.html">Life Insurance</a>
                                                </li>
                                                <li><a href="startup-planning.html">Startup Planning</a>
                                                </li>
                                                <li><a href="hr-consulting.html">Hr Consulting</a>
                                                </li>
                                            </ul> --}}
                                        </li>

                                        <li class="{{ request()->is('pages') ? 'current' : '' }}">
                                            <a href="#">Pages</a>
                                            {{-- <ul>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="case.html">Case</a></li>
                                                <li><a href="case-details.html">Case Details</a></li>
                                                <li><a href="pricing.html">Pricing</a>
                                                <li><a href="faq.html">Faq</a>
                                                </li>
                                            </ul> --}}
                                        </li>

                                        <li class="dropdown{{ request()->is('blog') ? 'current' : '' }}">
                                            <a href="#">Blog</a>
                                            <ul>
                                                <li><a href="{{url('/blogcontent')}}">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>

                                        <li class="{{ request()->is('contact') ? 'current' : '' }}">
                                            <a href="{{url('/contact')}}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="main-header-one__bottom-right">
                                <div class="header-search-box">
                                    <a href="#"
                                        class="main-menu__search search-toggler icon-search-interface-symbol">
                                    </a>
                                </div>

                                <div class="btn-box">
                                    <a class="thm-btn" href="contact.html">
                                        <span class="txt">get quote</span>
                                        <i class="icon-plus-1"></i>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--End Main Header One Bottom-->

</header>