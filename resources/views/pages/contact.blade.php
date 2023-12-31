@extends('master')

@section('title', 'contact Page')
@section('contact')
    <!-- Page Title -->
    <section class="page-title centred">
        <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Contact</li>
                </ul>
                <div class="title">
                    <h1>Contact</h1>
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


    <!-- contact-section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                    <div class="content_block_six">
                        <div class="content-box">
                            <div class="sec-title">
                                <span class="sub-title">Contact With Us</span>
                                <h2>Drop a Message</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. quis nostrud exercitation.</p>
                            </div>
                            <div class="inner-box">
                                <div class="single-item">
                                    <div class="icon-box"><i class="flaticon-open-envelope"></i></div>
                                    <p>Send Email</p>
                                    <h3><a href="mailto:needhelp@company.com">needhelp@company.com</a></h3>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="flaticon-phone"></i></div>
                                    <p>Call Anytime</p>
                                    <h3><a href="tel:12463330079">+1- ( 246 ) 333 - 0079</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 form-column">
                    <div class="form-inner">
                        <form method="post" action="https://azim.commonsupport.com/Amping/sendemail.php" id="contact-form"
                            class="default-form">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Full name" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email address" required="">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" required="" placeholder="Phone">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" required="" placeholder="Subject">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Write a message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0">
                                    <button class="theme-btn btn-one" type="submit" name="submit-form"><span>Submit
                                            comment</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->


    <!-- google-map-section -->
    <section class="google-map-section">
        <div class="shape" style="background-image: url(assets/images/shape/shape-9.png);"></div>
        <div class="map-inner">
            <div class="google-map" id="contact-google-map" data-map-lat="40.712776" data-map-lng="-74.005974"
                data-icon-path="assets/images/icons/map-marker.png" data-map-title="Brooklyn, New York, United Kingdom"
                data-map-zoom="12"
                data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                    }'>

            </div>
        </div>
    </section>
    <!-- google-map-section end -->

@endsection
