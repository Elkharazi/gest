@extends('master')

@section('title', 'activities Page')
@section('activities_element_1')
    <!-- Page Title -->
    <section class="page-title centred">
        <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Activities Block 01</li>
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


    <!-- activities-section -->
    <section class="activities-section sec-pad centred">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 activities-block">
                    <div class="activities-block-one wow fadeInUp animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box"><a href="climbing.html"><img
                                        src="assets/images/resource/activities-1.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <div class="icon-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-5.png);">
                                    </div>
                                    <div class="overlay-shape"
                                        style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                    <i class="flaticon-climbing"></i>
                                </div>
                                <h3><a href="climbing.html">Climbing</a></h3>
                                <p>There are not many of passages of lorem ipsum available alteration in osten some form.
                                </p>
                                <div class="link"><a href="climbing.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 activities-block">
                    <div class="activities-block-one wow fadeInUp animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box"><a href="adventure.html"><img
                                        src="assets/images/resource/activities-2.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <div class="icon-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-5.png);">
                                    </div>
                                    <div class="overlay-shape"
                                        style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                    <i class="flaticon-adventurer"></i>
                                </div>
                                <h3><a href="adventure.html">Adventure</a></h3>
                                <p>There are not many of passages of lorem ipsum available alteration in osten some form.
                                </p>
                                <div class="link"><a href="adventure.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 activities-block">
                    <div class="activities-block-one wow fadeInUp animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box"><a href="camping.html"><img src="assets/images/resource/activities-3.jpg"
                                        alt=""></a></div>
                            <div class="lower-content">
                                <div class="icon-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-5.png);">
                                    </div>
                                    <div class="overlay-shape"
                                        style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                    <i class="flaticon-tent"></i>
                                </div>
                                <h3><a href="camping.html">Camping</a></h3>
                                <p>There are not many of passages of lorem ipsum available alteration in osten some form.
                                </p>
                                <div class="link"><a href="camping.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- activities-section end -->
@endsection
