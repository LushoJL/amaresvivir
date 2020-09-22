@extends('landingPage.layouts.app', ['activePage' => 'objetivo'])
@section('content')





    <div class="container">
        <div class="row mt-5">
            <div class="col-xl-6">
                <center> <img src="{{asset('images/Conocenos/objetivospersonaje.png')}}" alt="objetivosPersonaje" width="450px">
                </center>
            </div>
            <div class="col-xl-6">
                <div class="card naranjado" style="height: 650px; border: black 7px solid">
                    <div class="card-body overflow-auto">
                        <h1 class="card-title " style="font-family: Ravie;font-size: 50px"> <center>Nuestros Objetivos</center></h1>
                        <p class="card-text">
                        <ul>
                            <li>
                                <h4>Formar líderes estudiantiles en la prevención de la violencia, la promoción de la sana convivencia y sexualidad responsable en la ciudad de El Alto.</h4>
                            </li>
                            <li>
                                <h4>Lograr el posicionamiento de la carrera de psicología a través de actividades de promoción de la convivencia pacífica y la sexualidad responsable que conlleven a la prevención de las violencias en los distintos ámbitos de expresión.</h4>
                            </li>
                            <li>
                                <h4>Ampliar los contenidos de abordaje, prevención y promoción, en base a las necesidades presentes en nuestro contexto, y ver las formas de llegar a más lugares usando diferentes medios (redes sociales, medios de comunicación).</h4>
                            </li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
