function Startloader(){
    swal.fire({

        html:'<div class="loader-container">\n' +
            '     <div class="loader"></div>\n' +
            '       <div class="loader2" ></div>\n' +
            '</div>\n' +

            '<div class="cargando"><strong>CARGANDO</strong></div>' ,
        showCancelButton: false,
        customClass: 'swal-wide',
        showConfirmButton: false,
        allowOutsideClick: false

    });
}
function endLoader(icon, mensaje){
    swal.close();
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: icon,
        title: mensaje
    })
}
