@extends('landingPage.layouts.app', ['activePage' => 'nosimportas'])
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img class="mt-5" src="{{asset('images/tunosimportas/SALUDMENTAL.png')}}" width="75%" alt="">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col cardluc-100 ravie">
                       <strong>SALUD MENTAL</strong>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <img src="{{asset('images/tunosimportas/SALUDMENTALLETRA.jpg')}}" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
