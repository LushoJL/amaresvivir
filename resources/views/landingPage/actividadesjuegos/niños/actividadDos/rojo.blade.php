
@extends('landingPage.layouts.app', ['activePage' => 'niño'])
@section('content')

        <div class="rompecabeza">
            <div class="base">
                <img src="{{Storage::url('public/rojo/base.jpg')}}" alt=""
                     class="mt-0 ">
            </div>

            <div class="piezas">


                <img src="{{Storage::url('public/rojo/1.jpg')}}" class="pieza"
                     id="img1">
                <img src="{{Storage::url('public/rojo/2.jpg')}}" class="pieza"
                     id="img2">
                <img src="{{Storage::url('public/rojo/3.jpg')}}" class="pieza"
                     id="img3">

                <img src="{{Storage::url('public/rojo/4.jpg')}}" class="pieza"
                     id="img4">
                <img src="{{Storage::url('public/rojo/5.jpg')}}" class="pieza"
                     id="img5">
                <img src="{{Storage::url('public/rojo/6.jpg')}}" class="pieza"
                     id="img6">

                <img src="{{Storage::url('public/rojo/7.jpg')}}" class="pieza"
                     id="img7">
                <img src="{{Storage::url('public/rojo/8.jpg')}}" class="pieza"
                     id="img8">
                <img src="{{Storage::url('public/rojo/9.jpg')}}" class="pieza"
                     id="img9">
            </div>

            <audio id="win" src="https://raw.githubusercontent.com/NestorPlasencia/PikaPuzzle/master/media/win.mp3"></audio>
        </div>

@endsection
