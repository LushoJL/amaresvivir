<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/icofont/icofont.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/app.css')}}"  rel="stylesheet">


    <!--Swiper-->
    <link rel="stylesheet" href="{{ asset('css/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiperStyles.css') }}">
</head>
<body>
<!-- ======= Top Bar ======= -->
<div>
    <div class="container mt-3" >
        <div class="row">
            <div class="col-2">
                <img src="{{asset('image/topBar/logo.png')}}" width="100%">
            </div>
            <div class="col-7">
                <img src="{{asset('image/topBar/logo2.jpg')}}"  width="100%">
            </div>
            <div class="col-3">
                <img src="{{asset('image/topBar/logo1.png')}}" width="100%">
            </div>
        </div>
    </div>
</div>

<!-- ======= Header ======= -->git
<header id="header">
    <div class="container d-flex">
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{route('start')}}">INICIO</a></li>
                <li class="drop-down"><a href="">¿QUIENES SOMOS?</a>
                    <ul>
                        <li><a href="#">MISIÓN</a></li>
                        <li><a href="#">VISIÓN</a></li>
                        <li><a href="#">FILOSOFÍA</a></li>
                        <li><a href="#">OBJETIVOS INSTITUCIONALES</a></li>
                        <li><a href="#">ORGANIGRAMA</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="{{route('activitygame')}}">ACTIVIDADES Y JUEGOS</a>
                    <ul>
                        <li><a href="{{route('activitygame')}}">NIÑOS/AS </a></li>
                        <li><a href="#">JOVENES</a></li>
                        <li><a href="#">ADULTOS</a></li>

                    </ul>
                </li>
                <li class=""><a href="index.html">TEST</a></li>
                <li class=""><a href="index.html">NOS IMPORTAS TU</a></li>
                <li class=""><a href="index.html">TU HISTORIA</a></li>
                <li class=""><a href="index.html">NOTICIAS</a></li>

            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->

<!-- ======= Header ======= -->
<div id="app">
    <main id="main">
        @yield('content')
    </main>
</div>
<!-- End Header -->
<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>


<script src="{{asset('js/bootstrap/jquery-3.5.1.slim.min.js')}}"></script>
<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('js/jquery-sticky/jquery.sticky.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

<script src="{{ asset('js/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{asset('js/main.js')}}"></script>

@yield('swiper')

</body>
</html>
