@extends('layouts.app')
@section('content')

{{--    <div class="unaPlabra">--}}
{{--        <div class="headerImagen mt-3">--}}
{{--            <h3><center><p style="color: white">Amar es educar</p></center></h3>--}}
{{--        </div>--}}
{{--        <div class="imagenes">--}}
{{--            <div class="img-1"><img src="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master//pikachu.png" alt=""--}}
{{--                 class="mt-0 " width="100%"></div>--}}
{{--            <div class="img-2"><img src="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master//pikachu.png" alt=""--}}
{{--                 class="mt-0 " width="100%"></div>--}}
{{--            <div class="img-3"><img src="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master//pikachu.png" alt=""--}}
{{--                 class="mt-0 " width="100%"></div>--}}
{{--            <div class="img-4"><img src="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master//pikachu.png" alt=""--}}
{{--                 class="mt-0 " width="100%"></div>--}}
{{--        </div>--}}
{{--        <div class="LetrasRespuestas">--}}
{{--                    <div class="letra-1"><h3><center>P</center></h3></div>--}}
{{--                    <div class="letra-2"><h3><center>I</center></h3></div>--}}
{{--                    <div class="letra-3"><h3><center>K</center></h3></div>--}}
{{--                    <div class="letra-4"><h3><center>A</center></h3></div>--}}
{{--                    <div class="letra-5"><h3><center>C</center></h3></div>--}}
{{--                    <div class="letra-6"><h3><center>H</center></h3></div>--}}
{{--                    <div class="letra-7"><h3><center>U</center></h3></div>--}}
{{--                    <div class="letra-8"></div>--}}
{{--                    <div class="letra-9"></div>--}}
{{--                    <div class="letra-10"></div>--}}
{{--                    <div class="letra-11"></div>--}}
{{--                    <div class="letra-12"></div>--}}
{{--                    <div class="letra-13"></div>--}}
{{--                    <div class="letra-14"></div>--}}
{{--                    <div class="letra-15"></div>--}}
{{--                    <div class="letra-16"></div>--}}
{{--                    <div class="letra-17"></div>--}}
{{--                    <div class="letra-18"></div>--}}
{{--            </div>--}}
{{--        <div class="letrasBotones">--}}
{{--            <button class="btn btn-primary"><center>P</center></button>--}}
{{--            <button class="btn btn-primary"><center>S</center></button>--}}
{{--            <button class="btn btn-primary"><center>A</center></button>--}}
{{--            <button class="btn btn-primary"><center>I</center></button>--}}
{{--            <button class="btn btn-primary"><center>K</center></button>--}}
{{--            <button class="btn btn-primary"><center>H</center></button>--}}
{{--            <button class="btn btn-primary"><center>D</center></button>--}}
{{--            <button class="btn btn-primary"><center>W</center></button>--}}
{{--            <button class="btn btn-primary"><center>U</center></button>--}}
{{--            <button class="btn btn-primary"><center>C</center></button>--}}
{{--            <button class="btn btn-primary"><center>R</center></button>--}}
{{--            <button class="btn btn-primary"><center>T</center></button>--}}

{{--            <button class="btn btn-primary"><center>D</center></button>--}}
{{--            <button class="btn btn-primary"><center>X</center></button>--}}
{{--            <button class="btn btn-primary"><center>Z</center></button>--}}
{{--            <button class="btn btn-primary"><center>N</center></button>--}}
{{--            <button class="btn btn-primary"><center>L</center></button>--}}
{{--            <button class="btn btn-primary"><center>Ñ</center></button>--}}
{{--        </div>--}}
{{--    </div>--}}

                    <div id="containerPHASER"></div>



<script>
    const config = {
        width: 450,
        height: 600,
        parent: 'containerPHASER',
        type: Phaser.AUTO,
        scale: {
            parent: 'containerPHASER',
            autoCenter: Phaser.Scale.CENTER_BOTH,
        },
        scene: {
            preload: preload,
            create: create,
            update: update
        }
    };
    var game = new Phaser.Game(config);

    function preload(){
        this.load.image("image1","https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master//pikachu.png");
        this.load.image("image2","https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master//pikachu.png");
        this.load.image("image3","https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master//pikachu.png");
        this.load.image("image4","https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master//pikachu.png");
    }
    function create(){
        this.img1=this.add.image(120, 120, "image1");
        this.img2=this.add.image(330, 120, "image2");

        this.img3=this.add.image(120, 345, "image3");
        this.img4=this.add.image(330, 345, "image4");
        this.img1.setScale(0.09);
        this.img2.setScale(0.09);
        this.img3.setScale(0.09);
        this.img4.setScale(0.09);

    }
    function update(){

    }
</script>


@endsection
