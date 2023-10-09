@extends('master')

@section('title', 'error Page')
@section('error')
        <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>404</li>
                    </ul>
                    <div class="title">
                        <h1>404</h1>
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


        <!-- error-section -->
        <section class="error-section centred">
            <div class="auto-container">
                <div class="inner-box">
                    <h1>404</h1>
                    <h2>page is not found. <br />the page is doesn’t exist or deleted</h2>
                    <a href="index-2.html" class="theme-btn btn-one">Go To Home</a>
                </div>
            </div>
        </section>
        <!-- error-section end -->

@endsection
