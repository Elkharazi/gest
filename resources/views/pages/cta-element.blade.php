@extends('master')

@section('title', 'cta element Page')
@section('cta_element')
        <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Cta Block</li>
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


        <!-- cta-section -->
        <section class="cta-section sec-pad">
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

@endsection
