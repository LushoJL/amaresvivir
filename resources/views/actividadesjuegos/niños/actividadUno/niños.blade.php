@extends('layouts.app')
@section('content')
    <style>


    </style>
    <!--elegir niño o niña-->
    <div class="d-flex justify-content-center">
        <a href="{{route('boy')}}">
            <div class="box box-1">
                <h3>Niño</h3>
                <div class="image" >
                    <img src="{{asset('image/actividadesyjuegos/niño.jpg')}}" width="350" alt="For you..." />
                </div>
            </div>
        </a>

        <a href="{{route('girl')}}">
            <div class="box box-2">
                <h3>Niña</h3>
                <div class="image">
                    <img src=" {{asset('image/actividadesyjuegos/niña.jpg')}}" width="350" alt="For you..." />
                </div>
            </div>
        </a>



    </div>

@endsection
