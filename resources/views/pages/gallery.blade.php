@extends('master')

@section('title', 'gallery Page')
@section('gallery')
        <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Our Gallery</li>
                    </ul>
                    <div class="title">
                        <h1>Our Gallery</h1>
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


        <!-- gallery-page-section -->
        <section class="gallery-page-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                        <div class="gallery-block-two">
                            <div class="inner-box">
                                <figure class="image"><img src="assets/images/gallery/gallery-10.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/gallery/gallery-10.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-plus"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                        <div class="gallery-block-two">
                            <div class="inner-box">
                                <figure class="image"><img src="assets/images/gallery/gallery-11.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/gallery/gallery-11.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-plus"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                        <div class="gallery-block-two">
                            <div class="inner-box">
                                <figure class="image"><img src="assets/images/gallery/gallery-12.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/gallery/gallery-12.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-plus"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                        <div class="gallery-block-two">
                            <div class="inner-box">
                                <figure class="image"><img src="assets/images/gallery/gallery-13.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/gallery/gallery-13.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-plus"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                        <div class="gallery-block-two">
                            <div class="inner-box">
                                <figure class="image"><img src="assets/images/gallery/gallery-14.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/gallery/gallery-14.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-plus"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                        <div class="gallery-block-two">
                            <div class="inner-box">
                                <figure class="image"><img src="assets/images/gallery/gallery-15.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/gallery/gallery-15.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-plus"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery-page-section end -->
@endsection
