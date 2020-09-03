<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--====== Javascripts & Jquery ======-->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Stylesheets -->
{{--        <link rel="stylesheet"  href="{{ asset('css/login.css') }}"  href="css/bootstrap.min.css"/>--}}
    <link rel="stylesheet" href="{{asset('css/main-site/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/main-site/slicknav.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/main-site/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/main-site/magnific-popup.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/main-site/animate.css')}}"/>

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/main-site/style.css')}}"/>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">

     @include('common.header')
    @if(\Illuminate\Support\Facades\Route::current()->getName() !== 'login' &&  \Illuminate\Support\Facades\Route::current()->getName() !== 'register')
        @include('common.footer')
    @endif
    <main>
        @yield('content')
    </main>



</div>

<!--====== Javascripts & Jquery ======-->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
{{--    <script src="{{asset('js/bootstrap.min.js')}}"></script>--}}
<script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.sticky-sidebar.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
@yield('section-js')
</body>
</html>
