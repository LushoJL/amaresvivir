<template>
    <div class="container">
        <form @submit.prevent="addImagenes" enctype="multipart/form-data">
            <div class="row justify-content-around">
                <div class="col-4">
                    <img :src="imagenUno" width="100%" alt="">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" accept="image/*" @change="obtenerImagenUno" lang="es">
                        <label class="custom-file-label">Seleccionar Archivo</label>
                    </div>
                </div>
                <div class="col-4">
                    <img :src="imagenDos" width="100%" alt="">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" accept="image/*" @change="obtenerImagenDos" lang="es">
                        <label class="custom-file-label">Seleccionar Archivo</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Aplicar</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    props:['urluno'],
    mounted() {
        console.log()
    },
    data(){
        return{
            imagenMiniatura:this.urluno+'/imageUno.png',
            imagenMiniaturados:this.urluno+'/imageDos.png'
        }
    },
    methods:{
        obtenerImagenUno(e){
            let file = e.target.files[0];
            this.cargarImagen(file,true)
        },
        obtenerImagenDos(e){
            let file = e.target.files[0];
            this.cargarImagen(file,false)
        },
        cargarImagen(file,thumb){
            let reader = new FileReader();
            reader.onload = (e)=>{
                if (thumb)
                    this.imagenMiniatura = e.target.result;
                else
                    this.imagenMiniaturados = e.target.result;

            }
            reader.readAsDataURL(file);
        },
        addImagenes(){
            Startloader();
            axios.post('/rol',{
                imagenUno:this.imagenMiniatura,
                imagenDos:this.imagenMiniaturados,
                rol:'Roldos',
            }).then(response=>{
                console.log(response)
                endLoader('success','Se a subido correctamente');
            })
        }
    },
    computed:{
        imagenUno(){
            return this.imagenMiniatura;
        },
        imagenDos(){
            return this.imagenMiniaturados;
        }
    }
}
</script>

<style scoped>

</style>
