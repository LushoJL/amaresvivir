@extends('landingPage.layouts.app', ['activePage' => 'joven'])
@section('content')
    <center><h1 class="ravie textonegro">hablemos claro</h1>
    </center>
    <br>
    <br>



    <div class="row justify-content-around coiny">
        <div class="col-md-3 negro cardluc">

            <a href="{{route('diversidad')}}" class="textoblanco"><strong>DIVERSIDAD</strong> </a>

        </div>
        <div class="col-md-4 naranjado cardluc" >

            <a href="{{route('autoconocimiento')}}" class="textoblanco"><strong>AUTOCONOCIMIENTO</strong></a>

        </div>
        <div class="col-md-3 negro cardluc">

            <a href="{{route('afectividad')}}" class="textoblanco"><strong>AFECTIVIDAD</strong></a>

        </div>
    </div>
    <br>
    <div class="row justify-content-around coiny textoblanco">
        <div class="col-md-3 naranjado cardluc">

            <a href="{{route('vidasalud')}}" class="textoblanco"><strong>VIDA/SALUD</strong></a>

        </div>
        <div class="col-md-4 negro cardluc">

            <a href="{{route('embarazo')}}" class="textoblanco"><strong>ANTICONCEPCION Y EMBARAZO</strong></a>

        </div>
        <div class="col-md-3 naranjado cardluc">

            <a href="{{route('its')}}" class="textoblanco"><strong>ITS / RIESGOS</strong></a>

        </div>
    </div>

@endsection
