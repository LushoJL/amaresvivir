
@extends('landingPage.layouts.app', ['activePage' => 'niño'])
@section('content')

        <div class="rompecabeza mt-5">
            <div class="base">
                <img src="{{Storage::disk('s3')->url('public/rojo/base.jpg')}}" alt=""
                     class="mt-0 ">
            </div>

            <div class="piezas">


                <img src="{{Storage::disk('s3')->url('public/rojo/1.jpg')}}" class="pieza"
                     id="img1">
                <img src="{{Storage::disk('s3')->url('public/rojo/2.jpg')}}" class="pieza"
                     id="img2">
                <img src="{{Storage::disk('s3')->url('public/rojo/3.jpg')}}" class="pieza"
                     id="img3">

                <img src="{{Storage::disk('s3')->url('public/rojo/4.jpg')}}" class="pieza"
                     id="img4">
                <img src="{{Storage::disk('s3')->url('public/rojo/5.jpg')}}" class="pieza"
                     id="img5">
                <img src="{{Storage::disk('s3')->url('public/rojo/6.jpg')}}" class="pieza"
                     id="img6">

                <img src="{{Storage::disk('s3')->url('public/rojo/7.jpg')}}" class="pieza"
                     id="img7">
                <img src="{{Storage::disk('s3')->url('public/rojo/8.jpg')}}" class="pieza"
                     id="img8">
                <img src="{{Storage::disk('s3')->url('public/rojo/9.jpg')}}" class="pieza"
                     id="img9">
            </div>

        </div>
        <script type="text/javascript">
            var dataMensaje = @json($color->rojo);
        </script>
@endsection
