<header class="main-header header-style-one">
    <div class="header-lower">
        <div class="logo-box">
            <figure class="logo"><a href="index-2.html"><img src="assets/images/logo.png" alt=""></a></figure>
        </div>
        <div class="outer-box">
            <div class="menu-area">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler">
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                </div>
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="dropdown" style="color: red"><a href="index-2.html">bonjour tout le monde</a>
                                <ul>
                                    <li><a href="{{ route('home_Page_One') }}">Home Page One</a></li>
                                    <li><a href="{{ route('home_Page_Two') }}">Home Page Two</a></li>
                                    <li><a href="{{ route('home_OnePage') }}">Home OnePage</a></li>
                                    <li><a href="{{ route('index_rtl') }}">Home RTL</a></li>
                                    <li class="dropdown"><a href="{{ route('home_Page_One') }}">Header Style</a>
                                        <ul>
                                            <li><a href="{{ route('home_Page_One') }}">Header Style One</a></li>
                                            <li><a href="{{ route('home_Page_One') }}">Header Style Two</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="{{ route('activities') }}">Activities</a>
                                <ul>
                                    <li><a href="{{ route('activities') }}">Activities</a></li>
                                    <li><a href="{{ route('climbing') }}">Climbing</a></li>
                                    <li><a href="{{ route('adventure') }}">Adventure</a></li>
                                    <li><a href="{{ route('camping') }}">Camping</a></li>
                                    <li><a href="{{ route('diving') }}">Diving</a></li>
                                    <li><a href="{{ route('parachute') }}">Parachute</a></li>
                                    <li><a href="{{ route('throwing') }}">Throwing</a></li>
                                </ul>
                            </li>
                            <li class="current dropdown"><a href="index-2.html">Pages</a>
                                <ul>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('team') }}">Our Team</a></li>
                                    <li><a href="{{ route('gallery') }}">Our Gallery</a></li>
                                    <li><a href="{{ route('error') }}">404</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="index-2.html">Elements</a>
                                <div class="megamenu">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 column">
                                            <ul>
                                                <li>
                                                    <h4>Elements 1</h4>
                                                </li>
                                                <li><a href="{{ route('about_element_1') }}">About Block 01</a></li>
                                                <li><a href="{{ route('about_element_2') }}">About Block 02</a></li>
                                                <li><a href="{{ route('about_element_3') }}">About Block 03</a></li>
                                                <li><a href="{{ route('activities_element_1') }}">Activities Block
                                                        01</a></li>
                                                <li><a href="{{ route('activities_element_2') }}">Activities Block
                                                        02</a></li>
                                                <li><a href="{{ route('news_element_1') }}">News Block 01</a></li>
                                                <li><a href="{{ route('news_element_2') }}">News Block 02</a></li>
                                                <li><a href="{{ route('team_element_1') }}">Team Block 01</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 column">
                                            <ul>
                                                <li>
                                                    <h4>Elements 2</h4>
                                                </li>
                                                <li><a href="{{ route('team_element_2') }}">Team Block 02</a></li>
                                                <li><a href="{{ route('feature_element_1') }}">Feature Block 01</a>
                                                </li>
                                                <li><a href="{{ route('feature_element_2') }}">Feature Block 02</a>
                                                </li>
                                                <li><a href="{{ route('video_element') }}">Video Block</a></li>
                                                <li><a href="{{ route('gallery_element') }}">Gallery Block</a></li>
                                                <li><a href="{{ route('testimonial_element') }}">Testimonial Block</a>
                                                </li>
                                                <li><a href="{{ route('cta_element') }}">Cta Block</a></li>
                                                <li><a href="{{ route('clients_element') }}">Clients Block</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown"><a href="{{ route('blog') }}">Blog</a>
                                <ul>
                                    <li><a href="{{ route('blog') }}">Our Blog</a></li>
                                    <li><a href="{{ route('blog_details') }}">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="menu-right-content">
                <div class="support-box">
                    <div class="icon"><i class="flaticon-chat"></i></div>
                    <span>Call Anytime</span>
                    <h5><a href="tel:12463330079">+1- ( 246 ) 333 - 0079</a></h5>
                </div>
                <div class="search-box-outer">
                    <div class="dropdown">
                        <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i
                                class="flaticon-magnifying-glass"></i></button>
                        <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                            <div class="form-container">
                                <form method="post" action="https://azim.commonsupport.com/Amping/blog.html">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value=""
                                            placeholder="Search...." required="">
                                        <button type="submit" class="search-btn"><span
                                                class="fas fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-box"><a href="index-2.html"><i class="flaticon-shopping-cart"></i></a></div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="outer-box">
            <div class="menu-area">
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
            </div>
            <div class="menu-right-content">
                <div class="support-box">
                    <div class="icon"><i class="flaticon-chat"></i></div>
                    <span>Call Anytime</span>
                    <h5><a href="tel:12463330079">+1- ( 246 ) 333 - 0079</a></h5>
                </div>
                <div class="search-box-outer">
                    <div class="dropdown">
                        <button class="search-box-btn" type="button" id="dropdownMenu4" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i
                                class="flaticon-magnifying-glass"></i></button>
                        <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu4">
                            <div class="form-container">
                                <form method="post" action="https://azim.commonsupport.com/Amping/blog.html">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value=""
                                            placeholder="Search...." required="">
                                        <button type="submit" class="search-btn"><span
                                                class="fas fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-box"><a href="index-2.html"><i class="flaticon-shopping-cart"></i></a></div>
            </div>
        </div>
    </div>
</header>
<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="index-2.html"><img src="assets/images/logo-2.png" alt=""
                    title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index-2.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index-2.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index-2.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index-2.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index-2.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->
