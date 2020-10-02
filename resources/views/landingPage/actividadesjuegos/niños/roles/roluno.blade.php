@extends('landingPage.layouts.app', ['activePage' => 'niño'])
@section('content')
    <div id="app">
        <app-component :ninio="'{{asset('images/ninioactividades/niñoactividades.png')}}'"
                       :ninia="'{{asset('images/ninioactividades/niñaactividades.png')}}'"
                       :ambos="'{{asset('images/ninioactividades/AMBOS.png')}}'"
                       :uri="'{{Storage::disk('s3')->url('/public/rol')}}'"
        ></app-component>
    </div>
    <script src="{{asset('js/app.js') }}"></script>
@endsection
