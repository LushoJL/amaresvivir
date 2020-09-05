<header id="header">

    <div class="d-flex">
        <nav class="nav-menu d-none d-lg-block" style="margin-left: -32px;width: 102%;margin-right: 7px" >
            <ul >
                <li class="active pnaranja"><a href="{{secure_url('/inicio')}}"><center>INICIO</center></a></li>
                <li class="drop-down pplomo"><a href=""><center>QUIENES <br> SOMOS?</center></a>
                    <ul>
                        <li><a href="{{ secure_url('/mision') }}">MISIÓN</a></li>
                        <li><a href="{{ secure_url('/vision') }}">VISIÓN</a></li>
                        <li><a href="{{ secure_url('/filosofia') }}">FILOSOFÍA</a></li>
                        <li><a href="{{ secure_url('/objetivos_institucionales') }}">OBJETIVOS INSTITUCIONALES</a></li>
                        <li><a href="{{ secure_url('/organigrama') }}">ORGANIGRAMA</a></li>
                    </ul>
                </li>
                <li class="drop-down pnaranja"><a href="{{secure_url('/actividades-juegos')}}"><center>ACTIVIDADES <br> Y JUEGOS</center></a>
                    <ul>
                        <li><a href="{{secure_url('/actividades-juegos')}}">NIÑOS/AS </a></li>
                        <li><a href="{{secure_url('/actividades-juegos-joven')}}">JOVENES</a></li>
                        <li><a href="{{secure_url('/actividades-adultos')}}">ADULTOS</a></li>

                    </ul>
                </li>
                <li class=" pplomo"><a href="{{ secure_url('/construccion') }}"><center>TEST</center></a></li>
                <li class=" pnaranja"><a href="{{ secure_url('/construccion') }}"><center>TU!! <br> NOS IMPORTAS</center></a></li>
                <li class=" pplomo"><a href="{{ secure_url('/construccion') }}"><center>TU HISTORIA</center></a></li>
                <li class=" pnaranja"><a href="{{ secure_url('/noticia') }}"><center>NOTICIAS <br>Y NOVEDADES</center></a></li>

            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
