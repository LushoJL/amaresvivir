@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row" style="justify-content: center; width: 100%; height: auto;">
            <div class="col-md-9">
                <div class="card bg-dark text-white text-center">
                    <img class="card-img" src="{{secure_asset('image/banner-orange.jpg')}}" alt="Card image">
                    <div class="card-img-overlay">
                        <h3 style="font-size:1.8vw;" class="font-weight-bolder">BIENVENIDA/O A "RESOLVIENDO CASOS", A CONTINUACIÓN, TE PRESENTAMOS CASOS, Y LUEGO DEBERÁS ELEGIR COMO LO SOLUCIONARÍAS.</h3>
                        <a style="font-size:1vw;" href="#" class="btn btn-dark">COMENZAR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
