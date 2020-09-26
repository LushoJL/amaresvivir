@extends('landingPage.layouts.app', ['activePage' => 'joven'])
@section('content')
   <div class="container ravie">

           <center><h1 class="textonegro">Hablemos claro</h1></center>

       <div class="row justify-content-center">
           <div class="col-6">
               <img src="{{asset('images/jovenactividades/hombremujer.png')}}" alt="hombre mujer" width="100%">
           </div>
       </div>
       <div class="row justify-content-center">
           <div class="col-6">
               <div class="cardluc-100 naranjado">
                   <a href="{{route('hablemosClaro')}}" class="textonegro">Empezar</a>
               </div>
           </div>
       </div>

   </div>
@endsection
