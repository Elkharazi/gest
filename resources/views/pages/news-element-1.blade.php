 @extends('master')

 @section('title', 'news_element_1 Page')
 @section('news_element_1')
     <!-- Page Title -->
     <section class="page-title centred">
         <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
         <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
         <div class="auto-container">
             <div class="content-box">
                 <ul class="bread-crumb clearfix">
                     <li><a href="index-2.html">Home</a></li>
                     <li>News Block 01</li>
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


     <!-- news-section -->
     <section class="news-section sec-pad">
         <div class="auto-container">
             <div class="row clearfix">
                 <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                     <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                         <div class="inner-box">
                             <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-1.jpg"
                                         alt=""></a></figure>
                             <div class="lower-content">
                                 <span class="post-date">20 oct, 2021</span>
                                 <ul class="post-info clearfix">
                                     <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                     <li><i class="far fa-comments"></i><a href="blog-details.html">2 Comments</a></li>
                                 </ul>
                                 <h3><a href="blog-details.html">Get Ready for the Summer Camp</a></h3>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                     <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                         <div class="inner-box">
                             <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-2.jpg"
                                         alt=""></a></figure>
                             <div class="lower-content">
                                 <span class="post-date">19 oct, 2021</span>
                                 <ul class="post-info clearfix">
                                     <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                     <li><i class="far fa-comments"></i><a href="blog-details.html">5 Comments</a></li>
                                 </ul>
                                 <h3><a href="blog-details.html">Duis Laoreet Cursus Justo, sed</a></h3>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                     <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                         <div class="inner-box">
                             <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-3.jpg"
                                         alt=""></a></figure>
                             <div class="lower-content">
                                 <span class="post-date">18 oct, 2021</span>
                                 <ul class="post-info clearfix">
                                     <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                     <li><i class="far fa-comments"></i><a href="blog-details.html">4 Comments</a></li>
                                 </ul>
                                 <h3><a href="blog-details.html">Morbi nec Finibus mi Cras Risus</a></h3>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- news-section end -->
 @endsection
