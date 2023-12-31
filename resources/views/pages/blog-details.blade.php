@extends('master')

@section('title', 'blog details Page')
@section('blog_details')
        <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Blog Details</li>
                    </ul>
                    <div class="title">
                        <h1>Blog Details</h1>
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


        <!-- sidebar-page-container -->
        <section class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-details-content">
                            <div class="news-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/news/news-4.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <span class="post-date">20 oct, 2021</span>
                                        <ul class="post-info clearfix">
                                            <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                            <li><i class="far fa-comments"></i><a href="blog-details.html">2 Comments</a></li>
                                        </ul>
                                        <h3>Get Ready for the Summer Camp</h3>
                                        <div class="text">
                                            <p>There are not many of passages of lorem ipsum available alteration in some form. Donec scelerisque dolor id nunc dictum, interdum gravida. Vivamus eu dolor sit amet erat mollis gravida quis ac lorem. Curabitur lectus leo, venenatis vitae odio nec, suscipit laoreet nisi. Pellentesque dictum facilisis purus et fringilla. Aliquam erat volutpat. Suspendisse scelerisque vitae erat elementum volutpat. Sed volutpat metus scelerisque dui ornare malesuada. Etiam nisl metus, ultricies id commodo nec, condimentum in diam. Cras dictum felis faucibus erat pharetra, vitae malesuada urna iaculis. Proin eu turpis ex. Morbi pulvinar placerat feugiat. Proin venenatis, massa in feugiat molestie, nulla libero vehicula ante, eget dignissim arcu eros non lectus.</p>
                                            <p>Ut gravida egestas iaculis. Etiam bibendum risus quam, non scelerisque mi eleifend ac. Donec ac suscipit ex. Vivamus luctus nisi sed orci elementum facilisis. Vestibulum ut elit ut ipsum auctor dignissim in ut mi. Integer at est in turpis egestas commodo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus sagittis at risus vitae malesuada. Aenean euismod ligula nec mi vestibulum, varius tincidunt ex placerat. Ut laoreet congue velit. Suspendisse fermentum tempus efficitur. Mauris ut tellus sed ante posuere aliquam. Sed scelerisque vehicula tincidunt.</p>
                                        </div>
                                        <div class="post-share-option clearfix">
                                            <ul class="post-tags clearfix pull-left">
                                                <li><h4>Tags</h4></li>
                                                <li><a href="blog-details.html">camping</a></li>
                                                <li><a href="blog-details.html">Cottages</a></li>
                                            </ul>
                                            <ul class="social-links clearfix pull-right">
                                                <li><a href="blog-details.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="blog-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="blog-details.html"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="blog-details.html"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="assets/images/news/author-1.jpg" alt=""></figure>
                                <div class="text">
                                    <h4>Christine Eve</h4>
                                    <p>Lorem ipsum is simply free text by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed veritatis et quasi architecto.</p>
                                </div>
                            </div>
                            <div class="comment-box">
                                <div class="group-title">
                                    <h3>2 Comments</h3>
                                </div>
                                <div class="comment">
                                    <figure class="thumb-box">
                                        <img src="assets/images/news/comment-1.jpg" alt="">
                                    </figure>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix">
                                            <h4>Kevin Martin <span>20 Sep, 2021</span></h4>
                                        </div>
                                        <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                        <a href="blog-details.html" class="reply-btn">Reply</a>
                                    </div>
                                </div>
                                <div class="comment">
                                    <figure class="thumb-box">
                                        <img src="assets/images/news/comment-2.jpg" alt="">
                                    </figure>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix">
                                            <h4>Sarah Albert  <span>20 Sep, 2021</span></h4>
                                        </div>
                                        <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                        <a href="blog-details.html" class="reply-btn">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comments-form-area">
                                <div class="group-title">
                                    <h3>Leave a Comment</h3>
                                </div>
                                <div class="form-inner">
                                    <form method="post" action="https://azim.commonsupport.com/Amping/sendemail.php" id="contact-form" class="default-form">
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
                                                <button class="theme-btn btn-one" type="submit" name="submit-form"><span>Submit comment</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar">
                            <div class="search-widget">
                                <form action="https://azim.commonsupport.com/Amping/blog.html" method="post" class="search-form">
                                    <div class="form-group">
                                        <input type="search" name="search-field" placeholder="Search" required>
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="sidebar-widget post-widget">
                                <div class="widget-title">
                                    <h4>Recent Posts</h4>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-1.jpg" alt=""></a></figure>
                                        <div class="post-date"><i class="far fa-comments"></i><a href="blog-details.html">2 Comments</a></div>
                                        <h6><a href="blog-details.html">Integer tristique odio vitae lorem gra</a></h6>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-2.jpg" alt=""></a></figure>
                                        <div class="post-date"><i class="far fa-comments"></i><a href="blog-details.html">5 Comments</a></div>
                                        <h6><a href="blog-details.html">Get Ready for the Summer Camp</a></h6>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-3.jpg" alt=""></a></figure>
                                        <div class="post-date"><i class="far fa-comments"></i><a href="blog-details.html">3 Comments</a></div>
                                        <h6><a href="blog-details.html">Duis Laoreet Cursus Justo, sed ulis</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h4>Categories</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li><a href="blog-details.html">Summer Camp</a></li>
                                        <li><a href="blog-details.html">Holidays</a></li>
                                        <li><a href="blog-details.html">Tours & Trips</a></li>
                                        <li><a href="blog-details.html">Cottages</a></li>
                                        <li><a href="blog-details.html">Family Time</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget tags-widget">
                                <div class="widget-title">
                                    <h4>Popular Tags</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="tags-list clearfix">
                                        <li><a href="blog-details.html">camping</a></li>
                                        <li><a href="blog-details.html">Cottages</a></li>
                                        <li><a href="blog-details.html">Holidays</a></li>
                                        <li><a href="blog-details.html">summer camp</a></li>
                                        <li><a href="blog-details.html">Family</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sidebar-page-container end -->

@endsection
