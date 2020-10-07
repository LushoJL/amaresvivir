@extends('admin.layouts.app',['activePage'=>'niño'])
@section('contentWrapper')
    <hr>
    <center><h1>SEMAFORO</h1></center>

    <semaforo-component :url="'{{Storage::disk('s3')->url('public')}}'"></semaforo-component>
    <br>
    <hr>

            <center><h1>Rol 1</h1></center>
            <admin-rol-component
                :urluno="'{{Storage::disk('s3')->url('public/rol/Roluno')}}'"


            ></admin-rol-component>

            <br>
            <hr>

            <center><h1>Rol 2</h1></center>
            <admin-rol2-component
                :urluno="'{{Storage::disk('s3')->url('public/rol/Roldos')}}'">

            </admin-rol2-component>
            <br>
            <hr>

            <center><h1>Rol 3</h1></center>
            <admin-rol3-component
                :urluno="'{{Storage::disk('s3')->url('public/rol/Roltres')}}'">

            </admin-rol3-component>


@endsection
