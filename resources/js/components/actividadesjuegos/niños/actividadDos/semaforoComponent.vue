<template>
    <div class="mx-auto" style="width: 400px;">
        <figure>
            <img src="image/actividadesyjuegos/semaforo.png" width="400px">

            <div class="hover">
                <div class="hover1"></div>
                <div class="hover2"></div>
                <div class="hover3"></div>
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
