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



$(document).ready(function () {
    var piezas=$('.pieza');//obteniendo todas las piezas de la clase pieza del html
    var pos=11;//esto es para poner primera fila

    //tamaño para cada pieza
    var width=[133,133,133,133,133,133,133,133,133]

    //posiciones de cada pieza
    var Y = [20, 20, 20, 153, 153, 153, 286, 286, 286];
    var X = [20, 153, 286, 20, 153, 286, 20, 153, 286];
    //cambia de tamaño a las piezas y agrega draggable para arrastrar con mouse o touch
    for (var i=0;i<piezas.length;i++){
        $(piezas[i]).css({'width':width[i],'position':'absolute'})
        $(piezas[i]).draggable({
            containment: ".rompecabeza",
            scroll: false,
            stop: function (event, ui) {
                posicionar(ui.position.left, ui.position.top, $(this));
            },
            start:function (){
                $(this).css({'z-index': pos});
                pos++;
            }
        });
    }
    //para el responsive
    const mediumBp = matchMedia('(max-width: 1400px)');
    const changeSize = mql =>{
        if (mql.matches){
            pienzasDesordenadas(5,264,420,636);
        }else{
            pienzasDesordenadas(420,604,10,200);
        }
    }
    mediumBp.addListener(changeSize);
    changeSize(mediumBp);
    //sin responsive
    //para mezclar piezas cuando no esta armado
    function pienzasDesordenadas(minX, maxX,minY, maxY){
        for (var i=0;i<piezas.length;i++){
            var cssX = parseInt($(piezas[i]).css('left').slice(0, -2));
            var cssY = parseInt($(piezas[i]).css('top').slice(0, -2));
            if (!(cssY>=0 && cssY <=400 && cssX >=0 && cssX <420)){
                $(piezas[i]).css({'left': Math.random() * (maxX - minX) + minX,'top': Math.random() * (maxY - minY) + minY,'z-index':Math.random() * (10 - 1) + 1});
            }
        }
    }
    //pone la pieza en su lugar
    function posicionar(x, y, pieza) {
        for (var i = 0; i < 9; i++) {
            if (Math.abs(x - X[i]) < 35 && Math.abs(y - Y[i]) < 35) {
                pieza.css({'top': Y[i], 'left': X[i]});
            }
        }
        tester();
    }
    var win = document.getElementById("win");
    //verefica su todas las piezas estan en su lugar
    function tester(){
        var c=0;

        for (var i=0;i<piezas.length;i++) {
            var cssX = parseInt($(piezas[i]).css('left').slice(0, -2));
            var cssY = parseInt($(piezas[i]).css('top').slice(0, -2));

            if ( cssX===X[i] && cssY===Y[i]){
                c++;
            }
        }
        if (c===9){
            Swal.fire({
                title: dataMensaje,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            })

            //cuando termino de armar rompecabeza
        }
    }



});
