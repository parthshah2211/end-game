=<!-- Header section -->
<header class="header-section">
    <div class="header-warp">

        <div class="header-bar-warp d-flex">
            <!-- site logo -->
            <a href="home.html" class="site-logo">
                <img src="{{asset('img/logo.png')}}"  style="height:110q;width:105px; align-self: center">
            </a>
            <nav class="top-nav-area w-100">
                <div class="user-panel">
                    @guest
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="padding-left: 10px">Register</a>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest

                </div>
                <!-- Menu -->
                <!-- Menu -->
                <ul class="main-menu primary-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="">Tournamnet</a>
                        <ul class="sub-menu">
                            <li><a href="{{url('/tournament')}}" >free fite </a></li>


                            <li><a href="{{url('/comingsoon')}}">PUBG</a></li>
                            <li><a href="{{url('/tournament')}}">COD</a></li>
                        </ul>
                    </li>
                    <li><a href="review.html">screems</a>
                        <ul class="sub-menu">
                            <li><a href="screms.html">Free-Fire</a></li>


                            <li><a href="screms.html">PUBG</a>
                                <ul class="sub-menu">
                                    <li><a href="screms.html">free</a>
                                    </li>

                                </ul>
                            <li><a href="game-single.html">COD</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('/give_way')}}">Give-Way</a>
                        <ul class="sub-menu">
                            <li><a href="{{url('/give_way/free-fire')}}">Free-Fire</a></li>


                            <li><a href="{{url('/give_way')}}">PUBG</a></li>
                            <li><a href="{{url('/give_way')}}">COD</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('/News')}}">News</a>
                        <ul class="sub-menu">
                            <li><a href="{{url('/News')}}">Free-Fire</a></li>


                            <li><a href="News.html">PUBG</a></li>
                            <li><a href="News.html">COD</a></li>
                        </ul>
                    </li>

                    <li><a href="{{('/contact')}}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Header section end -->
