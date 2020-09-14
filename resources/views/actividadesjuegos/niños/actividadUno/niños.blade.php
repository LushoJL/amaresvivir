@extends('layouts. templateFront.app')
@section('content')

    <!--elegir niño o niña-->

<div class="container">
    <div class="row pt-5">
        <div class="col-xl-6">
            <center>
                <img src="{{secure_asset('images/ninioactividades/niñoactividades.png')}}" alt="niño" width="60%" class="mt-5">
                <a href="{{secure_url('/actividades-juegos-niño')}}" style="background: black">
                    <div class="naranjado m-4" style="width: 100px;height: 100px;border-radius: 100px;border: black solid 7px"></div>
                </a>
            </center>
        </div>
        <div class="col-xl-6">
            <center>
                <img src="{{secure_asset('images/ninioactividades/niñaactividades.png')}}" alt="niño" width="60%">
                <center>
                    <a href="{{secure_url('/actividades-juegos-niña')}}" style="background: black">
                        <div class="naranjado m-4" style="width: 100px;height: 100px;border-radius: 100px;border: black solid 7px"></div>
                    </a>
                </center>
            </center>
        </div>
    </div>
</div>

@endsection
