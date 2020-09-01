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
                        <a class="list-group-item text-dark" href="{{route('institutionalObjectives')}}">OBJETIVOS INSTITUCIONALES</a>
                        <a class="list-group-item text-dark" href="{{route('organizationChart')}}">ORGANIGRAMA</a>
                    </ul>
                </div>
            </div>

            <div class="col-sm-8">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title">Nuestra Misión:</h1>
                  <p class="card-text"><h4>La fundación AMAR EDUCAR ES se dedica al trabajo de prevenir y promocionar la vida sexual de la población Alteña, que tiene como labor realizar proyectos de investigación, programas de ferias orientadas a la prevención y promoción.</h4></p>
                </div>
              </div>
            </div>

          </div>

    </div>

@endsection
