@extends('layouts.app')

@section('content')


    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg">
        <div class="page-info">
            <h2>News</h2>
            <div class="site-breadcrumb">
                <a href="">Home</a>
                <span>News</span>
            </div>
        </div>
    </section>
    <!-- Page top end-->







    </section>

    </div>




    <section class="blog-section spad">






        <div class="content-wrapper">

            <div class="news-card">
                <a href="#" class="news-card__card-link"></a>
                <img src=  "{{asset('img/2.0.jpg')}}">
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title" >Amazing First Title</h2>
                    <div class="news-card__post-date">Jan 29, 2018</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est pariatur nemo tempore repellat? Ullam sed officia iure architecto deserunt distinctio, pariatur&hellip;</p>
                        <a href="{{url('/mainnews')}}"class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="news-card">
                <a href="#" class="news-card__card-link"></a>
                <img src="{{asset('img/2.1.jpg')}}">
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title">Amazing Second Title that is Quite Long</h2>
                    <div class="news-card__post-date">Jan 29, 2018</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam obcaecati ex natus nulla rem sequi laborum quod fugit&hellip;</p>
                        <a href="{{url('/mainnews')}}" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="news-card">
                <a href="{{url('/mainnews')}}" class="news-card__card-link"></a>
                <img src="{{asset('img/SP.jpg')}}"alt="" class="news-card__image">
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title">Amazing Title</h2>
                    <div class="news-card__post-date">Jan 29, 2018</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis beatae&hellip;</p>
                        <a href="{{url('/mainnews')}}" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
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
                        <a href="{{url('/mainnews')}}" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
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
                        <a href="{{url('/mainnews')}}" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="news-card">
                <a href="{{url('/mainnews')}}" class="news-card__card-link"></a>
                <img src="{{asset('img/add.jpg')}}"alt="" class="news-card__image">
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title">Amazing 6<sup>th</sup> Title</h2>
                    <div class="news-card__post-date">Jan 29, 2018</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est pariatur nemo tempore repellat? Ullam sed officia.</p>
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
