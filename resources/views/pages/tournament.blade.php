@extends('layouts.app')

@section('content')
    @endsection




<!-- Page top section -->
<section class="page-top-section set-bg" data-setbg="img/page-top-bg/3.jpg">
    <div class="page-info">
        <h2>Tournament</h2>
        <div class="site-breadcrumb">
            <a href="home.html">Home</a>
            <span></span>
        </div>
    </div>
</section>
<!-- Page top end-->


<!-- Blog page -->
<section class="blog-page">

    <div class="widget-item">
        <form class="search-widget">
            <input type="text">
            <button>search</button>
        </form>
    </div>

    <!-- tranding Start-->

    <div class="widget-item">
        <h4 class="widget-title">Top-pick-for-you</h4>
        <div class="trending-widget">
            <div class="tw-item">
                <div class="tw-thumb">
                    <img src="./img/blog-widget/1.jpg" alt="#">
                </div>
                <div class="tw-text">
                    <div class="tw-meta">22/11/2000  in <a href="{{url('/tournamentDetail')}}">Join-Now</a></div>

                    <h5> sequnce <span style="font-size: medium;">price-pool 4000$</span></h5>
                </div>
            </div>
            <div class="tw-item">
                <div class="tw-thumb">
                    <img src="./img/blog-widget/2.jpg" alt="#">
                </div>
                <div class="tw-text">
                    <div class="tw-meta">22/11/2000  in <a href="{{url('/tournamentDetail')}}">Join-Now</a></div>

                    <h5> sequnce <span style="font-size: medium;">price-pool 4000$</span></h5>

                </div>
            </div>
            <div class="tw-item">
                <div class="tw-thumb">
                    <img src="./img/blog-widget/3.jpg" alt="#">
                </div>
                <div class="tw-text">
                    <div class="tw-meta">22/11/2000  in <a href="{{url('/tournamentDetail')}}">Join-Now</a></div>

                    <h5> sequnce <span style="font-size: medium;">price-pool 4000$</span></h5>


                </div>
            </div>
            <div class="tw-item">
                <div class="tw-thumb">
                    <img src="./img/blog-widget/4.jpg" alt="#">
                </div>
                <div class="tw-text">
                    <div class="tw-meta">22/11/2000  in <a href="{{url('/tournamentDetail')}}">Join-Now</a></div>

                    <h5> sequnce <span style="font-size: medium;">price-pool 4000$</span></h5>

                </div>
            </div>
        </div>
    </div>


    <!-- tranding end-->


    <div class="container">
        <div class="row">

            <div class="col-xl-9 col-lg-8 col-md-7">
                <ul class="blog-filter">
                    <li><a href="#">Free</a></li>
                    <li><a href="#">Paid</a></li>

                </ul>


                    <div class="big-blog-item">
                    <img src="img/blog-big/2.jpg" alt="#" class="blog-thumbnail">
                    <div class="blog-content text-box text-white">
                        <div class="top-meta">Date:22/11/2020 </div>
                        <div class="top-meta">Price-Pool:4000</div>

                        <h3>The best VR games on the market</h3>
                        <p><H5>Rules</H5>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
                        <a href="{{url('/tournamentDetail')}}" class="read-more">Join Tournament<img src="img/icons/double-arrow.png" alt="#"/></a>
                    </div>
                </div>
                <div class="big-blog-item">
                    <img src="img/blog-big/2.jpg" alt="#" class="blog-thumbnail">
                    <div class="blog-content text-box text-white">
                        <div class="top-meta">22/11/2020 </div>
                        <h3>The best online game is out now!</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
                        <a href="{{url('/tournamentDetail')}}" class="read-more">Join Tournament <img src="img/icons/double-arrow.png" alt="#"/></a>
                    </div>
                </div>

                        <div class="big-blog-item">
                    <img src="img/blog-big/3.jpg" alt="#" class="blog-thumbnail">
                    <div class="blog-content text-box text-white">
                        <div class="top-meta">22/11/2020 </div>
                        <h3>The best online game is out now!</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
                        <a href="{{url('/tournamentDetail')}}" class="read-more">Join Tournament <img src="img/icons/double-arrow.png" alt="#"/></a>
                    </div>
                </div>
                <div class="site-pagination">
                    <a href="#" class="active">01.</a>
                    <a href="#">02.</a>
                    <a href="#">03.</a>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-5 sidebar">
                <div id="stickySidebar">
                    <div class="widget-item">
0
                    </div>
                    <div class="widget-item">
                        <h4 class="widget-title">Upcoming Tournament</h4>
                        <div class="latest-comments">
                            <div class="lc-item">
                                <img src="./img/blog-widget/1.jpg" class="lc-avatar" alt="#">
                                <div class="tw-text">22/11/2020</a> <span>Price-pool:2000$</span> The best online game out there </div>
                            </div>
                            <div class="lc-item">
                                <img src="./img/blog-widget/2.jpg" class="lc-avatar" alt="#">
                                <div class="tw-text">22/11/2020</a> <span>Price-pool:2000$</span> The best online game out there </div>
                            </div>
                            <div class="lc-item">
                                <img src="./img/blog-widget/3.jpg" class="lc-avatar" alt="#">
                                <div class="tw-text">22/11/2020</a> <span>Price-pool:2000$</span> The best online game out there </div>
                            </div>
                            <div class="lc-item">
                                <img src="./img/blog-widget/4.jpg" class="lc-avatar" alt="#">
                                <div class="tw-text">22/11/2020</a> <span>Price-pool:2000$</span> The best online game out there </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-item">
                        <a href="#" class="add">
                            <img src="./img/add.jpg" alt="">
                        </a>
                    </div>
                    <div class="widget-item">
                        <div class="categories-widget">
                            <h4 class="widget-title">categories</h4>
                            <ul>
                                <li><a href="">Solo</a></li>
                                <li><a href="">Dual</a></li>
                                <li><a href="">SQUAREDE</a></li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog page end-->
