@extends('landingPage.layouts.app', ['activePage' => 'mision'])
@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="card naranjado" style="height: 550px; border: black 7px solid">
                    <div class="card-body overflow-auto" >
                        <h1 class="card-title " style="font-family: Ravie;font-size: 50px"><center>Nuestra Misión</center></h1>
                        <p class="card-text">
                            <strong>
                                {!!strtr($dato->mision, array("\r\n" => '<br /><br />', "\r" => '<br /><br />', "\n" => '<br /><br />'))!!}

                            </strong>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <center> <img src="{{asset('images/Conocenos/misionpersonaje.png')}}" alt="misionPersonaje" width="350px">
                </center>
            </div>
          </div>
    </div>

@endsection
