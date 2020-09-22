@extends('landingPage.layouts.app', ['activePage' => 'joven'])
@section('content')
    <div id="containerPHASER"></div>
    <script src="{{asset('js/phaser/jovenes/actividadDos/src/init.js') }}" type="module"></script>

@endsection
