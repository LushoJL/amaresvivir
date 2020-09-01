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
                  <h1 class="card-title">Nuestra Filosofía:</h1>
                  <p class="card-text"><h4>Somos una fundación que busca innovar día a día nuevas problemáticas, que afectan a nuestra sociedad, a fin de brindar una buena atención e implementación de nuevas herramientas, que sean de utilidad para la población. Estamos dispuestos a emplear todo nuestro potencial, conocimiento y calidad humana para cumplir nuestros objetivos. Por ello como política de responsabilidad social universitaria, los estudiantes y plantel docente de la Carrera, hace énfasis en la atención, prevención e intervención de los mismos, porque estamos convencidos que Educar es Amar</h4></p>
                </div>
              </div>
            </div>

          </div>

    </div>

@endsection
