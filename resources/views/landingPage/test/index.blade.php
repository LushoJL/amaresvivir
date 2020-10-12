@extends('landingPage.layouts.app', ['activePage' => 'test'])
@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <a class="testBtn flex-lg-fill text-lg-center nav-link naranjado mt-5 ml-2 mb-5" href="http://prfwebsite.com/Disc_innov/discBeta/discTest.html" target="_blank">TEST DE PERFILES PERSONALES DISC</a>
            <a class="testBtn flex-lg-fill text-lg-center nav-link naranjado mt-5 ml-2 mb-5" href="http://www.thebestyou.es/test-de-ellis/" target="_blank">TEST DE ELLIS</a>
            <a class="testBtn flex-lg-fill text-lg-center nav-link naranjado mt-5 ml-2" href="http://tie.inspvirtual.mx/temporales/cuestionarios/vark_1.html" target="_blank">TEST DE VARK</a>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <center>
            <img src="{{secure_asset('images/feliz.png')}}" class="mt-5" alt="Imagen no encontrada" width="70%">
            </center>
        </div>
    </div>
@endsection
