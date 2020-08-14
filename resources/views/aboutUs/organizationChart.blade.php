@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-8 my-2 border-top">
              <h3 class="display-4">Organigrama:</h3>
              <img src="{{ secure_asset('image/organigrama.png') }}" alt="inserte imagen" class="responsive">
            </div>

          </div>
    </div>

@endsection
