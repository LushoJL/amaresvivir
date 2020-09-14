
<nav class="navbar-expand-lg sticky-top navbar-dark bg-dark nav-personalizado pt-3 pb-3">

    <button class="navbar-toggler ml-3 " type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class=" collapse navbar-collapse " id="navbarToggler">
        <ul class="nav navbar-nav  nav-fill">
            <li class="nav-item">
                <a class="flex-lg-fill text-lg-center nav-link naranjado mt-1 mr-1 mb-1 active " href="{{secure_url('/inicio')}}" style="font-size: 30px">INICIO</a>
            </li>
            <li class="nav-item dropdown">
                <a class="flex-lg-fill text-lg-center nav-link plomo m-1 dropdown-toggle nav-quienessomos" data-toggle="dropdown" href="#">QUIENES <br>SOMOS?</a>
                <div class="dropdown-menu p-3 negro dropdown-menu-quinessomos ">
                    <a class="nav-link naranjado mt-2 p-1"  href="{{ secure_url('/mision') }}">Misión</a>
                    <a class="nav-link naranjado mt-2 p-1"   href="{{ secure_url('/vision') }}" role="tab" aria-controls="v-pills-profile" aria-selected="false">Visión</a>
                    <a class="nav-link naranjado mt-2 p-1"  href="{{ secure_url('/filosofia') }}" role="tab" aria-controls="v-pills-messages" aria-selected="false">Filosofia</a>
                    <a class="nav-link naranjado mt-2 p-1"  href="{{ secure_url('/objetivos_institucionales') }}" role="tab" aria-controls="v-pills-settings" aria-selected="false">Objetivos</a>
                    <a class="nav-link naranjado mt-2 p-1"  href="{{ secure_url('/organigrama') }}" role="tab" aria-controls="v-pills-settings" aria-selected="false">Ornigrama</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="flex-lg-fill text-lg-center nav-link naranjado m-1 dropdown-toggle nav-actividadesJuegos" data-toggle="dropdown" href="{{secure_url('/actividades-juegos')}}" >ACTIVIDADES <br>Y JUEGOS</a>
                <div class="dropdown-menu p-3 negro dropdown-menu-actividadesJuegos">
                    <a class="nav-link plomo mt-2 p-1"   href="{{secure_url('/actividades-juegos')}}" role="tab" aria-controls="v-pills-home" aria-selected="true">Niños</a>
                    <a class="nav-link plomo mt-2 p-1"   href="{{secure_url('/actividades-juegos-joven')}}" role="tab" aria-controls="v-pills-profile" aria-selected="false">Jovenes</a>
                    <a class="nav-link plomo mt-2 p-1"  href="{{secure_url('/actividades-adultos')}}" role="tab" aria-controls="v-pills-messages" aria-selected="false">Adultos</a>
                </div>
            </li>
            <li class="nav-item"> <a class="flex-lg-fill text-lg-center nav-link plomo m-1" style="font-size:30px" href="{{ secure_url('/construccion') }}">TEST</a></li>
            <li class="nav-item"> <a class="flex-lg-fill text-lg-center nav-link naranjado m-1" href="{{ secure_url('/construccion') }}">TU!! <br> NOS IMPORTAS</a></li>
            <li class="nav-item"> <a class="flex-lg-fill text-lg-center nav-link plomo m-1" href="{{ secure_url('/construccion') }}">TU <br>HISTORIA</a></li>
            <li class="nav-item"> <a class="flex-lg-fill text-lg-center nav-link naranjado mt-1 ml-1 mb-1" href="{{ secure_url('/noticia') }}">NOTICIAS<br> Y NOVEDADES</a></li>
        </ul>
    </div>

</nav>


