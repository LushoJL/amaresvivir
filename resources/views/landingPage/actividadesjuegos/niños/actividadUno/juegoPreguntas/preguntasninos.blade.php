@extends('landingPage.layouts.app', ['activePage' => 'niño'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
            <div id="app">

                <form method="POST" action="{{url('/enviar-respuestas')}}">
                    @csrf
                    <quiz-component
                        :cat="'niño'"
                    ></quiz-component>
                </form>

            </div>
            </div>
            <div class="col-lg-3 m-auto">
                <img src="{{asset('images/NINO CON SIGNO.png')}}" alt="" width="100%">
            </div>
        </div>


    </div>


@endsection

@section('component')
    <script src="{{asset('js/app.js')}}"></script>
@endsection
