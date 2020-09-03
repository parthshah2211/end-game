@extends('layouts.app')
@section('content')

    <!-- Header section -->
    <header class="header-section">
        <div class="header-warp">

            <div class="header-bar-warp d-flex">
                <!-- site logo -->
                <a href="home.html" class="site-logo">
                    <img src="./img/logo.png" alt="">
                </a>
                <nav class="top-nav-area w-100">
                    <div class="user-panel">
                        <a href="">Login</a> <a href=""></a>
                    </div>
                    <!-- Menu -->
                    <!-- Menu -->
                    <ul class="main-menu primary-menu">
                        <li><a href="home.html">Home</a></li>
                        <li><a href="">Tournamnet</a>
                            <ul class="sub-menu">
                                <li><a href="../HTML/tournament.html">Free-Fire</a></li>

                                <li><a href="Tournament.html">PUBG</a></li>
                                <li><a href="Tournament.html">COD</a></li>
                            </ul>
                        </li>
                        <li><a href="review.html">screems</a>
                            <ul class="sub-menu">
                                <li><a href="screms.html">Free-Fire</a></li>

                                <li><a href="screms.html">PUBG</a>
                                    <ul1 class="sub-menu">
                                <li><a href="screms.html">free</a>
                                </li>
                                </li>
                                </ul1>
                                <li><a href="game-single.html">COD</a></li>
                            </ul>
                        </li>
                        <li><a href="Give-way.html">Give-Way</a>
                            <ul class="sub-menu">
                                <li><a href="Give-way.html">Free-Fire</a></li>


                                <li><a href="Give-way.html">PUBG</a></li>
                                <li><a href="Give-way.html">COD</a></li>
                            </ul>
                        </li>
                        <li><a href="News.html">News</a>
                            <ul class="sub-menu">
                                <li><a href="News.html">Free-Fire</a></li>


                                <li><a href="News.html">PUBG</a></li>
                                <li><a href="News.html">COD</a></li>
                            </ul>
                        </li>

                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Page top end-->


    <!-- Games section -->
    <section class="games-single-page">
        <div class="container">
            <div class="game-single-preview">
                <img src="./img/games/1234.jpg" alt="">
            </div>
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
                    <div class="gs-meta">22/11/2000<a href=""></a></div>
                    <h2 class="gs-title">Hello PARTH</h2>
                    <h4>Gameplay</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vestibulum posuere porttitor justo id pellentesque. Proin id lacus feugiat, posuere erat sit amet, commodo ipsum. Donec pellentesque vestibulum metus.</p>
                    <h4>Conclusion</h4>
                    <p>Nulla ut maximus mauris. Sed malesuada at sapien sed euismod. Vestibulum pharetra in sem id laoreet. Cras metus ex, placerat nec justo quis, luctus posuere ex. Vivamus volutpat nibh ac sollicitudin imperdiet. Donec scelerisque lorem sodales odio ultricies, nec rhoncus ex lobortis. Vivamus tincidunt sit amet sem id varius. Donec ele-mentum aliquet tortor. Curabitur justo mi, efficitur sed eros aliquet, dictum molestie eros. Nullam scelerisque convallis gravida. Morbi id lorem accumsan, scelerisque enim laoreet, sollicitudin neque. Vivamus volutpat nibh ac sollicitudin imperdiet. Donec scelerisque lorem sodales odio ultricies, nec rhoncus ex lobortis. Vivamus tincidunt sit amet sem id varius. Donec ele-mentum aliquet tortor. Curabitur justo mi, efficitur sed eros aliqueDonec vitae tellus sodales, congue augue at, biben-dum justo. Pellentesque non dolor et magna volutpat pharetra eget vel ligula. Maecenas facilisis vestibulum mattis. Sed sagittis gravida urna. Cras nec mi risus.
                    </p>
                    <div class="geme-social-share pt-5 d-flex">
                        <p>Share:</p>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sideber">
                    <div id="stickySidebar">
                        <div class="widget-item">
                            <div class="rating-widget">
                                <h4 class="widget-title">Ratings</h4>
                                <ul>
                                    <li>Price<span>3.5/5</span></li>
                                    <li>Graphics<span>4.5/5</span></li>
                                    <li>Levels<span>3.5/5</span></li>
                                    <li>Levels<span>4.5/5</span></li>
                                    <li>Dificulty<span>4.5/5</span></li>
                                </ul>
                                <div class="rating">
                                    <h5><i>Rating</i><span>4.5</span> / 5</h5>
                                </div>
                            </div>
                        </div>
                        <div class="widget-item">
                            <div class="testimonials-widget">
                                <h4 class="widget-title">Testimonials</h4>
                                <div class="testim-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolo re magna aliqua. Quis ipsum suspend isse ultrices.</p>
                                    <h6><span>James Smith,</span>Gamer</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Games end-->

    <section class="game-author-section">
        <div class="container">
            <div class="game-author-pic set-bg" data-setbg="img/author.jpg"></div>
            <div class="game-author-info">
                <h4>Written by: Michael Williams</h4>
                <p>Vivamus volutpat nibh ac sollicitudin imperdiet. Donec scelerisque lorem sodales odio ultricies, nec rhoncus ex lobortis. Vivamus tincid-unt sit amet sem id varius. Donec elementum aliquet tortor. Curabitur justo mi, efficitur sed eros alique.</p>
            </div>
        </div>
    </section>







