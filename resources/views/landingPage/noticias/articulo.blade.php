@extends('landingPage.layouts.app', ['activePage' => 'noticia'])
@section('content')
    <div class="container">
        <br>
        <div class="row" style="justify-content: center">
            <!-- entrada-->
            <div class="col-lg-12">
                <!--entrada-->
                @foreach($news as $new)
                    <div class="card-body naranjado">

                        <h2 class="text-center" style="font-family: Ravie">{{$new->title}}</h2>

                        <p class=" mb-0 mt-0"> <strong class="">Publicado en: </strong>{{\Carbon\Carbon::parse($new->created_at)->format('d/m/Y')}}</p>
                        <p class="mb-3 mt-0"> <strong>Autor: </strong>{{$new->author}}</p>

                        <img src="{{Storage::disk('s3')->url('/').$new->image}}" alt="Imagen no encontrada" class="img-fluid"><br><br>
                        <p class="card-text">
                            {!! $new->body !!}
                        </p><br>
                    </div>
                    <hr>
                @endforeach

            </div>
            <!--entradas-->
            <!--aside-->
            <div class="col-lg-3">

            </div>
            <!--aside-->


        </div>
    </div>
@endsection
