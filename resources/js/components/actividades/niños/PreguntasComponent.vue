<template>

    <div>
        <div class="row mb-3">
            <div class="col-12">
                <button type="button" class="btn btn-primary float-right mr-3 ml-3" data-toggle="modal" data-target="#formModal">
                    Nueva pregunta
                </button>
                <button type="button" class="btn btn-primary float-right mr-3 ml-3" data-toggle="modal" data-target="#optionsModal">
                    Nueva respuesta
                </button>
            </div>
        </div>

        <!--Agregar preguntas-->
        <form method="POST" @submit.prevent="addQuestion">
            <!-- Modal -->
            <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="Title">Nueva Pregunta</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">


                            <label >Categoria de pregunta:</label>
                            <select name="category" id="" class="form-control mb-3"
                                    v-model="category"
                                    required>
                                <option value="">-</option>
                                <option value="niño">Niño</option>
                                <option value="niña">Niña</option>
                            </select>

                            <label>Pregunta:</label>
                            <input type="text" name="question" class="form-control mb-3"
                                   v-model="question"
                                   autocomplete="off" required>

                            <label>Orden de pregunta:</label>
                            <input type="number" name="position" class="form-control mb-3"
                                   v-model="position"
                                   autocomplete="off" required>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--agregar opciones-->
        <form method="POST" @submit.prevent="addOption">
            <!-- Modal -->
            <div class="modal fade" id="optionsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Nueva Opción</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">


                            <label >Tipo de respuesta:</label><br>
                            <center>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="type"
                                               v-model="type"
                                               value="radio">Selección múltiple
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="type"
                                               v-model="type"
                                               value="text">Pregunta abierta
                                    </label>
                                </div>
                            </center>

                            <label>Texto:</label>
                            <input type="text" name="option" class="form-control mb-3" value="option"
                                   v-model="option"
                                   autocomplete="off" required>

                            <label>Pregunta:</label>
                            <select name="question_id" class="form-control mb-3"
                                    v-model="question_id"
                                    required>
                                <option value="">-</option>
                                <option
                                    v-for="question in questionsList"
                                    :value="question.id">{{question.question}}</option>
                            </select>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--tablas-->
        <div class="container-fluid">
            <div class="row">
                <!-- /.col-md-6 -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Preguntas / Opciones</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Pegunta</th>
                                    <th>Categoría</th>
                                    <th>Posición</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr v-for="question in questionsList">
                                    <td>{{question.question}}</td>
                                    <td>{{ question.category }}</td>
                                    <td>{{question.position}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Preguntas / Opciones</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Pegunta</th>
                                    <th>Texto</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr v-for="option in optionList">
                                    <td>{{option.question.question}}</td>
                                    <td>{{option.option}}</td>
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

export default {
    mounted() {
        this.obtenerPreguntas();
        this.obtenerOpciones();
    },

    data() {
        return{
            mesasges: '',
            question: '',
            category: '',
            position: '',
            questionsList: [],
            type: '',
            option: '',
            question_id: '',
            optionList: [],
        }
    },

    methods: {
        obtenerPreguntas() {
            axios.get('/actividades-preguntas-listaPreguntas')
            .then(response => {
                this.questionsList = response.data
                //console.log(response.data);
            })
        },

        addQuestion() {
            axios.post('/guardar-pregunta', {
                category: this.category,
                question: this.question,
                position: this.position,
            })
            .then(response => {
                this.category = '';
                this.question = '';
                this.position = '';
                this.obtenerPreguntas();
                endLoader('success', 'Pregunta guardada');

            }).catch(error => {
                console.log(error);
            })
        },

        obtenerOpciones() {
            axios.get('/actividades-preguntas-listaOpciones')
            .then(response => {
                this.optionList =response.data;
                //console.log(response.data);
            })
        },

        addOption() {
            axios.post('/guardar-opcion', {
                option: this.option,
                type: this.type,
                question_id: this.question_id
            })
            .then(response => {
                this.option = '';
                this.type = '';
                this.question_id = '';

                this.obtenerOpciones();
                endLoader('success', 'Opcion agregada');
            }).catch(error => {
                console.log(error);
            })
        }

    }





}

</script>
