<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Amar Es Educar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Usuarios
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lista de usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Perfil</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{url('/home')}}" class="nav-link {{$activePage=='home'? 'active':' '}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Inicio

                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('quienesSomos')}}" class="nav-link {{$activePage=='Quienes Somos'?'active':''}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quienes Somos

                        </p>
                    </a>
                </li>


                <li class="nav-item has-treeview menu-close {{($activePage=='niño' || $activePage=='joven' || $activePage=='adulto')?'menu-open':''}}">
                    <a href="#" class="nav-link {{($activePage=='niño' || $activePage=='joven' || $activePage=='adulto')?'active':''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Actividades y juegos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/actividades-juegos-admin')}}" class="nav-link {{$activePage=='niño'?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Niños</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/actividades-juegos-joven-admin')}}" class="nav-link {{$activePage=='joven'?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jovenes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/actividades-adultos-admin')}}" class="nav-link {{$activePage=='adulto'?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Adultos</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{url('/test-admin')}}" class="nav-link {{$activePage=='test'?'active':''}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            test

                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('/nos-importas-tu-admin')}}" class="nav-link {{$activePage=='nosimportas'?'active':''}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Tu nos importas

                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{url('/tu-historia-admin')}}" class="nav-link {{$activePage=='historia'?'active':''}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Tu historia

                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('/noticia-admin')}}" class="nav-link {{$activePage=='noticias'?'active':''}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Noticias y novedades

                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
