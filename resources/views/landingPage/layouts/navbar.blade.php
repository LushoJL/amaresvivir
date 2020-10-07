
<nav class="navbar-expand-lg sticky-top navbar-dark bg-dark nav-personalizado pt-3 pb-3">

    <button class="navbar-toggler ml-3 " type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class=" collapse navbar-collapse " id="navbarToggler">
        <ul class="nav navbar-nav  nav-fill">
            <li class="nav-item">
                <a class="flex-lg-fill text-lg-center nav-link naranjado mt-1 mr-1 mb-1  {{ $activePage == 'inicio' ? ' active' : '' }} " href="{{url('/')}}" style="font-size: 30px">INICIO</a>
            </li>
            <li class="nav-item dropdown">
                <a class="flex-lg-fill text-lg-center nav-link plomo m-1 dropdown-toggle nav-quienessomos {{ ($activePage == 'mision' || $activePage == 'vision' || $activePage == 'objetivo' || $activePage == 'filosofia' || $activePage == 'organigrama') ? ' active' : '' }}" data-toggle="dropdown" href="#">QUIENES <br>SOMOS?</a>
                <div class="dropdown-menu p-3 negro dropdown-menu-quinessomos ">
                    <a class="nav-link naranjado mt-2 p-1"   href="{{ url('/mision') }}">Misión</a>
                    <a class="nav-link naranjado mt-2 p-1"   href="{{ url('/vision') }}" role="tab" aria-controls="v-pills-profile" aria-selected="false">Visión</a>
                    <a class="nav-link naranjado mt-2 p-1"  href="{{ url('/filosofia') }}" role="tab" aria-controls="v-pills-messages" aria-selected="false">Filosofia</a>
                    <a class="nav-link naranjado mt-2 p-1"  href="{{ url('/objetivos_institucionales') }}" role="tab" aria-controls="v-pills-settings" aria-selected="false">Objetivos</a>
                    <a class="nav-link naranjado mt-2 p-1"  href="{{ url('/organigrama') }}" role="tab" aria-controls="v-pills-settings" aria-selected="false">Ornigrama</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="flex-lg-fill text-lg-center nav-link naranjado m-1 dropdown-toggle nav-actividadesJuegos {{ ($activePage == 'niño' || $activePage == 'joven' || $activePage == 'adulto') ? ' active' : '' }}" data-toggle="dropdown" href="{{url('/actividades-juegos')}}" >ACTIVIDADES <br>Y JUEGOS</a>
                <div class="dropdown-menu p-3 negro dropdown-menu-actividadesJuegos">
                    <a class="nav-link plomo mt-2 p-1"   href="{{url('/actividades-juegos')}}" role="tab" aria-controls="v-pills-home" aria-selected="true">Niños</a>
                    <a class="nav-link plomo mt-2 p-1"   href="{{url('/actividades-juegos-joven')}}" role="tab" aria-controls="v-pills-profile" aria-selected="false">Jovenes</a>
                    <a class="nav-link plomo mt-2 p-1"  href="{{url('/actividades-adultos')}}" role="tab" aria-controls="v-pills-messages" aria-selected="false">Adultos</a>
                </div>
            </li>
            <li class="nav-item"> <a class="flex-lg-fill text-lg-center nav-link plomo m-1 {{ $activePage == 'test' ? ' active' : '' }}" style="font-size:30px" href="{{ url('/test') }}">TEST</a></li>

            <li class="nav-item dropdown">
                <a class="flex-lg-fill text-lg-center nav-link naranjado m-1 dropdown-toggle nav-actividadesJuegos {{$activePage == 'nosimportas' ? ' active' : '' }}" data-toggle="dropdown" href="{{url('/actividades-juegos')}}" >TU!! <br> NOS IMPORTAS</a>
                <div class="dropdown-menu p-3 negro dropdown-menu-actividadesJuegos">
                    <a class="nav-link plomo mt-2 p-1"   href="{{route('saludmental')}}" role="tab" aria-controls="v-pills-home" aria-selected="true">COMO CUIDAR LA SALUD MENTAL</a>
                    <a class="nav-link plomo mt-2 p-1"   href="{{route('cuandolloramos')}}" role="tab" aria-controls="v-pills-profile" aria-selected="false">QUE PASA CUANDO LLORAMOS </a>
                    <a class="nav-link plomo mt-2 p-1"  href="{{route('parejasana')}}" role="tab" aria-controls="v-pills-messages" aria-selected="false">UNA PAREJA SANA</a>
                    <a class="nav-link plomo mt-2 p-1"  href="{{route('sentimientos')}}" role="tab" aria-controls="v-pills-messages" aria-selected="false">EMOCIONES VS SENTIMIENTOS</a>
                </div>
            </li>

            <li class="nav-item"> <a class="flex-lg-fill text-lg-center nav-link plomo m-1 {{ $activePage == 'tuhistoria' ? ' active' : '' }}" href="{{ url('/tu-historia') }}">TU <br>HISTORIA</a></li>
            <li class="nav-item"> <a class="flex-lg-fill text-lg-center nav-link naranjado mt-1 ml-1 mb-1 {{ $activePage == 'noticia' ? ' active' : '' }}" href="{{ url('/noticia') }}">NOTICIAS<br> Y NOVEDADES</a></li>
        </ul>
    </div>

</nav>

