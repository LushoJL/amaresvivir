@extends('layouts.app')
@section('content')

        <!--    semaforo-->
        <div class="mx-auto" style="width: 400px;">
            <figure>
                <img src="image/actividadesyjuegos/semaforo.png" width="400px" alt="">

                <div class="hover">
                    <div class="hover1" data-toggle="modal" data-target="#rompecabezarojo"></div>
                    <div class="hover2" data-toggle="modal" data-target="#rompecabezaamarillo"></div>
                    <div class="hover3" data-toggle="modal" data-target="#rompecabezaverde"></div>
                </div>
                <div class="luces">
                    <div class="red">

                    </div>
                    <div class="yellow">

                    </div>
                    <div class="green">

                    </div>
                </div>


            </figure>
        </div>
        <!--    fin semaforo-->

        <!--    rompecabeza rojo-->
        <div class="modal fade" id="rompecabezarojo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" >Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="rompecabeza">
                            <div class="base">
                                <img src="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master//pikachu.png" alt=""
                                     class="mt-0 " width="100%" style="opacity: 50%">
                            </div>

                            <div class="piezas">


                                <img src="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/1.png" class="pieza"
                                     id="img1">
                                <img src="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/2.png" class="pieza"
                                     id="img2">
                                <img src="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/3.png" class="pieza"
                                     id="img3">

                                <img src="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/4.png" class="pieza"
                                     id="img4">
                                <img src="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/5.png" class="pieza"
                                     id="img5">
                                <img src="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/6.png" class="pieza"
                                     id="img6">

                                <img src="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/7.png" class="pieza"
                                     id="img7">
                                <img src="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/8.png" class="pieza"
                                     id="img8">
                                <img src="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/9.png" class="pieza"
                                     id="img9">
                            </div>

                            <audio id="win" src="https://raw.githubusercontent.com/NestorPlasencia/PikaPuzzle/master/media/win.mp3"></audio>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--    fin rompecabeza rojo-->

        <!--    rompe cabeza amarillo-->
        <div class="modal fade" id="rompecabezaamarillo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        rompe cabeza amarillo
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--    fin rompe cabeza amarillo-->

        <!--    rompe cabeza verde-->
        <div class="modal fade" id="rompecabezaverde" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        rompe cabeza verde
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--    fin rompecabeza verde-->


@endsection
