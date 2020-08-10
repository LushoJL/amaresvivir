<template>
    <div>
        <!--    semaforo-->
        <div class="mx-auto" style="width: 400px;">
            <figure>
                <img src="image/actividadesyjuegos/semaforo.png" width="400px">

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
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" >Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <svg width="600" height="600" id="entorno">
                            <g id="fondo"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master//pikachu.png" width="400" height="400" x="200" y="100"></image></g>
                            <g class="padre" id="0"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/1.png" class="movil"></image></g>
                            <g class="padre" id="1"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/2.png" class="movil"></image></g>
                            <g class="padre" id="2"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/3.png" class="movil"></image></g>
                            <g class="padre" id="3"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/4.png" class="movil"></image></g>
                            <g class="padre" id="4"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/5.png" class="movil"></image></g>
                            <g class="padre" id="5"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/6.png" class="movil"></image></g>
                            <g class="padre" id="6"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/7.png" class="movil"></image></g>
                            <g class="padre" id="7"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/8.png" class="movil"></image></g>
                            <g class="padre" id="8"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/9.png" class="movil"></image></g>
                        </svg>
                        <audio id="win" src="https://raw.githubusercontent.com/NestorPlasencia/PikaPuzzle/master/media/win.mp3"></audio>
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



var piezas = document.getElementsByClassName('movil');

// var tamWidh = [134,192,134,163,134,163,134,192,134];
// var tamHeight = [163,134,163,134,192,134,163,134,163];
var tamWidh = [134,192,134,163,134,163,134,192,134];
var tamHeight = [163,134,163,134,192,134,163,134,163];
for(var i=0;i<piezas.length;i++){
    piezas[i].setAttribute("width", tamWidh[i]);
    piezas[i].setAttribute("height",tamHeight[i]);
    piezas[i].setAttribute("x", Math.floor((Math.random() * 10) + 1));
    piezas[i].setAttribute("y", Math.floor((Math.random() * 409) + 1));
    piezas[i].setAttribute("onmousedown","seleccionarElemento(evt)");
}

var elementSelect = 0;
var currentX = 0;
var currentY = 0;
var currentPosX = 0;
var currentPosY = 0;

function seleccionarElemento(evt) {
    elementSelect = reordenar(evt);
    currentX = evt.clientX;
    currentY = evt.clientY;
    currentPosX = parseFloat(elementSelect.getAttribute("x"));
    currentPosY = parseFloat(elementSelect.getAttribute("y"));
    elementSelect.setAttribute("onmousemove","moverElemento(evt)");
}

function moverElemento(evt){
    var dx = evt.clientX - currentX;
    var dy = evt.clientY - currentY;
    currentPosX = currentPosx + dx;
    currentPosY = currentPosy + dy;
    elementSelect.setAttribute("x",currentPosx);
    elementSelect.setAttribute("y",currentPosy);
    currentX = evt.clientX;
    currentY = evt.clientY;
    elementSelect.setAttribute("onmouseout","deseleccionarElemento(evt)");
    elementSelect.setAttribute("onmouseup","deseleccionarElemento(evt)");
    iman();
}

function deseleccionarElemento(evt){
    testing();
    if(elementSelect != 0){
        elementSelect.removeAttribute("onmousemove");
        elementSelect.removeAttribute("onmouseout");
        elementSelect.removeAttribute("onmouseup");
        elementSelect = 0;
    }
}

var entorno = document.getElementById('entorno');

function reordenar(evt){
    var padre = evt.target.parentNode;
    var clone = padre.cloneNode(true);
    var id = padre.getAttribute("id");
    entorno.removeChild(document.getElementById(id));
    entorno.appendChild(clone);
    return entorno.lastChild.firstChild;
}

var origX = [200,304,466,200,333,437,200,304,466];
var origY = [100,100,100,233,204,233,337,366,337];

function iman(){
    for(var i=0;i<piezas.length;i++){
        if (Math.abs(currentPosx-origX[i])<15 && Math.abs(currentPosy-origY[i])<15) {
            elementSelect.setAttribute("x",origX[i]);
            elementSelect.setAttribute("y",origY[i]);
        }
    }
}

var win = document.getElementById("win");

function testing() {
    var bien_ubicada = 0;
    var padres = document.getElementsByClassName('padre');
    for(var i=0;i<piezas.length;i++){
        var posx = parseFloat(padres[i].firstChild.getAttribute("x"));
        var posy = parseFloat(padres[i].firstChild.getAttribute("y"));
        var ide = padres[i].getAttribute("id");
        if(origX[ide] == posx && origY[ide] == posy){
            bien_ubicada = bien_ubicada + 1;
        }
    }
    if(bien_ubicada == 9){
        win.play();
    }
}
export default {
    name: "semaforoComponent"
}
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
</style>
