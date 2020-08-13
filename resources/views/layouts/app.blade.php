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

    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/icofont/icofont.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/app.css')}}"  rel="stylesheet">


    <!--Swiper-->
    <link rel="stylesheet" href="{{asset('css/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/swiperStyles.css') }}">
    <!--sweetalert-->
    <link rel="stylesheet" href="{{ asset('css/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sweetalert2/animate.min.css') }}">
    <!--otros-->
    <link rel="stylesheet" href="{{asset('css/radioStyle.css')}}">
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
<script src="{{asset('js/bootstrap/jquery-3.5.1.slim.min.js')}}"></script>

<script src="{{asset('js/bootstrap/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('js/jquery-sticky/jquery.sticky.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/swiper/swiper-bundle.min.js') }}"></script>

<script src="{{asset('js/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script>
    var piezas = document.getElementsByClassName('movil');
    // var tamWidh = [134,192,134,163,134,163,134,192,134];
    // var tamHeight = [163,134,163,134,192,134,163,134,163];
    var tamWidh = [134,192,134,163,134,163,134,192,134];
    var tamHeight = [163,134,163,134,192,134,163,134,163];
    for(var i=0;i<piezas.length;i++){
        piezas[i].setAttribute("width", tamWidh[i]);
        piezas[i].setAttribute("height",tamHeight[i]);
        piezas[i].setAttribute("x", Math.floor((Math.random() * 10) + 1));
        piezas[i].setAttribute("y", Math.floor((Math.random() * 409) + 1));
        piezas[i].setAttribute("onmousedown","seleccionarElemento(evt)");
    }
    var elementSelect = 0;
    var currentX = 0;
    var currentY = 0;
    var currentPosX = 0;
    var currentPosY = 0;
    function seleccionarElemento(evt) {
        elementSelect = reordenar(evt);
        currentX = evt.clientX;
        currentY = evt.clientY;
        currentPosx = parseFloat(elementSelect.getAttribute("x"));
        currentPosy = parseFloat(elementSelect.getAttribute("y"));
        elementSelect.setAttribute("onmousemove","moverElemento(evt)");
    }
    function moverElemento(evt){
        var dx = evt.clientX - currentX;
        var dy = evt.clientY - currentY;
        currentPosx = currentPosx + dx;
        currentPosy = currentPosy + dy;
        elementSelect.setAttribute("x",currentPosx);
        elementSelect.setAttribute("y",currentPosy);
        currentX = evt.clientX;
        currentY = evt.clientY;
        elementSelect.setAttribute("onmouseout","deseleccionarElemento(evt)");
        elementSelect.setAttribute("onmouseup","deseleccionarElemento(evt)");
        iman();
    }
    function deseleccionarElemento(evt){
        testing();
        if(elementSelect != 0){
            elementSelect.removeAttribute("onmousemove");
            elementSelect.removeAttribute("onmouseout");
            elementSelect.removeAttribute("onmouseup");
            elementSelect = 0;
        }
    }
    var entorno = document.getElementById('entorno');
    function reordenar(evt){
        var padre = evt.target.parentNode;
        var clone = padre.cloneNode(true);
        var id = padre.getAttribute("id");
        entorno.removeChild(document.getElementById(id));
        entorno.appendChild(clone);
        return entorno.lastChild.firstChild;
    }
    var origX = [200,304,466,200,333,437,200,304,466];
    var origY = [100,100,100,233,204,233,337,366,337];
    function iman(){
        for(var i=0;i<piezas.length;i++){
            if (Math.abs(currentPosx-origX[i])<15 && Math.abs(currentPosy-origY[i])<15) {
                elementSelect.setAttribute("x",origX[i]);
                elementSelect.setAttribute("y",origY[i]);
            }
        }
    }
    var win = document.getElementById("win");
    function testing() {
        var bien_ubicada = 0;
        var padres = document.getElementsByClassName('padre');
        for(var i=0;i<piezas.length;i++){
            var posx = parseFloat(padres[i].firstChild.getAttribute("x"));
            var posy = parseFloat(padres[i].firstChild.getAttribute("y"));
            ide = padres[i].getAttribute("id");
            if(origX[ide] == posx && origY[ide] == posy){
                bien_ubicada = bien_ubicada + 1;
            }
        }
        if(bien_ubicada == 9){
            win.play();
        }
    }
</script>

<script src="{{asset('js/sweetalert2/sweetalert2.min.js') }}"></script>


@yield('swiper')

</body>
</html>
