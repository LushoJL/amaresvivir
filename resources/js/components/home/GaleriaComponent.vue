<template>
    <div>
        <div class="container">
            <div class="row mb-3" style="justify-content: center">

                <div class="col-6">
                    <form @submit.prevent="addPicture" enctype="multipart/form-data">
                        <div class="row mb-3" style="justify-content: center">
                            <img :src="foto" alt="foto" width="200" height="auto">
                        </div>
                        <div class="custom-file mb-2">
                            <input type="file" class="custom-file-input" @change="obtenerFoto">
                            <label  class="custom-file-label">Agrega una imagen</label>
                        </div>
                        <div class="row" style="justify-content: center">
                            <button type="submit" class="btn btn-primary btn-md" :disabled="desabilitado">Subir</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">

                <!-- /.col-md-6 -->
                <div class="col-12">
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Imagenes disponibles</h3>
                        </div>
                        <div class="card-body">
                            <div id="gallery" class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12" v-for="ruta in rutas">
                                        <a href="" @click.prevent="submit(ruta.id, ruta.url)">
                                            <img :src="url+ruta.url" alt="imagen">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
    </div>
</template>

<script>
    export  default {
        props: ['url', 'urlpubl'],


        data(){
            return{
                fotoMiniaturaCarrusel:this.urlpubl,
                mensaje: 0,
                rutas: '',
                imagen:this.urlpubl,
            }
        },
        methods: {
            obtenerUrl(){
                axios.get('llamarImagenesCarrusel').then(response=>{
                    this.rutas=response.data;
                    //console.log(this.rutas);
                    console.log(this.urlpubl);
                })
            },

            obtenerFoto(e){
                let file = e.target.files[0];

                this.cargarFoto(file);
            },

            cargarFoto(file){
                let reader = new FileReader();

                reader.onload = (e) => {
                    this.fotoMiniaturaCarrusel = e.target.result;
                }
                reader.readAsDataURL(file);
                this.mensaje = 1;
            },

            addPicture(){
                //console.log(this.fotoMiniaturaCarrusel);
                Startloader();
                axios.post('/picture', {fotos: this.fotoMiniaturaCarrusel})
                .then(response => {
                    console.log(response.data);
                    this.obtenerUrl();
                    endLoader('success','Imagen Guardada');
                    this.mensaje = 0;
                    this.fotoMiniaturaCarrusel=this.urlpubl;
                })
            },
            deleteImage(id, image){
                Startloader();
                axios.post('/eliminarImagenesCarrusel', {id:id, image:image}).then(response=>{
                    console.log(response.data);
                    this.obtenerUrl();
                    endLoader('success','Borrado exitosasmente');
                })
            },
            submit(id, url){
                Swal.fire({
                    title: '¿Borrar esto?',
                    text: "No se puede revertir",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Borrar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.deleteImage(id, url);
                    }
                })
            }
        },
        computed: {
            foto(){
                return this.fotoMiniaturaCarrusel;
            },
            desabilitado(){
                return this.mensaje === 0;
            }
        },
        mounted() {
            this.obtenerUrl();
        }
    }

</script>

<style>
#gallery .col-lg-4 {
    margin: 0;
    padding: 25px;
}

#gallery img {
    width: 100%;
    height: auto;
}

#gallery img:hover {
    border: 5px solid #f7f7f7;
}
</style>
