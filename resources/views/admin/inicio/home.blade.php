@extends('admin.layouts.app',['activePage'=>'home'])
@section('contentWrapper')

            <center><h2 class="mb-4">Imagenes del carrusel</h2></center>



            <galeria-component :url="'{{Storage::disk('s3')->url('/')}}'"></galeria-component>


@endsection
