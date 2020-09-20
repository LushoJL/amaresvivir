
@extends('landingPage.layouts.app', ['activePage' => 'niño'])
@section('content')

    <div class="container">
        <div class="rompecabeza">
            <div class="base">
                <img src="{{secure_asset('image/actividadesyjuegos/puzzle/amarillo/base.jpg')}}" alt=""
                     class="mt-0 ">
            </div>

            <div class="piezas">


                <img src="{{secure_asset('image/actividadesyjuegos/puzzle/amarillo/1.jpg')}}" class="pieza"
                     id="img1">
                <img src="{{secure_asset('image/actividadesyjuegos/puzzle/amarillo/2.jpg')}}" class="pieza"
                     id="img2">
                <img src="{{secure_asset('image/actividadesyjuegos/puzzle/amarillo/3.jpg')}}" class="pieza"
                     id="img3">

                <img src="{{secure_asset('image/actividadesyjuegos/puzzle/amarillo/4.jpg')}}" class="pieza"
                     id="img4">
                <img src="{{secure_asset('image/actividadesyjuegos/puzzle/amarillo/5.jpg')}}" class="pieza"
                     id="img5">
                <img src="{{secure_asset('image/actividadesyjuegos/puzzle/amarillo/6.jpg')}}" class="pieza"
                     id="img6">

                <img src="{{secure_asset('image/actividadesyjuegos/puzzle/amarillo/7.jpg')}}" class="pieza"
                     id="img7">
                <img src="{{secure_asset('image/actividadesyjuegos/puzzle/amarillo/8.jpg')}}" class="pieza"
                     id="img8">
                <img src="{{secure_asset('image/actividadesyjuegos/puzzle/amarillo/9.jpg')}}" class="pieza"
                     id="img9">
            </div>

            <audio id="win" src="https://raw.githubusercontent.com/NestorPlasencia/PikaPuzzle/master/media/win.mp3"></audio>
        </div>
    </div>
@endsection
