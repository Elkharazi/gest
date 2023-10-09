@extends('master')

@section('title', 'feature element 2 Page')
@section('feature_element_2')

        <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Feature Block 02</li>
                    </ul>
                    <div class="title">
                        <h1>Elements</h1>
                    </div>
                </div>
            </div>
            <div class="media-partner">
                <ul class="media-links clearfix">
                    <li><h6>Follow on social media</h6></li>
                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="index-2.html"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- feature-style-two -->
        <section class="feature-style-two centred">
            <div class="auto-container">
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/feature-1.jpg" alt=""></figure>
                            <div class="lower-content">
                                <h3><a href="index-3.html">Tent Camp</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/feature-2.jpg" alt=""></figure>
                            <div class="lower-content">
                                <h3><a href="index-3.html">Wild Camp</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/feature-3.jpg" alt=""></figure>
                            <div class="lower-content">
                                <h3><a href="index-3.html">Family Camp</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-style-two end -->
@endsection
