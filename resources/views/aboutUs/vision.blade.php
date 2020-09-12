@extends('layouts. templateFront.app')
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
                        <a class="list-group-item text-light active" href="{{route('vision')}}">VISIÓN</a>
                        <a class="list-group-item text-dark" href="{{route('philosophy')}}">FILOSOFÍA</a>
                        <a class="list-group-item text-dark" href="{{route('institutionalObjectives')}}">OBJETIVOS INSTITUCIONALES</a>
                        <a class="list-group-item text-dark" href="{{route('organizationChart')}}">ORGANIGRAMA</a>
                    </ul>
                </div>
            </div>

            <div class="col-sm-8">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title">Nuestra Visión:</h1>
                  <p class="card-text"><h4>Ser reconocidos y apoyados como institución, a fin de ampliar la fundación de forma departamental y posteriormente de forma nacional, buscando también crecer en contenidos de abordaje, y que este llegue a niños, jóvenes, adultos.</h4></p>
                </div>
              </div>
            </div>

          </div>

    </div>

@endsection
