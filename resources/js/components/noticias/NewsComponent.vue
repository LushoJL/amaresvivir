<template>
    <div>
        <form method="POST" @submit.prevent="guardarDatos" enctype="multipart/form-data">
            <div class="row justify-content-center mt-n4">
                <div class="col-6">
                    <div class="row mb-3" style="justify-content: center">
                        <img :src="foto" alt="foto" width="100" height="auto">
                    </div>
                    <div class="custom-file mb-2">
                        <input type="file" class="custom-file-input" @change="obtenerFoto" required>
                        <label  class="custom-file-label">Agrega una imagen</label>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-5">
                    <label for="titles">Título:</label>
                    <input type="text"
                           class="form-control mb-3"
                           name="title"
                           placeholder="Agrega un título"
                           autocomplete="off"
                           required
                           v-model="title"
                           id="titles"
                    >
                </div>
                <div class="col-3">
                    <label for="authors">Autor:</label>
                    <input type="text"
                           name="author"
                           class="form-control mb-3"
                           placeholder="Autor de la publicación"
                           autocomplete="off"
                           required
                           v-model="author"
                           id="authors"
                    >
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-success float-right">Guardar</button>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-9">
                    <label>Cuerpo de la noticia:</label>
                    <ckeditor :editor="editor" v-model="body" :config="editorConfig"></ckeditor>
                </div>
            </div>
        </form>

        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <!-- /.col-md-6 -->
                <div class="col-lg-11 col-md-11 col-sm-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Listado</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Timestamps</th>
                                    <th>Autor</th>
                                    <th>Título</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr v-for="news in newsList">
                                    <td>{{news.created_at}}</td>
                                    <td>{{news.author}}</td>
                                    <td>{{news.title}}</td>
                                    <td>
                                        <div class="row justify-content-center">

                                            <button class="btn btn-sm btn-danger"
                                                @click.prevent="preguntar(news.id, news.image)"
                                            ><span class="fa fa-trash-alt"></span></button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>

    </div>
</template>

<script>
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

export default {
    props: ['urlpubl'],
    data () {
        return {
            newsList: [],
            title: '',
            author: '',
            body: '',
            editor: ClassicEditor,
            editorData: 'ckeditor 5 for laravel and vuejs',
            editorConfig: {
                // The configuration of the editor.
            },
            fotoMiniatura: this.urlpubl,
            imagen:this.urlpubl,
        }
    },

    mounted() {
        this.obtenerDatos();
    },

    methods: {
        obtenerDatos() {
            axios.get('/obtener-datos-noticia')
            .then(response => {
                this.newsList = response.data
            })
        },

        guardarDatos() {
            Startloader();
            axios.post('/guardar-noticia', {
                image: this.fotoMiniatura,
                title: this.title,
                author: this.author,
                body: this.body,
            })
            .then(response => {
                this.imagen = '';
                this.title = '';
                this.author = '';
                this.body = '';
                this.fotoMiniatura = this.urlpubl;
                this.obtenerDatos()
                endLoader('success', 'Guardado correctamente');
            })
        },

        preguntar(id, image){
            Swal.fire({
                title: '¿Borrar noticia?',
                text: "No se puede revertir",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Borrar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.deleteNew(id, image);
                }
            })
        },

        deleteNew(id, image) {
            Startloader();
            axios.post('/borrar-noticia', {
                id: id,
                image: image
            })
            .then(response => {
                this.obtenerDatos();
                endLoader('warning', 'Eliminado correctamente');
            })
        },

        obtenerFoto(e){
            let file = e.target.files[0];

            this.cargarFoto(file);
        },

        cargarFoto(file){
            let reader = new FileReader();

            reader.onload = (e) => {
                this.fotoMiniatura = e.target.result;
            }
            reader.readAsDataURL(file);
            this.mensaje = 1;
        },
    },

    computed: {
        foto() {
            return this.fotoMiniatura
        }
    }
}
</script>

<style scoped>

</style>
