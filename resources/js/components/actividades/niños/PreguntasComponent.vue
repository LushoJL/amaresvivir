<template>

    <div>
        <div class="row mb-3">
            <div class="col-12">
                <button type="button" class="btn btn-primary float-right mr-3 ml-3" data-toggle="modal" data-target="#optionsModal">
                    Nueva respuesta
                </button>
                <button type="button" class="btn btn-primary float-right mr-3 ml-3" data-toggle="modal" data-target="#formModal">
                    Nueva pregunta
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
                            <select name="category"  class="form-control mb-3"
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

        <!--Editar preguntas-->
        <form method="POST" @submit.prevent="updateQuestion(editQuest.id)">
            <!-- Modal -->
            <div class="modal fade" id="editQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editTitle">Editar Pregunta</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">


                            <label >Categoria de pregunta:</label>
                            <select name="category" class="form-control mb-3"
                                    v-model="editQuest.category"
                                    readonly>
                                <option value="">-</option>
                                <option value="niño">Niño</option>
                                <option value="niña">Niña</option>
                            </select>

                            <label>Pregunta:</label>
                            <input type="text" name="question" class="form-control mb-3"
                                   v-model="editQuest.question"
                                   autocomplete="off" required>

                            <label>Orden de pregunta:</label>
                            <input type="number" name="position" class="form-control mb-3"
                                   v-model="editQuest.position"
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

                            <label >Categoria de Respuesta:</label>
                            <select name="cat" id="" class="form-control mb-3"
                                    v-model="cat"
                                    required>
                                <option value="">-</option>
                                <option value="niño">Niño</option>
                                <option value="niña">Niña</option>
                            </select>

                            <label>Texto:</label>
                            <input type="text" name="option" class="form-control mb-3" value="option"
                                   v-model="option"
                                   autocomplete="off" required>
                            <div v-if="cat === 'niño'">
                                <label>Pregunta:</label>
                                <select name="position_id" class="form-control mb-3"
                                        v-model="position_id"
                                        required>
                                    <option value="">-</option>
                                    <option
                                        v-for="question in questionsList"
                                        :value="question.position">{{question.question}}</option>
                                </select>
                            </div>

                            <div v-else-if="cat === 'niña'">
                                <label>Pregunta:</label>
                                <select name="position_id" class="form-control mb-3"
                                        v-model="position_id"
                                        required>
                                    <option value="">-</option>
                                    <option
                                        v-for="question in questionsGirls"
                                        :value="question.position">{{question.question}}</option>
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--Editar Opciones-->
        <form method="POST" @submit.prevent="updateOption(editOpt.id)">
            <!-- Modal -->
            <div class="modal fade" id="editOptions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title-edit">Editar Opción</h5>
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
                                               v-model="editOpt.type"
                                               value="radio">Selección múltiple
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="type"
                                               v-model="editOpt.type"
                                               value="text">Pregunta abierta
                                    </label>
                                </div>
                            </center>


                            <label>Texto:</label>
                            <input type="text" name="option" class="form-control mb-3" value="option"
                                   v-model="editOpt.option"
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

        <!--tablas-->
        <div class="container-fluid">
            <div class="row">
                <!-- /.col-md-6 -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Preguntas - Niños</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Pegunta</th>
                                    <th>Posición</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr v-for="question in questionsList">
                                    <td>{{question.question}}</td>
                                    <td>{{question.position}}</td>
                                    <td>
                                        <div class="row">
                                        <button class="btn btn-sm btn-warning mr-2"
                                            @click.prevent="editQuestion(question)"
                                        ><span class="fa fa-pencil-alt"></span></button>

                                        <button class="btn btn-sm btn-danger"
                                                @click.prevent="deleteQuestion(question.position)"
                                        ><span class="fa fa-trash-alt"></span></button>
                                        </div>
                                    </td>
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
                            <h3 class="card-title">Opciones / Niños</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Pregunta</th>
                                    <th>Texto</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr v-for="option in optionList">
                                    <td>{{option.question.question}}</td>
                                    <td>{{option.option}}</td>
                                    <td>
                                        <div class="row">
                                            <button class="btn btn-sm btn-warning mr-2"
                                                    @click.prevent="editOption(option, 'niño')"
                                            ><span class="fa fa-pencil-alt"></span></button>

                                            <button class="btn btn-sm btn-danger"
                                                    @click.prevent="deleteOption(option.id)"
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

        <!--tablas nina-->
        <div class="container-fluid">
            <div class="row">
                <!-- /.col-md-6 -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Preguntas - Niñas</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Pregunta</th>
                                    <th>Posición</th>
                                    <td>Acciones</td>
                                </tr>
                                </thead>

                                <tbody>
                                <tr v-for="question in questionsGirls">
                                    <td>{{question.question}}</td>
                                    <td>{{question.position}}</td>
                                    <td>
                                        <div class="row">
                                            <button class="btn btn-sm btn-warning mr-2"
                                                    @click.prevent="editQuestion(question)"
                                            ><span class="fa fa-pencil-alt"></span></button>

                                            <button class="btn btn-sm btn-danger"
                                                    @click.prevent="deleteQuestionNina(question.position)"
                                            ><span class="fa fa-trash-alt"></span></button>
                                        </div>
                                    </td>
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
                            <h3 class="card-title">Opciones / Niñas</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Pregunta</th>
                                    <th>Texto</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr v-for="option in optionGirls">
                                    <td>{{option.question.question}}</td>
                                    <td>{{option.option}}</td>
                                    <td>
                                        <div class="row">
                                            <button class="btn btn-sm btn-warning mr-2"
                                                    @click.prevent="editOption(option, 'niña')"
                                            ><span class="fa fa-pencil-alt"></span></button>

                                            <button class="btn btn-sm btn-danger"
                                                    @click.prevent="deleteOptionNina(option.id)"
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

