@extends('landingPage.layouts.app', ['activePage' => 'inicio'])
@section('content')

<div class="container">
    <!-- Swiper -->
    <div class="row">
        <div class="col-12">
            <div class="swiper-container ">
                <div class="swiper-wrapper">
                    @foreach($datos as $dato)
                        <div class="swiper-slide" style="background-image:url({{Storage::disk('s3')->url('/').$dato->url}})"></div>
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-8">
            <img src="{{asset("images/AMBOS.png")}}" alt="LGO" width="100%">

        </div>
    </div>
    <div class="row ">
        <div class="col-sm-6 mt-5"><p style="font-family: Ravie;color: white;font-size: 3vw">Bienvenido</p></div>
        <div class="col-sm-6 naranjado mt-5" style="border: black solid 10px;height: 100px"></div>
    </div>
</div>


@endsection

@section('swiper')
    <!-- Swiper JS -->
  <script>
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false
        },
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
  </script>

@endsection
