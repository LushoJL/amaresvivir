@extends('admin.layouts.app',['activePage'=>'noticias'])
@section('contentWrapper')
    <news-component
        :urlpubl="'{{asset('image/insert.png')}}'"
    ></news-component>
@endsection
