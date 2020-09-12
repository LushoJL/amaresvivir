@extends('layouts. templateFront.app')
@section('content')

    <div class="container">
        <div class="row mt-3 justify-content-center">
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
                        <a class="list-group-item text-light active" href="{{route('organizationChart')}}">ORGANIGRAMA</a>
                    </ul>
                </div>
            </div>

            <div class="col-8 my-2">
              <h3 class="display-4">Organigrama:</h3>
              <img src="{{ secure_asset('image/organization.jpg') }}" alt="inserte imagen" width="100%">
            </div>

          </div>
    </div>

@endsection
