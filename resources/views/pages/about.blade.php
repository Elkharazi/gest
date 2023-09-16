@extends('master')

@section('title', 'Home Page')
@section('about')
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index-2.html"><img src="assets/images/logo-2.png" alt="" title=""></a>
            </div>
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


    <!-- Page Title -->
    <section class="page-title centred">
        <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>About Us</li>
                </ul>
                <div class="title">
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
        <div class="media-partner">
            <ul class="media-links clearfix">
                <li>
                    <h6>Follow on social media</h6>
                </li>
                <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="index-2.html"><i class="fab fa-pinterest-p"></i></a></li>
                <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- about-style-three -->
    <section class="about-style-three">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_three">
                        <div class="image-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 single-image">
                                    <figure class="image"><img src="assets/images/resource/about-3.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-image">
                                    <figure class="image"><img src="assets/images/resource/about-4.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_five">
                        <div class="content-box">
                            <div class="sec-title">
                                <span class="sub-title">About Us</span>
                                <h2>Know About Our Camping</h2>
                            </div>
                            <div class="text">
                                <h3>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                    nulla pariatur.</h3>
                                <p>Proin est lacus, sagittis lobortis iaculis eget, iaculis nec purus. Cras faucibus
                                    fringilla orci in sollicitudin. Donec eget tincidunt arcu, ut ultricies velit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-three end -->


    <!-- video-section -->
    <section class="video-section">
        <div class="bg-layer parallax-bg" data-parallax='{"y": 100}'
            style="background-image: url(assets/images/background/video-bg.jpg);"></div>
        <div class="auto-container">
            <div class="inner-box">
                <div class="sec-title light">
                    <span class="sub-title">Cmapning That’s Right For You</span>
                    <h2>Get Now Memorable Wonderful Outdoor Experiences</h2>
                </div>
                <div class="video-btn">
                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""
                        style="background-image: url(assets/images/shape/shape-7.png);"><i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- video-section end -->


    <!-- testimonial-style-two -->
    <section class="testimonial-style-two about-page">
        <div class="bg-layer" style="background-image: url(assets/images/background/testimonial-bg.jpg);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                    <div class="sec-title">
                        <span class="sub-title">What’s Happening</span>
                        <h2>What They Say About Camp!</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                    <div class="inner-content">
                        <div class="two-item-carousel owl-carousel owl-theme owl-nav-none">
                            <div class="testimonial-content">
                                <div class="text">
                                    <p>Lorem ipsum is simply free text dolor sit amet, nott adipisicing elit sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-2.jpg"
                                            alt=""></figure>
                                    <span class="name">Kevin Martin</span>
                                    <span class="designation">Kevin Martin</span>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="text">
                                    <p>Lorem ipsum is simply free text dolor sit amet, nott adipisicing elit sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-3.jpg"
                                            alt=""></figure>
                                    <span class="name">Jessica Brown</span>
                                    <span class="designation">Kevin Martin</span>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="text">
                                    <p>Lorem ipsum is simply free text dolor sit amet, nott adipisicing elit sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-2.jpg"
                                            alt=""></figure>
                                    <span class="name">Kevin Martin</span>
                                    <span class="designation">Kevin Martin</span>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="text">
                                    <p>Lorem ipsum is simply free text dolor sit amet, nott adipisicing elit sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-3.jpg"
                                            alt=""></figure>
                                    <span class="name">Jessica Brown</span>
                                    <span class="designation">Kevin Martin</span>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="text">
                                    <p>Lorem ipsum is simply free text dolor sit amet, nott adipisicing elit sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-2.jpg"
                                            alt=""></figure>
                                    <span class="name">Kevin Martin</span>
                                    <span class="designation">Kevin Martin</span>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="text">
                                    <p>Lorem ipsum is simply free text dolor sit amet, nott adipisicing elit sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-3.jpg"
                                            alt=""></figure>
                                    <span class="name">Jessica Brown</span>
                                    <span class="designation">Kevin Martin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-style-two end -->


    <!-- cta-section -->
    <section class="cta-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="text">
                    <h2>Join Annual Summer Camp</h2>
                </div>
                <div class="btn-box">
                    <a href="contact.html" class="theme-btn btn-one">contact us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-section end -->


    <!-- team-section -->
    <section class="team-section sec-pad centred">
        <div class="auto-container">
            <div class="sec-title">
                <span class="sub-title">What’s Happening</span>
                <h2>Meet Our Team</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/team/team-1.jpg" alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h3><a href="about.html">Jessica Brown</a></h3>
                                <span class="designation">Director</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/team/team-2.jpg" alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h3><a href="about.html">Mike Hardson</a></h3>
                                <span class="designation">Director</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/team/team-3.jpg" alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h3><a href="about.html">Christine Eve</a></h3>
                                <span class="designation">Director</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/team/team-4.jpg" alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h3><a href="about.html">Kevin Smith</a></h3>
                                <span class="designation">Director</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-section end -->


    <!-- client-section -->
    <section class="client-section">
        <div class="auto-container">
            <div class="title-text centred">
                <span>Meet the partners</span>
            </div>
            <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                <figure class="clients-logo"><a href="index-2.html"><img src="assets/images/clients/clients-1.png"
                            alt=""></a></figure>
                <figure class="clients-logo"><a href="index-2.html"><img src="assets/images/clients/clients-2.png"
                            alt=""></a></figure>
                <figure class="clients-logo"><a href="index-2.html"><img src="assets/images/clients/clients-3.png"
                            alt=""></a></figure>
                <figure class="clients-logo"><a href="index-2.html"><img src="assets/images/clients/clients-4.png"
                            alt=""></a></figure>
                <figure class="clients-logo"><a href="index-2.html"><img src="assets/images/clients/clients-5.png"
                            alt=""></a></figure>
            </div>
        </div>
    </section>
    <!-- client-section end -->


    <!-- main-footer -->
    <footer class="main-footer">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-13.png);"></div>
        <div class="auto-container">
            <div class="footer-top">
                <div class="top-inner">
                    <div class="text">
                        <h5>Send Email</h5>
                        <h3><a href="mailto:needhelp@company.com">needhelp@company.com</a></h3>
                    </div>
                    <figure class="footer-logo"><a href="index-2.html"><img src="assets/images/footer-logo.png"
                                alt=""></a></figure>
                    <div class="text">
                        <h5>Call Anytime</h5>
                        <h3><a href="tel:12463330079">+1- ( 246 ) 333 - 0079</a></h3>
                    </div>
                </div>
            </div>
            <div class="widget-section">
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <div class="widget-title">
                                <h4>Explore</h4>
                            </div>
                            <div class="widget-content">
                                <ul class="links-list clearfix">
                                    <li><a href="index-2.html">Meet Our Team</a></li>
                                    <li><a href="index-2.html">What We Do</a></li>
                                    <li><a href="index-2.html">Latest News</a></li>
                                    <li><a href="index-2.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget ml-70">
                            <div class="widget-title">
                                <h4>Activities</h4>
                            </div>
                            <div class="widget-content">
                                <ul class="links-list clearfix">
                                    <li><a href="index-2.html">Tree Climbing</a></li>
                                    <li><a href="index-2.html">Cross the River</a></li>
                                    <li><a href="index-2.html">Mountain Boarding</a></li>
                                    <li><a href="index-2.html">Parachute</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget contact-widget">
                            <div class="widget-title">
                                <h4>Contact</h4>
                            </div>
                            <div class="widget-content">
                                <p>60 road, broklyn golden street new york. USA</p>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget newsletter-widget">
                            <div class="widget-title">
                                <h4>Newsletter</h4>
                            </div>
                            <div class="widget-content">
                                <p>Subsrcibe for our upcoming latest articles and news resources</p>
                                <form action="https://azim.commonsupport.com/Amping/contact.html" method="post"
                                    class="newsletter-form">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email address" required>
                                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom centred">
            <div class="auto-container">
                <div class="copyright">
                    <p>&copy; Copyright 2022 by <a href="index-2.html">company.com</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->


    <!-- scroll to top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fal fa-long-arrow-up"></i>
    </button>
    </div>
@endsection
