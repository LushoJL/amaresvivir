@extends('landingPage.layouts.app', ['activePage' => 'joven'])
@section('content')
    <div class="container textoblanco ">
        <div class="row justify-content-end">
            <div class="col-md-7 ">
                <div class="row ml-auto mr-auto naranjado cardluc-100">
                    <div class="col-md-12 coiny">
                        <strong>ANTICONCEPCION</strong>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12">
                        <center>
                            <img src="{{asset('images/jovenactividades/EMBARAZO.png')}}" alt="objetivospersonaje" width="60%">
                        </center>
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
