@extends('landingPage.layouts.app', ['activePage' => 'joven'])
@section('content')


    <div class="row ravie">
        <div class="col-md-3">
            <center>
                <img class="personajelbt" src="{{asset('images/jovenactividades/personajeslbt.png')}}" alt="personajes lbt">
            </center>

        </div>
        <div class="col-md-6">
            <img src="{{asset('images/jovenactividades/cuentolgb.png')}}" alt="personajes lbt" width="100%">

        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-12 col-md-12 cardluc negro textoblanco ">
                    <p>DIVERSIDAD</p>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-12 col-md-12 cardluc-100" >
                    <a class="textonegro" href="{{route('hablemosClaro')}}">ANTERIOR</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row lbtTitulo">
        <div class="col-9">

            <div class="lbt coiny textoblanco">
                <p>QUE ES LBT?</p>
            </div>
        </div>
        <div class="col-3 ">

            <img src="{{asset('images/jovenactividades/BANDERA.jpg')}}" class="ml-auto banderalbt" alt="personajes lbt">
        </div>
    </div>
@endsection
