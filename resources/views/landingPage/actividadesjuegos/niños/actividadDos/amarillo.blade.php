
@extends('landingPage.layouts.app', ['activePage' => 'niño'])
@section('content')

    <div class="container">
        <div class="rompecabeza">
            <div class="base">
                <img src="{{Storage::disk('s3')->url('public/amarillo/base.jpg')}}" alt=""
                     class="mt-0 ">
            </div>

            <div class="piezas">


                <img src="{{Storage::disk('s3')->url('public/amarillo/1.jpg')}}" class="pieza"
                     id="img1">
                <img src="{{Storage::disk('s3')->url('public/amarillo/2.jpg')}}" class="pieza"
                     id="img2">
                <img src="{{Storage::disk('s3')->url('public/amarillo/3.jpg')}}" class="pieza"
                     id="img3">

                <img src="{{Storage::disk('s3')->url('public/amarillo/4.jpg')}}" class="pieza"
                     id="img4">
                <img src="{{Storage::disk('s3')->url('public/amarillo/5.jpg')}}" class="pieza"
                     id="img5">
                <img src="{{Storage::disk('s3')->url('public/amarillo/6.jpg')}}" class="pieza"
                     id="img6">

                <img src="{{Storage::disk('s3')->url('public/amarillo/7.jpg')}}" class="pieza"
                     id="img7">
                <img src="{{Storage::disk('s3')->url('public/amarillo/8.jpg')}}" class="pieza"
                     id="img8">
                <img src="{{Storage::disk('s3')->url('public/amarillo/9.jpg')}}" class="pieza"
                     id="img9">
            </div>
            <script type="text/javascript">
                var dataMensaje = @json($color->amarillo);
            </script>
        </div>
    </div>
@endsection