export default {
    mounted() {
        this.obtenerPreguntas();
        this.obtenerOpciones();
        this.obtenerPreguntasNina();
        this.obtenerOpcionesNina();
    },

    data() {
        return{
            mesasges: '',
            question: '',
            category: '',
            position: '',
            questionsList: [],
            questionsGirls: [],
            type: '',
            option: '',
            cat: '',
            position_id: '',
            optionList: [],
            optionGirls: [],
            editQuest: {'id': '', 'category': '', 'question': '', 'position': ''},
            editOpt: {'id': '', 'option': '', 'type': '', 'cat': ''},
        }
    },

    methods: {
        obtenerPreguntas() {
            axios.get('/actividades-preguntas-listaPreguntas')
            .then(response => {
                this.questionsList = response.data

            })
        },

        obtenerPreguntasNina() {
            axios.get('/actividades-preguntas-listaPreguntas-nina')
                .then(response => {
                    this.questionsGirls = response.data;
                })
        },

        addQuestion() {
            var dest;
            if (this.category == 'niño')
            {
                dest = '/guardar-pregunta';
            }else
            {
                dest = '/guardar-pregunta-nina';
            }
            axios.post(dest, {
                category: this.category,
                question: this.question,
                position: this.position,
            })
            .then(response => {
                if (this.category == 'niño')
                {
                    this.obtenerPreguntas();
                }else
                {
                    this.obtenerPreguntasNina();
                }
                this.category = '';
                this.question = '';
                this.position = '';
                endLoader('success', 'Pregunta guardada');

            }).catch(error => {
                console.log(error);
            })
        },

        editQuestion(data) {
            this.editQuest.id = data.position;
            this.editQuest.category = data.category;
            this.editQuest.question = data.question;
            this.editQuest.position = data.position;
            $('#editQuestion').modal('show');
        },

        updateQuestion(id) {
            var dest;
            if (this.category == 'niño')
            {
                dest = '/actualizar-pregunta/';
            }else
            {
                dest = '/actualizar-pregunta-nina/';
            }
            axios.put(dest + id, this.editQuest)
            .then(response => {
                if (this.category == 'niño')
                {
                    this.obtenerPreguntas();
                }else
                {
                    this.obtenerPreguntasNina();
                }
                this.obtenerPreguntas();
                this.editQuest = {'category': '', 'question': '', 'position': ''};
                endLoader('success', 'Actualizado correctamente');
            })
        },

        deleteQuestion(id) {
            axios.delete('/borrar-preginta/'+ id)
            .then(response => {
                this.obtenerPreguntas();
                endLoader('warning', 'Eliminado correctamente');
            })
        },

        deleteQuestionNina(id) {
            axios.delete('/borrar-preginta-nina/'+ id)
                .then(response => {
                    this.obtenerPreguntasNina();
                    endLoader('warning', 'Eliminado correctamente');
                })
        },

        obtenerOpciones() {
            axios.get('/actividades-preguntas-listaOpciones')
            .then(response => {
                this.optionList = response.data;
            })
        },

        obtenerOpcionesNina() {
            axios.get('/listaOpciones-nina')
                .then(response => {
                    this.optionGirls = response.data;
                })
        },

        addOption() {
            var dest;
            if (this.cat == 'niño')
            {
                dest = '/guardar-opcion';
            }else
            {
                dest = '/guardar-opcion-nina';
            }
            axios.post(dest, {
                option: this.option,
                type: this.type,
                position_id: this.position_id
            })
            .then(response => {
                this.option = '';
                this.type = '';
                this.cat = '';
                this.position_id = '';

                this.obtenerOpciones();
                this.obtenerOpcionesNina();
                endLoader('success', 'Opcion agregada');
            }).catch(error => {
                console.log(error);
            })
        },

        editOption(data, cat) {
            this.editOpt.id = data.id;
            this.editOpt.option = data.option;
            this.editOpt.type = data.type;
            this.editOpt.cat = cat;
            $('#editOptions').modal('show');
        },

        updateOption(id) {
            var dest;
            if (this.editOpt.cat == 'niño')
            {
                dest = '/actualizar-opcion/';
            }else
            {
                dest = '/actualizar-opcion-nina/';
            }
            axios.put(dest + id, this.editOpt)
                .then(response => {
                    if (this.editOpt.cat == 'niño')
                    {
                        this.obtenerOpciones();
                    }else
                    {
                        this.obtenerOpcionesNina();
                    }
                    this.obtenerPreguntas();
                    this.editOpt = {'id': '', 'option': '', 'type': '', 'cat': ''},
                    endLoader('success', 'Actualizado correctamente');
                })
        },

        deleteOption(id) {
            axios.delete('/borrar-opcion/'+ id)
                .then(response => {
                    this.obtenerOpciones();
                    endLoader('warning', 'Eliminado correctamente');
                })
        },

        deleteOptionNina(id) {
            axios.delete('/borrar-opcion-nina/'+ id)
                .then(response => {
                    this.obtenerOpcionesNina();
                    endLoader('warning', 'Eliminado correctamente');
                })
        },

    }
}

</script>
