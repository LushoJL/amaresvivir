@extends('landingPage.layouts.app', ['activePage' => 'filosofia'])
@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="card naranjado" style="height: 550px; border: black 7px solid">
                    <div class="card-body overflow-auto">
                        <h1 class="card-title " style="font-family: Ravie;font-size: 50px"><center>Nuestra Filosofía</center></h1>
                        <p class="card-text"><h4>Somos una fundación que busca innovar día a día nuevas problemáticas, que afectan a nuestra sociedad, a fin de brindar una buena atención e implementación de nuevas herramientas, que sean de utilidad para la población. Estamos dispuestos a emplear todo nuestro potencial, conocimiento y calidad humana para cumplir nuestros objetivos. Por ello como política de responsabilidad social universitaria, los estudiantes y plantel docente de la Carrera, hace énfasis en la atención, prevención e intervención de los mismos, porque estamos convencidos que Educar es Amar</h4></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <center> <img src="{{asset('images/Conocenos/filosofiapersonaje.png')}}" alt="visionPersonaje" width="450px">
                </center>
            </div>
        </div>
    </div>

@endsection
