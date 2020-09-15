

// altura y anchura del navegador
$(".sidenav").css("height", $(window).height());

$(".sidenav").css("margin-top",-$(".nav-personalizado").height());
$(".sidenav").css("padding-top",$(".nav-personalizado").height()+20);


eliminandoColMain($(window));

$(window).resize(function() {
    console.log( $(".sidenav").css("display"));
    eliminandoColMain($(this));
    $(".sidenav").css("height", $(this).height());
    redimencionandoDrobNav();
});

$('.dropdown').click(()=>{
    redimencionandoDrobNav();
})

    function eliminandoColMain(ventana){
        if ($(".sidenav").css("display")==='none') {

            $(".main").removeClass("col");
            $(".main").addClass("col-12");
        } else {
            $(".main").removeClass("col-12");
            $(".main").addClass("col");
        }
    }

    function redimencionandoDrobNav(){

        $(".dropdown-menu-quinessomos").css("width",$(".nav-quienessomos").width()+16);
        $(".dropdown-menu-actividadesJuegos").css("width",$(".nav-actividadesJuegos").width()+16);
    }



