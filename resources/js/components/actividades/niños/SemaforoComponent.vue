<template>
    <div class="container">
        <div class="row">
            <!--            ROJO -->
            <div class="col-lg-4 ">
                <div style="position: absolute;width: 250px;height: 250px; background: #ff0000;opacity: 0.4;"></div>
                <div style="width: 250px">
                    <img :src="imagenRojo" id="imagenRojo" width="250" height="250">

                    <form @submit.prevent="addImageRojo" enctype="multipart/form-data">
                        <div class="input-group is-invalid">
                            <div class="custom-file">
                                <input id="rojo" name="baseRojo" type="file" @change="obtenerImageRojo" accept="image/*"
                                       class="custom-file-input">
                                <label class="custom-file-label">Suba una imagen</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control  "
                                      :class="{ 'is-invalid': inavalidRed }"
                                      id="validationTextarea"
                                      name="mensajeverde"
                                      placeholder="Su mensaje"
                                      v-model="rojo">
                                {{ mensajes.rojo }}
                            </textarea>
                            <div class="invalid-feedback" v-if="rojo===''">
                                Por favor, ingrese un mensaje para rojo
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Aplicar</button>
                    </form>
                </div>


            </div>
            <!--            AMARILLO-->
            <div class="col-lg-4">
                <div style="position: absolute;width: 250px;height: 250px; background: yellow;opacity: 0.4;"></div>

                <div style="width: 250px">
                    <img :src="imagenAmarillo" id="imagenAmarillo" width="250" height="250">

                    <form @submit.prevent="addImageAmarillo" enctype="multipart/form-data">

                        <div class="input-group is-invalid">
                            <div class="custom-file">
                                <input id="amarillo" name="baseAmarillo" type="file" @change="obtenerImageAmarillo"
                                       accept="image/*" class="custom-file-input">
                                <label class="custom-file-label">Suba una imagen</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control "
                                      :class="{ 'is-invalid': inavalidYellow }"
                                      name="mensajeamarillo"
                                      placeholder="Su mensaje"
                                      v-model="amarillo">
                                {{ mensajes.amarillo }}
                            </textarea>
                            <div class="invalid-feedback" v-if="amarillo===''">
                                Por favor, ingrese un mensaje para amarillo
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Aplicar</button>
                    </form>
                </div>


            </div>
            <!--            VERDE-->
            <div class="col-lg-4">
                <div style="position: absolute;width: 250px;height: 250px; background: green;opacity: 0.4;"></div>

                <div style="width: 250px">
                    <img :src="imagenVerde" id="imagenVerde" width="250" height="250">

                    <form @submit.prevent="addImageVerde" enctype="multipart/form-data">
                        <div class="input-group ">
                            <div class="custom-file">
                                <input id="verde" name="baseVerde" type="file" @change="obtenerImageVerde"
                                       accept="image/*" class="custom-file-input">
                                <label class="custom-file-label">Suba una imagen</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control "
                                      :class="{ 'is-invalid': inavalidGreen }"
                                      name="mensajeverde"
                                      placeholder="Su mensaje"
                                      v-model="verde">
                                {{ mensajes.verde }}
                            </textarea>
                            <div class="invalid-feedback" v-if="verde===''">
                                Por favor, ingrese un mensaje para verde
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Aplicar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

export default {
    props:['url'],
    mounted() {
        this.getMensajes();
    },
    data() {
        return {
            mensajes: '',
            imagenMiniaturaRojo: this.url + '/rojo/base.jpg',
            imagenMiniaturaAmarillo: this.url + '/amarillo/base.jpg',
            imagenMiniaturaVerde: this.url + '/verde/base.jpg',
            rojo: '',
            amarillo: '',
            verde: '',
            inavalidRed: false,
            inavalidYellow: false,
            inavalidGreen: false,
        }
    },
    methods: {
        getMensajes() {
            var mensajes = 'todoslosmensajesdelsemaforo'
            axios.get(mensajes).then(response => {
                this.mensajes = response.data;
                this.rojo = this.mensajes.rojo;
                this.amarillo = this.mensajes.amarillo;
                this.verde = this.mensajes.verde;
            });
        },
        //rojo
        obtenerImageRojo(e) {
            let file = e.target.files[0];
            this.cargarImagen(file, 'rojo')
        },
        //amarillo
        obtenerImageAmarillo(e) {
            let file = e.target.files[0];
            this.cargarImagen(file, 'amarillo')
        },
        //verde
        obtenerImageVerde(e) {
            let file = e.target.files[0];
            this.cargarImagen(file, 'verde')
        },

        cargarImagen(file, color) {
            let reader = new FileReader();
            reader.onload = (e) => {
                if (color === 'rojo')
                    this.imagenMiniaturaRojo = e.target.result;
                else if (color === 'amarillo')
                    this.imagenMiniaturaAmarillo = e.target.result;
                else
                    this.imagenMiniaturaVerde = e.target.result;
            }
            reader.readAsDataURL(file)
        },
        addImageRojo() {
            Startloader();
            axios.post('/rojo', {
                image: this.imagenMiniaturaRojo,
                mensaje: this.rojo
            }).then(response => {
                this.getMensajes();
                endLoader('success','actualizado exitosamente');

            })
        },
        addImageAmarillo() {

            Startloader();
            axios.post('/amarillo', {
                image: this.imagenMiniaturaAmarillo,
                mensaje: this.amarillo
            }).then(response => {
                this.getMensajes();
                endLoader('success','actualizado exitosamente');
                console.log(response.data);
            })
        },
        addImageVerde() {

            Startloader();
            axios.post('/verde', {
                image: this.imagenMiniaturaVerde,
                mensaje: this.verde
            }).then(response => {
                this.getMensajes();
                endLoader('success','actualizado exitosamente');
                console.log(response.data);
            })
        }
    },
    computed: {
        imagenRojo() {
            return this.imagenMiniaturaRojo;
        },
        imagenAmarillo() {
            return this.imagenMiniaturaAmarillo;
        },
        imagenVerde() {
            return this.imagenMiniaturaVerde;
        },
    }
}
</script>
