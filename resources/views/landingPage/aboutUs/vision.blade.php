@extends('landingPage.layouts.app', ['activePage' => 'vision'])
@section('content')


    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6">
                <center> <img src="{{asset('images/Conocenos/visionpersonaje.png')}}" alt="visionPersonaje" width="450px">
                </center>
            </div>
            <div class="col-lg-6">
                <div class="card naranjado" style="height: 550px; border: black 7px solid">
                    <div class="card-body overflow-auto">

                        <h1 class="card-title " style="font-family: Ravie;font-size: 50px"><center>Nuestra visión</center> </h1>
                        <p class="card-text"><h4>Ser reconocidos y apoyados como institución, a fin de ampliar la fundación de forma departamental y posteriormente de forma nacional, buscando también crecer en contenidos de abordaje, y que este llegue a niños, jóvenes, adultos.</h4></p>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
