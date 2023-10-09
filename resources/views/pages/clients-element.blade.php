@extends('master')

@section('title', 'clients_element Page')
@section('clients_element')
        <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Clients Block</li>
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


        <!-- client-section -->
        <section class="client-section sec-pad">
            <div class="auto-container">
                <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <figure class="clients-logo"><a href="index-2.html"><img src="assets/images/clients/clients-1.png" alt=""></a></figure>
                    <figure class="clients-logo"><a href="index-2.html"><img src="assets/images/clients/clients-2.png" alt=""></a></figure>
                    <figure class="clients-logo"><a href="index-2.html"><img src="assets/images/clients/clients-3.png" alt=""></a></figure>
                    <figure class="clients-logo"><a href="index-2.html"><img src="assets/images/clients/clients-4.png" alt=""></a></figure>
                    <figure class="clients-logo"><a href="index-2.html"><img src="assets/images/clients/clients-5.png" alt=""></a></figure>
                </div>
            </div>
        </section>
        <!-- client-section end -->

@endsection
