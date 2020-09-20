@extends('landingPage.layouts.app', ['activePage' => 'niño'])
@section('content')

        <!--    semaforo-->

            <div class="m-auto" style="width: 400px;">
                <figure>
                    <div style="z-index: 2;position: relative">
                        <img src="{{secure_asset('images/ninioactividades/semaforo.png')}}" width="220px" alt=""style="margin-left: 32px">

                    </div>

                    <div class="hover">
                        <a href="{{secure_url('/semaforo-rojo')}}">
                            <div class="hover1"></div>
                        </a>
                        <a href="{{secure_url('/semaforo-amarillo')}}">
                            <div class="hover2" data-toggle="modal" data-target="#rompecabezaamarillo"></div>
                        </a>
                        <a href="{{secure_url('/semaforo-verde')}}">
                            <div class="hover3" data-toggle="modal" data-target="#rompecabezaverde"></div>
                        </a>
                    </div>
                    <div class="luces">
                        <div class="red">

                        </div>
                        <div class="yellow">

                        </div>
                        <div class="green">

                        </div>
                    </div>
                </figure>

            </div>
        <div class="m-auto  naranjado p-3" style="width: 90%;text-align: center;border: black solid 5px">
            <p class="m-auto" style="font-family: Ravie;font-size:2vw ">SEMAFORO DE LA SEXUALIDAD <br> (elija un color)</p>
        </div>



        <!--    fin semaforo-->
@endsection
