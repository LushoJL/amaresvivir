@extends('landingPage.layouts.app', ['activePage' => 'organigrama'])
@section('content')


        <div class="row mt-5 justify-content-center">
            <div class="col-12 my-2">

              <img src="{{ Storage::disk('s3')->url('/').$dato->ornigrama }}" alt="inserte imagen" width="100%">
            </div>
        </div>


@endsection
