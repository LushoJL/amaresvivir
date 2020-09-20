

// altura y anchura del navegador
$(".sidenav").css("height", $(window).height());

$(".sidenav").css("margin-top",-$(".nav-personalizado").height());
$(".sidenav").css("padding-top",$(".nav-personalizado").height()+20);


eliminandoColMain($(window));

$(window).resize(function() {

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
            // $(".main").addClass("col-11");
            $(".main").css("width",$(window).width());
            $(".main").css("margin-left",15);
            $(".main").css("margin-right",15);
            console.log($(".header").css("margin-left"))

        } else {
            $(".main").removeClass("col-11");
            $(".main").addClass("col");
            $(".main").css("margin-left",10);
            $(".main").css("margin-right",0);

        }


    }

    function redimencionandoDrobNav(){

        $(".dropdown-menu-quinessomos").css("width",$(".nav-quienessomos").width()+16);
        $(".dropdown-menu-actividadesJuegos").css("width",$(".nav-actividadesJuegos").width()+16);
    }



