@extends('landingPage.layouts.app', ['activePage' => 'objetivo'])
@section('content')





    <div class="container">
        <div class="row mt-5">
            <div class="col-xl-6">
                <center> <img src="{{asset('images/Conocenos/objetivospersonaje.png')}}" alt="objetivosPersonaje" width="450px">
                </center>
            </div>
            <div class="col-xl-6">
                <div class="card naranjado" style="height: 650px; border: black 7px solid">
                    <div class="card-body overflow-auto">
                        <h1 class="card-title " style="font-family: Ravie;font-size: 50px"> <center>Nuestros Objetivos</center></h1>
                        <p class="card-text coiny">
                            <strong>
                                {!!strtr($dato->objetivo, array("\r\n" => '<br /><br />', "\r" => '<br /><br />', "\n" => '<br /><br />'))!!}

                            </strong>

                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
