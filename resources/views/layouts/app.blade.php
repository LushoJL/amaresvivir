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
    <link rel="stylesheet" href="{{ secure_asset('css/sweetalert2/animate.min.css') }}">
    <!--otros-->
    <link rel="stylesheet" href="{{secure_asset('css/radioStyle.css')}}">
{{--    draggdable--}}
    <link rel="stylesheet" href="{{secure_asset('css/jquery-ui/jquery-ui.css')}}">
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
<script src="{{secure_asset('js/bootstrap/jquery.min.js')}}"></script>

<script src="{{secure_asset('js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{secure_asset('js/bootstrap/popper.min.js')}}"></script>
 <script src="{{secure_asset('js/jquery-sticky/jquery.sticky.js')}}"></script>



<script src="{{secure_asset('js/main.js')}}"></script>
<script src="{{secure_asset('js/swiper/swiper-bundle.min.js') }}"></script>

<script src="{{secure_asset('js/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script src="{{secure_asset('js/app.js')}}"></script>

<script src="{{secure_asset('js/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{secure_asset('js/jquery-touch/jquery.ui.touch-punch.min.js')}}"></script>
<script>

    $(document).ready(function () {
        var piezas=$('.pieza');//obteniendo todas las piezas de la clase pieza del html
        var pos=11;//esto es para poner primera fila
        //tamaño para cada pieza
        var width=[134,191,134,163,135,163,136,193,136]

        //posiciones de cada pieza
        var Y = [20, 20, 20, 151, 124, 151, 256, 284, 256];
        var X = [20, 125, 286, 20, 153, 257, 20, 125, 285];

        //cambia de tamaño a las piezas y agrega draggable para arrastrar con mouse o touch
        for (var i=0;i<piezas.length;i++){
            $(piezas[i]).css({'width':width[i],'position':'absolute'})
            $(piezas[i]).draggable({
                containment: ".rompecabeza",
                scroll: false,
                stop: function (event, ui) {
                    posicionar(ui.position.left, ui.position.top, $(this));

                },
                start:function (){
                    $(this).css({'z-index': pos});
                    pos++;
                }
            });
        }

        //para el responsive
        const mediumBp = matchMedia('(max-width: 800px)');
        const changeSize = mql =>{
            if (mql.matches){
                pienzasDesordenadas(5,264,420,636);
            }else{
                pienzasDesordenadas(420,604,10,200);
            }

        }
        mediumBp.addListener(changeSize);
        changeSize(mediumBp);
        //sin responsive

        //para mezclar piezas cuando no esta armado
        function pienzasDesordenadas(minX, maxX,minY, maxY){
            for (var i=0;i<piezas.length;i++){
                var cssX = parseInt($(piezas[i]).css('left').slice(0, -2));
                var cssY = parseInt($(piezas[i]).css('top').slice(0, -2));
                if (!(cssY>=0 && cssY <=400 && cssX >=0 && cssX <420)){
                    $(piezas[i]).css({'left': Math.random() * (maxX - minX) + minX,'top': Math.random() * (maxY - minY) + minY,'z-index':Math.random() * (10 - 1) + 1});
                }
            }
        }

        //pone la pieza en su lugar
        function posicionar(x, y, pieza) {
            for (var i = 0; i < 9; i++) {
                if (Math.abs(x - X[i]) < 35 && Math.abs(y - Y[i]) < 35) {
                    pieza.css({'top': Y[i], 'left': X[i]});
                }
            }
            tester();
        }
        var win = document.getElementById("win");
        //verefica su todas las piezas estan en su lugar
        function tester(){
            var c=0;
            for (var i=0;i<piezas.length;i++) {
                var cssX = parseInt($(piezas[i]).css('left').slice(0, -2));
                var cssY = parseInt($(piezas[i]).css('top').slice(0, -2));
                if ( cssX===X[i] && cssY===Y[i]){
                    c++;
                }
            }
            if (c===9){
                //cuando termino de armar rompecabeza
                win.play();///
            }

        }

    });
</script>

<script src="{{secure_asset('js/sweetalert2/sweetalert2.min.js') }}"></script>


@yield('swiper')

</body>
</html>
