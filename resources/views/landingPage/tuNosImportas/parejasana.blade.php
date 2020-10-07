@extends('landingPage.layouts.app', ['activePage' => 'nosimportas'])
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img class="mt-5" src="{{asset('images/tunosimportas/MUÑEQUITOS.png')}}" width="75%" alt="">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col cardluc-100 ravie">
                        <strong>PAREJA SANA</strong>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <img src="{{asset('images/tunosimportas/PAREJASANA.jpg')}}" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
