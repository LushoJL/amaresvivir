
@extends('landingPage.layouts.app', ['activePage' => 'niño'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <img src="{{asset('images/ninioactividades/cuento1ninos.png')}}" alt="" width="100%">
                <div class="section mb-5 mt-5"><center><a href="{{secure_url('/quiz-nino')}}" class="btn btn-outline-primary">Preguntas</a></center></div>

            </div>
            <div class="col-lg-3 m-auto">
                <img src="{{asset('images/ninioactividades/niñoactividades.png')}}" alt="" width="100%">
            </div>
        </div>


    </div>


@endsection
