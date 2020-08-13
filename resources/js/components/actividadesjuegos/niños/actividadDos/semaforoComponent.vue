<template>
    <div>
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



    </div>


</template>

<script>
$(function() {
    // red
    $('.hover1').hover(function() {
        $('.red').css('background-color', '#ff0000');
    }, function() {

        $('.red').css('background-color', '');
    });
    // amarillo
    $('.hover2').hover(function() {
        $('.yellow').css('background-color', '#fff500');
    }, function() {
        $('.yellow').css('background-color', '');
    });
    // verde
    $('.hover3').hover(function() {
        $('.green').css('background-color', '#03fc00');
    }, function() {
        // vuelve a dejar el <div> como estaba al hacer el "mouseout"
        $('.green').css('background-color', '');
    });
});

</script>

<style scoped>
.luces{
    position: absolute;

    left: 140px;
    bottom:110px;
    z-index: -1;
}
.hover{
    position: absolute;
    left: 140px;
    bottom:110px;
    z-index: 1;
}
.red{
    background: #9d0000;
    width: 125px;
    height: 130px;
    margin-top: 10px;

}
.yellow{
    background: #888800;
    width: 125px;
    height: 130px;
}
.green{
    background: green;
    width: 125px;
    height: 133px;
}
.hover1{

    width: 125px;
    height: 130px;

    cursor: pointer;
}
.hover2{

    width: 125px;
    height: 130px;
    cursor: pointer;
}
.hover3{

    width: 125px;
    height: 133px;
    cursor: pointer;
}
figure{

    display: inline-block;

    position: relative;
    justify-content: center;
    align-items: center;
}
div.rompecabeza {
    height: 450px;
    width: 820px;
    background-color: #090909;
    margin: auto;
    position: relative;
}
div.base {
    float: left;
    margin-top: 20px;
    margin-left:20px;
    width: 400px;
    height: 400px;
}
div.piezas {
    margin-top: 20px;
    float: left;
    width: 400px;
    height: 400px;
}
@media only screen and (max-width: 800px) {
    div.rompecabeza {
        height: 850px;
        width: 450px;
        background-color: #0e0d0d;
        margin: auto;
        position: relative;
        display: grid;
    }
    div.base {
        float: left;
        width: 400px;
        height: 400px;
    }
    div.piezas {
        margin-top: 0;
        float: left;
        width: 400px;
        height: 400px;
    }
}
</style>
