@extends('admin.layouts.app',['activePage'=>'home'])
@section('contentWrapper')

            <center><h2 class="mb-4">Imagenes del carrusel</h2></center>


            <galeria-component
                :url="'{{Storage::disk('s3')->url('/')}}'"
                :urlpubl="'{{asset('image/insert.png')}}'"
            ></galeria-component>

@endsection
