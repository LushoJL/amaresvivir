@extends('landingPage.layouts.app', ['activePage' => 'mision'])
@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="card naranjado" style="height: 550px; border: black 7px solid">
                    <div class="card-body overflow-auto" >
                        <h1 class="card-title " style="font-family: Ravie;font-size: 50px"><center>Nuestra Misión</center></h1>
                        <p class="card-text">
                        <h4>La fundación AMAR EDUCAR ES se dedica al trabajo de prevenir y promocionar la vida sexual de la población Alteña, que tiene como
                            labor realizar proyectos de investigación, programas de ferias orientadas a la prevención y promoción.
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <center> <img src="{{secure_asset('images/Conocenos/misionpersonaje.png')}}" alt="misionPersonaje" width="350px">
                </center>
            </div>
          </div>
    </div>

@endsection
