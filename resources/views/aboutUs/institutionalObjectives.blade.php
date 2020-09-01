@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row mt-3">

            <div class="col-4">
                <div class="card" >
                    <div class="card-header">
                        <b>CONÓCENOS</b>
                    </div>
                    <ul class="list-group list-group-flush">
                        <a class="list-group-item text-dark" href="{{route('mission')}}">MISIÓN</a>
                        <a class="list-group-item text-dark" href="{{route('vision')}}">VISIÓN</a>
                        <a class="list-group-item text-dark" href="{{route('philosophy')}}">FILOSOFÍA</a>
                        <a class="list-group-item text-light active" href="{{route('institutionalObjectives')}}">OBJETIVOS INSTITUCIONALES</a>
                        <a class="list-group-item text-dark" href="{{route('organizationChart')}}">ORGANIGRAMA</a>
                    </ul>
                </div>
            </div>

            <div class="col-sm-8">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title">Nuestra Misión:</h1>
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
