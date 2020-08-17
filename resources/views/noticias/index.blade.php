@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="my-5 text-center text-primary">Noticias Unifranz</h2>
        <hr>

        <div class="row">
            <!-- entrada-->
            <div class="col-lg-8">
                <!--entrada-->
                <div class="card-body">
                    <a href="{{route('article')}}">
                        <h2> Titulo de Entrada</h2>
                    </a>
                    <p class="small mb-0"> Fecha: 22-04-2020</p>
                    <p class="small mb-0"> Autor: eli</p>
                    <p class="small">categorias: <a href="#">Noticias</a> / <a href="#">Actividades</a> </p>
                    <img src="{{secure_asset('noticias/img/foto.jpg')}}" alt="" class="img-fluid"><br><br>
                    <p>El Alto. Junio.  Con el objetivo de generar nuevas ideas y conocer
                        las nuevas tendencias y estrategias en marketing digital internacional,
                        la carrera de Ingeniería Comercial organizó el Webinar «Digitalización:
                        Re-inventando tu Negocio”, donde reunió a especialistas en marketing
                        digital  de Bolivia, Colombia y Argentina; quienes desarrollaron
                        temáticas fundamentales para los micro empresarios en el contexto
                        de cuarentena y pandemia fruto del COVID-19: Digitalización de los
                        clientes UX y el manejo de las redes sociales para generar más ventas.</p><br>

                    <a href="{{route('article')}}" class="btn btn-primary">Más info...</a>
                </div>
                <!--entradas-->
                <hr>
                <div class="card-body">
                    <a href="{{route('article')}}">
                        <h2> Titulo de Entrada</h2>
                    </a>
                    <p class="small mb-0"> Fecha: 22-04-2020</p>
                    <p class="small mb-0"> Autor: eli</p>
                    <p class="small">categorias: <a href="#">Noticias</a> / <a href="#">Actividades</a> </p>
                    <img src="{{asset('noticias/img/foto.jpg')}}" alt="" class="img-fluid"><br><br>
                    <p>El Alto. Junio.  Con el objetivo de generar nuevas ideas y conocer
                        las nuevas tendencias y estrategias en marketing digital internacional,
                        la carrera de Ingeniería Comercial organizó el Webinar «Digitalización:
                        Re-inventando tu Negocio”, donde reunió a especialistas en marketing
                        digital  de Bolivia, Colombia y Argentina; quienes desarrollaron
                        temáticas fundamentales para los micro empresarios en el contexto
                        de cuarentena y pandemia fruto del COVID-19: Digitalización de los
                        clientes UX y el manejo de las redes sociales para generar más ventas.</p>
                    <a href="{{route('article')}}" class="btn btn-primary">Más info...</a>
                </div>
                <!--entradas-->
                <!--paguinacion-->
                <div class="card-body">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">anterior</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">siguiente</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--paginacion-->
            </div>


            <!--entradas-->
            <!--aside-->
            <div class="col-lg-3">

            </div>
            <!--aside-->


        </div>
    </div>
@endsection
