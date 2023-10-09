@extends('master')

@section('title', 'about Page')
@section('about_element_1')


    <!-- Page Title -->
    <section class="page-title centred">
        <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>About Block 01</li>
                </ul>
                <div class="title">
                    <h1>Elements</h1>
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


    <!-- about-section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_one">
                        <div class="image-box">
                            <div class="text">amping</div>
                            <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                            <figure class="image"><img src="assets/images/resource/about-1.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_one">
                        <div class="content-box">
                            <div class="sec-title">
                                <span class="sub-title">Our Introductions</span>
                                <h2>Welcome to Camp of Summers</h2>
                            </div>
                            <div class="text">
                                <div class="icon-box"><i class="flaticon-camping"></i></div>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                    nulla pariatur.</p>
                            </div>
                            <ul class="list-style-one clearfix">
                                <li>Refresing to get such a personal touch.</li>
                                <li>Duis aute irure dolor in reprehenderit in voluptate.</li>
                                <li>Velit esse cillum dolore eu fugiat nulla pariatur.</li>
                            </ul>
                            <div class="btn-box">
                                <a href="about.html" class="theme-btn btn-one">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->
@endsection
