
@extends('landingPage.layouts.app', ['activePage' => 'niño'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <img src="{{secure_asset('images/ninioactividades/cuento1ninos.png')}}" alt="" width="100%">
                <div class="section mb-5 buttonQuestion"><center><button class="btn btn-outline-primary" id="btnQuestionBoy">Preguntas</button></center></div>

            </div>
            <div class="col-lg-3 m-auto">
                <img src="{{secure_asset('images/ninioactividades/niñoactividades.png')}}" alt="" width="100%">
            </div>
        </div>


    </div>


@endsection
