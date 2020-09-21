@extends('admin.layouts.app',['activePage'=>'niño'])
@section('contentWrapper')

<div class="container">
    <div class="row">
        <div class="col-lg-4 ">
            <div style="position: absolute;width: 250px;height: 250px; background: red;opacity: 0.4;"></div>
            <div  style="width: 250px">
                <img src="{{Storage::url('public/rojo/base.jpg')}}" id="imagenRojo" width="250" height="250">

                <form method="POST" action="{{secure_url('/rojo')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group is-invalid">
                        <div class="custom-file">
                            <input id="rojo" name="base" type="file" accept="image/*" class="custom-file-input" id="validatedInputGroupCustomFile" required>
                            <label class="custom-file-label" for="validatedInputGroupCustomFile">Suba una imagen</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" >Aplicar</button>

                </form>
            </div>


        </div>


        <div class="col-lg-4">
            <div style="position: absolute;width: 250px;height: 250px; background: yellow;opacity: 0.4;"></div>

            <div  style="width: 250px">
                <img src="{{Storage::url('public/amarillo/base.jpg')}}" id="imagenAmarillo" width="250" height="250">

                <form method="POST" action="{{secure_url('/amarillo')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group is-invalid">
                        <div class="custom-file">
                            <input id="amarillo" name="base" type="file" accept="image/*" class="custom-file-input" id="validatedInputGroupCustomFile" required>
                            <label class="custom-file-label" for="validatedInputGroupCustomFile">Suba una imagen</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Aplicar</button>

                </form>
            </div>


        </div>

        <div class="col-lg-4">
            <div style="position: absolute;width: 250px;height: 250px; background: green;opacity: 0.4;"></div>

            <div  style="width: 250px">
                <img src="{{Storage::url('public/verde/base.jpg')}}" id="imagenVerde" width="250" height="250">

                <form method="POST" action="{{secure_url('/verde')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group is-invalid">
                        <div class="custom-file">
                            <input id="verde" name="base" type="file" accept="image/*" class="custom-file-input" id="validatedInputGroupCustomFile" required>
                            <label class="custom-file-label" for="validatedInputGroupCustomFile">Suba una imagen</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Aplicar</button>

                </form>
            </div>
        </div>
    </div>

</div>



    <script>
        // Obtener referencia al input y a la imagen
        const $rojo = document.querySelector("#rojo")
        const $amarillo = document.querySelector("#amarillo")
        const $verde = document.querySelector("#verde")

        const $imagenRojo = document.querySelector("#imagenRojo");
        const $imagenAmarillo = document.querySelector("#imagenAmarillo");
        const $imagenVerde = document.querySelector("#imagenVerde");

    // Escuchar cuando cambie
        $rojo.addEventListener("change", () => {
            cargarImagen($imagenRojo, $rojo);
         });
        $amarillo.addEventListener("change", () => {
            cargarImagen($imagenAmarillo, $amarillo);
        });
        $verde.addEventListener("change", () => {
            cargarImagen($imagenVerde, $verde);
        });
    function cargarImagen(dom, boton){
        // Los archivos seleccionados, pueden ser muchos o uno
        const archivos = boton.files;
        // Si no hay archivos salimos de la función y quitamos la imagen
        if (!archivos || !archivos.length) {
            dom.src = "";
            return;
        }
        // Ahora tomamos el primer archivo, el cual vamos a previsualizar
        const primerArchivo = archivos[0];
        // Lo convertimos a un objeto de tipo objectURL
        const objectURL = URL.createObjectURL(primerArchivo);
        // Y a la fuente de la imagen le ponemos el objectURL
        dom.src = objectURL;
    }

    </script>
@endsection
