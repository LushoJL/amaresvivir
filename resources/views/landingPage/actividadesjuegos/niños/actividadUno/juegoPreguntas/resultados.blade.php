@extends('landingPage.layouts.app', ['activePage' => 'niño'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <table class="table table-hover mt-3 bg-light">
                    <tr>
                        <th>Tarjeta de respuestas</th>
                    </tr>

                    @foreach($respuestas as $respuesta)
                    <tr>
                        <td>
                            {{$respuesta}}
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 ravie mb-3 mt-5" >
                <a href="{{url('/semaforo')}}" class="btn btn-lg" style="background-color: #CC662D; text: #ffffff">Siguiente Actividad</a>
            </div>
        </div>


    </div>


@endsection
