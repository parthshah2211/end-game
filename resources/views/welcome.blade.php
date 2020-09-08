@extends('layouts.app')

@section('content')
    <!-- Hero section -->
    <section class="hero-section overflow-hidden">
        <div class="hero-slider owl-carousel">
            <div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="img/slide1.jpg">
                <div class="container">
                    <h2>JOIN TOURNAMENT</h2>
                    <p>Fusce erat dui, venenatis et erat in, vulputate dignissim lacus. Donec vitae tempus dolor,<br>sit amet elementum lorem. Ut cursus tempor turpis.</p>
                    <a href="register.html" class="site-btn">JOIN HERARE</a>
                </div>
            </div>
            <div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="img/SLIDE2.jpg">
                <div class="container">
                    <h2>JOIN GIVE-WAY</h2>
                    <p>Fusce erat dui, venenatis et erat in, vulputate dignissim lacus. Donec vitae tempus dolor,<br>sit amet elementum lorem. Ut cursus tempor turpis.</p>
                    <a href="#" class="site-btn">JOIN  HERARE</a>
                </div>
            </div>
             </div>
    </section>
    <!-- Hero section end-->







    <!----tournamnt start --->

    <section class="review-section">


        <div class="section-title text-white">
            <h2>Upcoming-tournamnet</h2>
        </div>

        <div class="container">
            <div class="review-item">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="review-pic">
                            <img src="{{asset('img/review/1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="review-content text-box text-white">
                            <div class="rating">
                                <h5><i>Price-polol</i><span>4000$</span> </h5>
                            </div>
                            <div class="top-meta"> 22/11/2000  <a href=""></a></div>
                            <h3>Final Appocalipse</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.Vivamus volutpat nibh ac sollicitudin imperdiet. Donec scelerisque lorem sodales odio ultricies, nec rhoncus ex lobortis. Vivamus tincidunt sit amet sem id varius. Donec elementum aliquet tortor. Curabitur justo mi, efficitur sed eros aliquealiqua.....</p>
                            <a href="main tournament.html" class="read-more">Join-Tournament <img src="{{asset('img/icons/double-arrow.png')}}" alt="#"/></a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="review-item">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="review-pic">
                            <img src="{{asset('img/review/1.jpg')}}"  alt="">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="review-content text-box text-white">
                            <div class="rating">
                                <h5><i>Price-polol</i><span>4000$</span> </h5>
                            </div>
                            <div class="top-meta"> 22/11/2000  <a href=""></a></div>
                            <h3>Final Appocalipse</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.Vivamus volutpat nibh ac sollicitudin imperdiet. Donec scelerisque lorem sodales odio ultricies, nec rhoncus ex lobortis. Vivamus tincidunt sit amet sem id varius. Donec elementum aliquet tortor. Curabitur justo mi, efficitur sed eros aliquealiqua.....</p>
                            <a href="main tournament.html" class="read-more">Join-tournament <img src="img/icons/double-arrow.png" alt="#"/></a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="site-pagination">
            <a href="Tournament.html" class="active">01.</a>
            <a href="Tournament.html">02.</a>
            <a href="Tournament.html">03.</a>
        </div>

    </section>

    <!--tournament end --->

    <!-- News section start -->


    <section class="blog-section spad">

        <div class="section-title text-white">
            <h2>Latest News</h2>
        </div>




        <div class="content-wrapper">

            <div class="news-card">
                <a href="#" class="news-card__card-link"></a>
                <img src="{{asset('img/sp.jpg')}}">
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title"></h2>
                    <div class="news-card__post-date">Jan 29, 2018</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam obcaecati ex natus nulla rem sequi laborum quod fugit&hellip;</p>
                        <a href="main news.html" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="news-card">
                <a href="main news.html" class="news-card__card-link"></a>
                <img src="{{asset('img/SP.jpg')}}"alt="" class="news-card__image">
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title">Amazing Title</h2>
                    <div class="news-card__post-date">Jan 29, 2018</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis beatae&hellip;</p>
                        <a href="main news.html" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="news-card">
                <a href="#" class="news-card__card-link"></a>
                <img src="{{asset('img/SP.jpg')}}"  alt="" class="news-card__image">
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title">Amazing Forth Title that is Quite Long</h2>
                    <div class="news-card__post-date">Jan 29, 2018</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt">Lorem ipsum dolor sit amet!</p>
                        <a href="main news.html" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="news-card">
                <a href="#" class="news-card__card-link"></a>
                <img src="{{asset('img/2.1.jpg')}}"  alt="" class="news-card__image">
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title">Amazing Fifth Title</h2>
                    <div class="news-card__post-date">Jan 29, 2018</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est pariatur nemo tempore repellat? Ullam sed officia iure architecto deserunt distinctio&hellip;</p>
                        <a href="main news.html" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="news-card">
                <a href="main news.html" class="news-card__card-link"></a>
                <img src="{{asset('img/news3.jpg')}}"alt="" class="news-card__image">
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title">Purgatory is removed from ranked and replaced by Kalahari on Free Fire</h2>
                    <div class="news-card__post-date">Jun 26, 2020</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt">
                            Today is unfortunately the day that our beloved Purgatory was removed from the ranks, giving way to Kalahari. […]
                        </p>
                        <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="site-pagination">
            <a href="News.html" class="active">01.</a>
            <a href="News.html">02.</a>
            <a href="News.html">03.</a>
        </div>



    </section>

    <!-- News section End -->
    <!-- Intro section -->
    <section class="intro-video-section set-bg d-flex align-items-end " data-setbg="./img/sp-bg-2.jpg">
        <a href="https://www.youtube.com/watch?v=Q19apeXtGXE" class="video-play-btn video-popup"><img src="img/icons/solid-right-arrow.png" alt="#"></a>
        <div class="container">
            <div class="video-text">
                <h2>Promo video of the game</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </section>
    <!-- Intro section end -->


    <!-- Blog section -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <div class="section-title text-white">
                        <h2>Our moto</h2>

                    </div>

                    <!-- Blog item -->
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="{{asset('img/event.jpeg')}}" height="350px"  width="452px" alt="">
                        </div>11
                        <div class="blog-text text-box text-white">
                            <div class="top-meta"> <a href=""></a></div>
                            <h3>
                                Online Mobile Gaming Events</h3>
                            <p>Organized online gaming has spread worldwide to encompass an ever-growing number of games, leagues, tournaments,

                                and conventions. WGCA Esports is intimately familiar with all aspects of the

                                gaming ecosystem. Each project, whether it's online, offline, or somewhere in between presents its own challenges-and

                                WGCA esports has the power and flexibility to handle them all while securing

                                fair-play between players.</p>

                        </div>
                    </div>
                    <!-- Blog item -->
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="{{asset('img/player.jpg')}}"  height="350px"  width="452px" alt="">
                        </div>
                        <div class="blog-text text-box text-white">
                            <div class="top-meta"> <a href=""></a></div>
                            <h3>Player Management </h3>
                            <p> india is a storehouse of talent. So many

                                deserving players who go unnoticed.But not now. We at WGCA Esports are creating a massive pool of players along with their data

                                from which organizations can choose and

                                make their teams. We have promised to give

                                a stage to all the deserving players to showcase their talent and earn what they deserve. Players of a team are like the pillars of a building. Even if one of them is weak, the building will collapse. Keeping this in mind WGCA Esports showcases only the best of the best talent in front of you. </p>

                        </div>
                    </div>
                    <!-- Blog item -->
                    <div class="blog-item">

                        <div class="blog-thumb">
                            <img src= "{{asset('img/in.jpg')}}"    height="350px"  width="452px" alt="">
                        </div>
                        <div class="blog-text text-box text-white">
                            <div class="top-meta"> <a href=""></a></div>
                            <h3>Influencer Management
                            </h3>
                            <p>The social media handle of the competitive players is the first thing people take notice of. We have vivid experience in social media

                                management in the gaming ecosystem. We

                                at WGCA Esports help competitive players become the future influencers of the gaming community because we believe they have a huge impact on the community and for them being the right influencer and having the right influence is very necessary to bring forward the gaming community of India
                            </p>

                        </div>
                    </div>
                </div>


            </div>
    </section>
    <!-- Blog section end -->
    <!-- Featured section -->
    <section class="featured-section">
        <div class="featured-bg set-bg" data-setbg="img/featured-bg.jpg"></div>
        <div class="featured-box">
            <div class="text-box">
                <div class="top-meta"> <h1> About-us </h1></div>
                <h4>
                    The gaming community you have been waiting for is out now
                </h4>
                <p>We are a group of gaming enthusiasts based in India, connecting fellow gamers from all around the country. We understand that gaming is not just a hobby but also, can be pursued as a career as well.
                    Join the community, make new friends, and win tournaments.

                </p>

            </div>
        </div>
    </section>
    <!-- Featured section end-->






    {{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}



