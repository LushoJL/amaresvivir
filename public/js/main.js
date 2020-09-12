

// altura y anchura del navegador
$(".sidenav").css("height", $(window).height());
$(".sidenav").css("margin-top",-$(".nav-personalizado").height());
$(".sidenav").css("padding-top",$(".nav-personalizado").height()+20);

if ($(window).width() <= 1000) {
    $(".main").removeClass("col");
} else {
    $(".main").addClass("col");
}
$(".dropdown-menu-quinessomos").css("width",$(".nav-quienessomos").width()+16);
$(".dropdown-menu-actividadesJuegos").css("width",$(".nav-actividadesJuegos").width()+16);
$(window).resize(function() {

    if ($(this).width() <= 1000) {
        $(".main").removeClass("col");

    } else {
        $(".main").addClass("col");
    }

    $(".sidenav").css("height", $(this).height());

    $(".dropdown-menu-quinessomos").css("width",$(".nav-quienessomos").width()+16);
    $(".dropdown-menu-actividadesJuegos").css("width",$(".nav-actividadesJuegos").width()+16);

    console.log($(".nav-quienessomos").width())
});







