@extends('landingPage.layouts.app', ['activePage' => 'noticia'])
@section('content')
    <div class="container">
        <h2 class="my-5 text-center" style="font-family: Ravie; color: #CC662D">Noticias y Novedades</h2>
        <hr>

        <div class="row" style="justify-content: center">
            <!-- entrada-->
            <div class="col-lg-12">
                <!--entrada-->
                @foreach($news as $new)
                <div class="card-body naranjado">

                    <h2 class="text-center" style="font-family: Ravie">{{$new->title}}</h2>

                    <p class=" mb-0 mt-0"> <strong class="">Publicado en: </strong>{{\Carbon\Carbon::parse($new->created_at)->format('d/m/Y')}}</p>
                    <p class="mb-3 mt-0"> <strong>Autor: </strong>{{$new->author}}</p>
                    <div class="row justify-content-center mb-3">
                        <img src="{{Storage::disk('s3')->url('/').$new->image}}" alt="imagen no encontrada" height="200" width="auto"><br><br>
                    </div>

                    <h5 class="card-text">
                        {!! \Illuminate\Support\Str::limit($new->body, 550, '...') !!}
                    </h5><br>

                    <a href="{{url('/noticia-articulo', $new->id)}}" class="btn text-light" style="background-color: #524658">Leer noticia</a>
                </div>
                <hr>
                @endforeach

                {{$news->links()}}

            </div>


            <!--entradas-->
            <!--aside-->
            <div class="col-lg-3">

            </div>
            <!--aside-->


        </div>
    </div>
@endsection
