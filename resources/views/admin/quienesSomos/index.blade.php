@extends('admin.layouts.app',['activePage'=>'Quienes Somos'])
@section('contentWrapper')

<conocenos-component :urlstorage="'{{Storage::disk('s3')->url('/')}}'"></conocenos-component>
@endsection
