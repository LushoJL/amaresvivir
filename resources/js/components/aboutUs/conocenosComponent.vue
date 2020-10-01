<template>

    <div class="container">
        <form @submit.prevent="guardarCambios">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="mision">MISION</label>
                    <textarea class="form-control" rows="7" id="mision" v-model="mision"></textarea>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="vision">VISION</label>
                    <textarea class="form-control" rows="7" id="vision" v-model="vision"></textarea>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="filosofia">FILOSOFIA</label>
                    <textarea class="form-control" rows="7" id="filosofia" v-model="filosofia"></textarea>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="obejtivos">OBEJTIVOS</label>
                    <textarea class="form-control" rows="7" id="obejtivos" v-model="objetivo"></textarea>
                </div>
            </div>

        </div>
        <div class="row justify-content-center">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="ornigrama">ORNIGRAMA</label>
                    <div class="card" style="width: 100%;">
                        <img
                            :src="imagen"
                            class="card-img-top"
                            alt="Imagen no cargo"
                            height="200px">

                        <div class="card-body">
                            <input type="file"
                                   accept="image/*"
                                   @change="obtenerImagen"
                                   class=""
                                   id="ornigrama">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </form>
    </div>

</template>

<script>
export default {
    props:['urlstorage'],
    mounted() {
        this.obtenerDatos()
    },
    data(){
        return{
            mision:'',
            vision:'',
            filosofia:'',
            objetivo:'',
            ornigrama:''
        }
    },
    methods:{

      obtenerDatos(){
          axios.get('todoslosdatosdequienessomosadmin').then(response=>{
              this.mision=response.data.mision;
              this.vision=response.data.vision;
              this.filosofia=response.data.filosofia;
              this.objetivo=response.data.objetivo;
              this.ornigrama=this.urlstorage+response.data.ornigrama;
          })

      },
        obtenerImagen(e){
          let file =e.target.files[0];
          this.cargarImagen(file)

        },
        cargarImagen(file){
          let reader = new FileReader();
          reader.onload = (e)=>{
              this.ornigrama=e.target.result
          }
          reader.readAsDataURL(file);
        },
        guardarCambios(){
            Startloader();
            axios.post('guardardatos',{
                mision:this.mision,
                vision:this.vision,
                filosofia:this.filosofia,
                objetivo:this.objetivo,
                ornigrama:this.ornigrama
            }).then(response=>{
                console.log(response)
                this.obtenerDatos();
                endLoader('success','Datos Guardados');
            })
        }
    },
    computed:{
        imagen(){

            return this.ornigrama;
        }
    }

}
</script>

<style scoped>

</style>
