@extends('landingPage.layouts.app', ['activePage' => 'joven'])
@section('content')
    <div class="container textoblanco ">
        <div class="row justify-content-end">
            <div class="col-md-7 ">
                <div class="row ml-auto mr-auto naranjado cardluc-100">
                    <div class="col-md-12 coiny">
                        <strong>VIDA Y SALUD</strong>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12">
                        <img src="{{asset('images/jovenactividades/vidaysalud.png')}}" alt="objetivospersonaje" width="65%">
                    </div>
                </div>
                <div class="row ml-auto mr-auto negro cardluc-100">
                    <div class="col-md-12 coiny">
                        <a href="#" class="textoblanco"><strong>LINK</strong></a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 cardluc-100 m-auto " >
                <a class="textonegro ravie" href="{{route('hablemosClaro')}}">ANTERIOR</a>
            </div>
        </div>

    </div>

@endsection
