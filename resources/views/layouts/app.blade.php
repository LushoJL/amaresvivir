{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>Amar es Educar</title>--}}

{{--    <!-- Fonts -->--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">--}}

{{--    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}" crossorigin="anonymous">--}}
{{--    <link href="{{asset('css/style.css')}}" rel="stylesheet">--}}
{{--    <link href="{{asset('css/icofont/icofont.min.css')}}" rel="stylesheet">--}}

{{--    <link rel="stylesheet" href="{{asset('css/app.css')}}"  rel="stylesheet">--}}


{{--    <!--Swiper-->--}}
{{--    <link rel="stylesheet" href="{{asset('css/swiper/swiper-bundle.min.css') }}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/swiperStyles.css') }}">--}}
{{--    <!--sweetalert-->--}}
{{--    <link rel="stylesheet" href="{{ asset('css/sweetalert2/sweetalert2.min.css') }}">--}}
{{--</head>--}}
{{--<body>--}}
{{--<!-- ======= Top Bar ======= -->--}}
{{--<div>--}}
{{--    <div class="container mt-3" >--}}
{{--        <div class="row">--}}
{{--            <div class="col-2">--}}
{{--                <img src="{{asset('image/topBar/logo.png')}}" width="100%">--}}
{{--            </div>--}}
{{--            <div class="col-7">--}}
{{--                <img src="{{asset('image/topBar/logo2.jpg')}}"  width="100%">--}}
{{--            </div>--}}
{{--            <div class="col-3">--}}
{{--                <img src="{{asset('image/topBar/logo1.png')}}" width="100%">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<!-- ======= Header ======= -->--}}
{{--<header id="header">--}}
{{--    <div class="container d-flex">--}}
{{--        <nav class="nav-menu d-none d-lg-block">--}}
{{--            <ul>--}}
{{--                <li class="active"><a href="{{route('start')}}">INICIO</a></li>--}}
{{--                <li class="drop-down"><a href="">¿QUIENES SOMOS?</a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="{{ route('mission') }}">MISIÓN</a></li>--}}
{{--                        <li><a href="{{ route('vision') }}">VISIÓN</a></li>--}}
{{--                        <li><a href="{{ route('philosophy') }}">FILOSOFÍA</a></li>--}}
{{--                        <li><a href="{{ route('institutionalObjectives') }}">OBJETIVOS INSTITUCIONALES</a></li>--}}
{{--                        <li><a href="{{ route('organizationChart') }}">ORGANIGRAMA</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="drop-down"><a href="{{route('activitygame')}}">ACTIVIDADES Y JUEGOS</a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="{{route('activitygame')}}">NIÑOS/AS </a></li>--}}
{{--                        <li><a href="#">JOVENES</a></li>--}}
{{--                        <li><a href="#">ADULTOS</a></li>--}}

{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class=""><a href="{{ route('construction') }}">TEST</a></li>--}}
{{--                <li class=""><a href="{{ route('construction') }}">NOS IMPORTAS TU</a></li>--}}
{{--                <li class=""><a href="{{ route('construction') }}">TU HISTORIA</a></li>--}}
{{--                <li class=""><a href="{{ route('construction') }}">NOTICIAS</a></li>--}}

{{--            </ul>--}}
{{--        </nav><!-- .nav-menu -->--}}
{{--    </div>--}}
{{--</header><!-- End Header -->--}}

{{--<!-- ======= Header ======= -->--}}
{{--<div id="app">--}}
{{--    <main id="main">--}}
{{--        @yield('content')--}}
{{--    </main>--}}
{{--</div>--}}
{{--<!-- End Header -->--}}
{{--<script src="{{asset('js/bootstrap/jquery-3.5.1.slim.min.js')}}"></script>--}}

{{--<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>--}}
{{--<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>--}}
{{--<script src="{{asset('js/bootstrap/popper.min.js')}}"></script>--}}
{{-- <script src="{{asset('js/jquery-sticky/jquery.sticky.js')}}"></script> --}}

{{--<script src="{{asset('js/main.js')}}"></script>--}}
{{--<script src="{{asset('js/app.js')}}"></script>--}}

{{--<script src="{{asset('js/swiper/swiper-bundle.min.js') }}"></script>--}}

{{--<script src="{{asset('js/sweetalert2/sweetalert2.all.min.js') }}"></script>--}}


{{--@yield('swiper')--}}

{{--</body>--}}
{{--</html>--}}


{{--para heroku--}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Amar es Educar</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{secure_asset('css/bootstrap/bootstrap.min.css')}}" crossorigin="anonymous">
    <link href="{{secure_asset('css/style.css')}}" rel="stylesheet">
    <link href="{{secure_asset('css/icofont/icofont.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{secure_asset('css/app.css')}}"  rel="stylesheet">


    <!--Swiper-->
    <link rel="stylesheet" href="{{secure_asset('css/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{secure_asset('css/swiperStyles.css') }}">
    <!--sweetalert-->
    <link rel="stylesheet" href="{{ secure_asset('css/sweetalert2/sweetalert2.min.css') }}">
</head>
<body>
<!-- ======= Top Bar ======= -->
<div>
    <div class="container mt-3" >
        <div class="row">
            <div class="col-2">
                <img src="{{secure_asset('image/topBar/logo.png')}}" width="100%">
            </div>
            <div class="col-7">
                <img src="{{secure_asset('image/topBar/logo2.jpg')}}"  width="100%">
            </div>
            <div class="col-3">
                <img src="{{secure_asset('image/topBar/logo1.png')}}" width="100%">
            </div>
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header">
    <div class="container d-flex">
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{route('start')}}">INICIO</a></li>
                <li class="drop-down"><a href="">¿QUIENES SOMOS?</a>
                    <ul>
                        <li><a href="{{ route('mission') }}">MISIÓN</a></li>
                        <li><a href="{{ route('vision') }}">VISIÓN</a></li>
                        <li><a href="{{ route('philosophy') }}">FILOSOFÍA</a></li>
                        <li><a href="{{ route('institutionalObjectives') }}">OBJETIVOS INSTITUCIONALES</a></li>
                        <li><a href="{{ route('organizationChart') }}">ORGANIGRAMA</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="{{route('activitygame')}}">ACTIVIDADES Y JUEGOS</a>
                    <ul>
                        <li><a href="{{route('activitygame')}}">NIÑOS/AS </a></li>
                        <li><a href="#">JOVENES</a></li>
                        <li><a href="#">ADULTOS</a></li>

                    </ul>
                </li>
                <li class=""><a href="{{ route('construction') }}">TEST</a></li>
                <li class=""><a href="{{ route('construction') }}">NOS IMPORTAS TU</a></li>
                <li class=""><a href="{{ route('construction') }}">TU HISTORIA</a></li>
                <li class=""><a href="{{ route('construction') }}">NOTICIAS</a></li>

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
<script src="{{secure_asset('js/bootstrap/jquery-3.5.1.slim.min.js')}}"></script>

<script src="{{secure_asset('js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{secure_asset('js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{secure_asset('js/bootstrap/popper.min.js')}}"></script>
{{-- <script src="{{secure_asset('js/jquery-sticky/jquery.sticky.js')}}"></script> --}}

<script src="{{secure_asset('js/main.js')}}"></script>
<script src="{{secure_asset('js/app.js')}}"></script>

<script src="{{secure_asset('js/swiper/swiper-bundle.min.js') }}"></script>

<script src="{{secure_asset('js/sweetalert2/sweetalert2.all.min.js') }}"></script>


@yield('swiper')

</body>
</html>

