<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Amar es Educar</title>

    <!-- Fonts -->
    {{--    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}
    {{--    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">--}}

    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}" crossorigin="anonymous">
    <link href="{{asset('css/icofont/icofont.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/app.css')}}"  rel="stylesheet">

    <!--Swiper pru-->
    <link rel="stylesheet" href="{{asset('css/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/swiperStyles.css') }}">
    <!--sweetalert-->
    <link rel="stylesheet" href="{{ asset('css/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sweetalert2/animate.min.css') }}">
    <!--otros-->
    <link rel="stylesheet" href="{{asset('css/radioStyle.css')}}">
    {{--    draggdable--}}
    <link rel="stylesheet" href="{{asset('css/jquery-ui/jquery-ui.css')}}">

    {{--button--}}
    <link rel="stylesheet" href="{{asset('css/loginButton.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    {{--    phaser--}}
    <script src="{{asset('js/phaser/phaser.min.js') }}"></script>
</head>


<body style="background: #000000;">



<!-- ======= Header ======= -->
<div class=" container-fluid " style="background: black;">

    <div class="header plomo">
        <div class="row ">
            <div class="col-2 mt-3 mb-3">
                <img src="{{asset("image/topBar/logo.png")}}" alt="logo1" class="logo">
            </div>
            <div class="col-7 mt-3 mb-3">
                <img src="{{asset("image/topBar/logo1.png")}}" alt="logo2" class="logo" >
            </div>
            <div class="col-3 mt-3 mb-3">
                <img src="{{asset("image/topBar/logo2.png")}}" alt="logo3" class="logo">
            </div>
        </div>
    </div>
    @include('landingPage.layouts.navbar')

    <div class="row" id="app">
        <div class="col-md-4" >
            @include('landingPage.layouts.conocenos')
        </div>
        <div class="plomo main col"  >
            @yield('content')
        </div>
    </div>

    <a href="{{url('login')}}" class="btn-login"><span class="fa fa-lock"> Login</span></a>


</div>

<!-- End Header -->
{{--bootstrap--}}
<script src="{{asset('js/bootstrap/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>

<script src="{{asset('js/swiper/swiper-bundle.min.js') }}"></script>

<script src="{{asset('js/sweetalert2/sweetalert2.all.min.js') }}"></script>

<script src="{{asset('js/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('js/jquery-touch/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>




<script>



    //para el responsive
    const mediumBpSidebar = matchMedia('(max-width: 990px)');
    const changeSizeSidebar = mql =>{
        if (mql.matches){
            $(".page-wrapper").removeClass("toggled");
            $(".page-wrapper").css("margin-left",0);
        }else{
            $(".page-wrapper").addClass("toggled");
            $(".page-wrapper").css("margin-left",260);
        }
    }
    mediumBpSidebar.addListener(changeSizeSidebar);
    changeSizeSidebar(mediumBpSidebar);

    $("#close-sidebar").click(function() {
        $(".page-wrapper").removeClass("toggled");
        $(".page-wrapper").css("margin-left",0);


    });
    $("#show-sidebar").click(function() {
        $(".page-wrapper").addClass("toggled");
        $(".page-wrapper").css("margin-left",260);

    });


</script>

{{--preguntas niña--}}
<script>
    $(document).ready(function() {
        $("#btnQuestionGirl").click(function(){
            (async () =>{
                const { value: respuestas } = await Swal.mixin({
                    confirmButtonText: 'Siguiente &rarr;',
                    showCancelButton: true,
                    cancelButtonText: 'Cancelar',
                    progressSteps: ['1', '2', '3', '4', '5', '6'],
                    progressStepsDistance: '5%',
                }).queue([
                    {
                        title: '<span style="color: #ffffff;">¿CON QUÉ PERSONAJE DEL CUENTO TE IDENTIFICAS?</span>',
                        showClass: {
                            popup: 'animate__animated animate__backInDown'
                        },
                        imageUrl: 'image/question.png',
                        imageWidth: '30%',
                        imageHeight: 'auto',
                        imageAlt: 'Custom image',
                        background: '#fff url(image/purple.jpg)',
                        html:
                            `
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input1"  name="1" value="MARITA"><label for="swal-input1">MARITA</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input2"  name="1" value="JULIETA"><label for="swal-input2">JULIETA</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input3"  name="1" value="LOS DEMAS COMPAÑEROS"><label for="swal-input3">LOS DEMAS COMPAÑEROS</label>
                                </div>
                                `,
                        preConfirm: () => {
                            return [
                                $('input[name="1"]:checked').val(),
                            ]
                        },
                    },
                    {
                        title: '<span style="color: #ffffff;">¿QUÉ HARÍAS TÚ EN LUGAR DEL PERSONAJE QUE ELEGISTE?</span>',
                        showClass: {
                            popup: 'animate__animated animate__rotateIn'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        },
                        imageUrl: 'image/question.png',
                        imageWidth: '30%',
                        imageHeight: 'auto',
                        imageAlt: 'Custom image',
                        background: '#fff url(image/purple.jpg)',
                        html:
                            `
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input1"  name="1" value="SERÍA IGUAL"><label for="swal-input1">SERÍA IGUAL</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input2"  name="1" value="CAMBIARÍA"><label for="swal-input2">CAMBIARÍA</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input3"  name="1" value="PEDIRÍA AYUDA"><label for="swal-input3">PEDIRÍA AYUDA</label>
                                </div>
                                `,
                        preConfirm: () => {
                            return [
                                $('input[name="1"]:checked').val(),
                            ]
                        },
                    },
                    {
                        title: '<span style="color: #ffffff;">¿LE DIRÍAS A ALGUIEN SI VIERAS QUE OTRO SUFRE COMO MARITA?</span>',
                        showClass: {
                            popup: 'animate__animated animate__rotateIn'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        },
                        imageUrl: 'image/question.png',
                        imageWidth: '30%',
                        imageHeight: 'auto',
                        imageAlt: 'Custom image',
                        background: '#fff url(image/purple.jpg)',
                        html:
                            `
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input1"  name="1" value="SI"><label for="swal-input1">SI</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input2"  name="1" value="NO"><label for="swal-input2">NO</label>
                                </div>
                                `,
                        preConfirm: () => {
                            return [
                                $('input[name="1"]:checked').val(),
                            ]
                        },
                    },
                    {
                        title: '<span style="color: #ffffff;">¿HAS SUFRIDO LO MISMO QUE MARITA ALGUNA VEZ?</span>',
                        showClass: {
                            popup: 'animate__animated animate__rotateIn'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        },
                        imageUrl: 'image/question.png',
                        imageWidth: '30%',
                        imageHeight: 'auto',
                        imageAlt: 'Custom image',
                        background: '#fff url(image/purple.jpg)',
                        html:
                            `
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input1"  name="1" value="SI"><label for="swal-input1">SI</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input2"  name="1" value="NO"><label for="swal-input2">NO</label>
                                </div>
                                `,
                        preConfirm: () => {
                            return [
                                $('input[name="1"]:checked').val(),
                            ]
                        },
                    },
                    {
                        title: '<span style="color: #ffffff;">¿SE LO CONTASTE A ALGUIEN, PARA PERDIR AYUDA (A TUS PAPÁS, AMIGOS, MAESTRA/O)?</span>',
                        showClass: {
                            popup: 'animate__animated animate__rotateIn'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        },
                        imageUrl: 'image/question.png',
                        imageWidth: '30%',
                        imageHeight: 'auto',
                        imageAlt: 'Custom image',
                        background: '#fff url(image/purple.jpg)',
                        html:
                            `
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input1"  name="1" value="SI"><label for="swal-input1">SI</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input2"  name="1" value="NO"><label for="swal-input2">NO</label>
                                </div>
                                `,
                        preConfirm: () => {
                            return [
                                $('input[name="1"]:checked').val(),
                            ]
                        },
                    },
                    {
                        title: '<span style="color: #ffffff;">¿POR QUÉ NO SE LO CONTARIAS A ALGUIEN?</span>',
                        showClass: {
                            popup: 'animate__animated animate__rotateIn'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        },
                        imageUrl: 'image/question.png',
                        imageWidth: '30%',
                        imageHeight: 'auto',
                        imageAlt: 'Custom image',
                        background: '#fff url(image/purple.jpg)',
                        html:
                            `
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input1"  name="1" value="AMENAZAS"><label for="swal-input1">AMENAZAS</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input2"  name="1" value="MIEDO"><label for="swal-input2">MIEDO</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input3"  name="1" value="VUERGÜENZA"><label for="swal-input3">VUERGÜENZA</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input4"  name="1" value="ME GUSTA"><label for="swal-input4">ME GUSTA</label>
                                </div>
                                <div class="section">
                                    <textarea class="form-control" name="2" id="swal-input5" style="width: 100%;" placeholder="OTRO: "></textarea>
                                </div>
                                `,
                        preConfirm: () => {
                            return [
                                $('input[name="1"]:checked').val(),
                                $('#swal-input5').val(),
                            ]
                        },
                    },
                ])
                if (respuestas) {
                    Swal.fire(JSON.stringify(respuestas))
                }
            })()
        });
        $("#btnQuestionBoy").click(function(){
            (async () =>{
                const { value: respuestas } = await Swal.mixin({
                    confirmButtonText: 'Siguiente &rarr;',
                    showCancelButton: true,
                    cancelButtonText: 'Cancelar',
                    progressSteps: ['1', '2', '3', '4', '5', '6'],
                    progressStepsDistance: '5%',
                }).queue([
                    {
                        title: '<span style="color: #ffffff;">¿CON QUÉ PERSONAJE DEL CUENTO TE IDENTIFICAS?</span>',
                        showClass: {
                            popup: 'animate__animated animate__backInDown'
                        },
                        imageUrl: 'image/question.png',
                        imageWidth: '30%',
                        imageHeight: 'auto',
                        imageAlt: 'Custom image',
                        background: '#fff url(image/purple.jpg)',
                        html:
                            `
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input1"  name="1" value="JOAQUÍN"><label for="swal-input1">JOAQUÍN</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input2"  name="1" value="TITO"><label for="swal-input2">TITO</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input3"  name="1" value="LOS DEMAS COMPAÑEROS"><label for="swal-input3">LOS DEMAS COMPAÑEROS</label>
                                </div>
                                `,
                        preConfirm: () => {
                            return [
                                $('input[name="1"]:checked').val(),
                            ]
                        },
                    },
                    {
                        title: '<span style="color: #ffffff;">¿QUÉ HARÍAS TÚ EN LUGAR DEL PERSONAJE QUE ELEGISTE?</span>',
                        showClass: {
                            popup: 'animate__animated animate__rotateIn'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        },
                        imageUrl: 'image/question.png',
                        imageWidth: '30%',
                        imageHeight: 'auto',
                        imageAlt: 'Custom image',
                        background: '#fff url(image/purple.jpg)',
                        html:
                            `
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input1"  name="1" value="SERÍA IGUAL"><label for="swal-input1">SERÍA IGUAL</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input2"  name="1" value="CAMBIARÍA"><label for="swal-input2">CAMBIARÍA</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input3"  name="1" value="PEDIRÍA AYUDA"><label for="swal-input3">PEDIRÍA AYUDA</label>
                                </div>
                                `,
                        preConfirm: () => {
                            return [
                                $('input[name="1"]:checked').val(),
                            ]
                        },
                    },
                    {
                        title: '<span style="color: #ffffff;">¿LE DIRÍAS A ALGUIEN SI VIERAS QUE OTRO SUFRE COMO JOAQUÍN?</span>',
                        showClass: {
                            popup: 'animate__animated animate__rotateIn'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        },
                        imageUrl: 'image/question.png',
                        imageWidth: '30%',
                        imageHeight: 'auto',
                        imageAlt: 'Custom image',
                        background: '#fff url(image/purple.jpg)',
                        html:
                            `
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input1"  name="1" value="SI"><label for="swal-input1">SI</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input2"  name="1" value="NO"><label for="swal-input2">NO</label>
                                </div>
                                `,
                        preConfirm: () => {
                            return [
                                $('input[name="1"]:checked').val(),
                            ]
                        },
                    },
                    {
                        title: '<span style="color: #ffffff;">¿HAS SUFRIDO LO MISMO QUE JOAQUÍN ALGUNA VEZ?</span>',
                        showClass: {
                            popup: 'animate__animated animate__rotateIn'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        },
                        imageUrl: 'image/question.png',
                        imageWidth: '30%',
                        imageHeight: 'auto',
                        imageAlt: 'Custom image',
                        background: '#fff url(image/purple.jpg)',
                        html:
                            `
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input1"  name="1" value="SI"><label for="swal-input1">SI</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input2"  name="1" value="NO"><label for="swal-input2">NO</label>
                                </div>
                                `,
                        preConfirm: () => {
                            return [
                                $('input[name="1"]:checked').val(),
                            ]
                        },
                    },
                    {
                        title: '<span style="color: #ffffff;">¿SE LO CONTASTE A ALGUIEN, PARA PERDIR AYUDA (A TUS PAPÁS, AMIGOS, MAESTRA/O)?</span>',
                        showClass: {
                            popup: 'animate__animated animate__rotateIn'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        },
                        imageUrl: 'image/question.png',
                        imageWidth: '30%',
                        imageHeight: 'auto',
                        imageAlt: 'Custom image',
                        background: '#fff url(image/purple.jpg)',
                        html:
                            `
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input1"  name="1" value="SI"><label for="swal-input1">SI</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input2"  name="1" value="NO"><label for="swal-input2">NO</label>
                                </div>
                                `,
                        preConfirm: () => {
                            return [
                                $('input[name="1"]:checked').val(),
                            ]
                        },
                    },
                    {
                        title: '<span style="color: #ffffff;">¿POR QUÉ NO SE LO CONTARIAS A ALGUIEN?</span>',
                        showClass: {
                            popup: 'animate__animated animate__rotateIn'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        },
                        imageUrl: 'image/question.png',
                        imageWidth: '30%',
                        imageHeight: 'auto',
                        imageAlt: 'Custom image',
                        background: '#fff url(image/purple.jpg)',
                        html:
                            `
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input1"  name="1" value="AMENAZAS"><label for="swal-input1">AMENAZAS</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input2"  name="1" value="MIEDO"><label for="swal-input2">MIEDO</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input3"  name="1" value="VUERGÜENZA"><label for="swal-input3">VUERGÜENZA</label>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="swal-input4"  name="1" value="ME GUSTA"><label for="swal-input4">ME GUSTA</label>
                                </div>
                                <div class="section">
                                    <textarea class="form-control" name="2" id="swal-input5" style="width: 100%;" placeholder="OTRO: "></textarea>
                                </div>
                                `,
                        preConfirm: () => {
                            return [
                                $('input[name="1"]:checked').val(),
                                $('#swal-input5').val(),
                            ]
                        },
                    },
                ])
                if (respuestas) {
                    Swal.fire(JSON.stringify(respuestas))
                }
            })()
        });
    });
</script>

<script src="{{asset('js/puzzle/semaforo.js') }}" type="text/javascript"></script>


<script src="{{asset('js/sweetalert2/sweetalert2.min.js') }}"></script>


@yield('swiper')

</body>

</html>
