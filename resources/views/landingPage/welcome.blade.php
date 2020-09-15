@extends('landingPage.layouts.app', ['activePage' => 'inicio'])
@section('content')

<div class="container">
    <!-- Swiper -->
    <div class="row">
        <div class="col-12">
            <div class="swiper-container ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(./image/topBar/logo1.png)"></div>
                    <div class="swiper-slide" style="background-image:url(./image/swiper/image1.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(./image/swiper/image2.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(./image/swiper/image3.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(./image/swiper/image4.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(./image/swiper/image5.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(./image/swiper/image6.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(./image/swiper/image8.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(./image/swiper/image9.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(./image/swiper/image10.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(./image/swiper/image11.jpg)"></div>
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
    <h1>hola mundo</h1>
    <h1>hola mundo</h1>
    <h1>hola mundo</h1>
    <h1>hola mundo</h1>
    <h1>hola mundo</h1>
    <h1>hola mundo</h1>
    <h1>hola mundo</h1>
    <h1>hola mundo</h1>
    <h1>hola mundo</h1>
    <h1>hola mundo</h1>
    <h1>hola mundo</h1>
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
