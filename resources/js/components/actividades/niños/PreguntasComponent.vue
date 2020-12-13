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
                            <nav>
                                <ul class="pagination justify-content-end">
                                    <li class="page-item" v-if="paginationP.current_page > 1">
                                        <a href="" class="page-link" @click.prevent="changePageP(paginationP.current_page - 1)">
                                            <span>Atrás</span>
                                        </a>
                                    </li>

                                    <li class="page-item" v-for="page in pagesNumberP" v-bind:class="[page === isActivedP ? 'active' : '']">
                                        <a href="" class="page-link" @click.prevent="changePageP(page)">
                                            {{page}}
                                        </a>
                                    </li>

                                    <li class="page-item" v-if="paginationP.current_page < paginationP.last_page">
                                        <a href="" class="page-link" @click.prevent="changePageP(paginationP.current_page + 1)">
                                            <span>Siguiente</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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
                            <nav>
                                <ul class="pagination justify-content-end">
                                    <li class="page-item" v-if="pagination.current_page > 1">
                                        <a href="" class="page-link" @click.prevent="changePage(pagination.current_page - 1)">
                                            <span>Atrás</span>
                                        </a>
                                    </li>

                                    <li class="page-item" v-for="page in pagesNumber" v-bind:class="[page === isActived ? 'active' : '']">
                                        <a href="" class="page-link" @click.prevent="changePage(page)">
                                            {{page}}
                                        </a>
                                    </li>

                                    <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                                        <a href="" class="page-link" @click.prevent="changePage(pagination.current_page + 1)">
                                            <span>Siguiente</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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
                            <nav>
                                <ul class="pagination justify-content-end">
                                    <li class="page-item" v-if="paginationPN.current_page > 1">
                                        <a href="" class="page-link" @click.prevent="changePagePN(paginationPN.current_page - 1)">
                                            <span>Atrás</span>
                                        </a>
                                    </li>

                                    <li class="page-item" v-for="page in pagesNumberPN" v-bind:class="[page === isActivedPN ? 'active' : '']">
                                        <a href="" class="page-link" @click.prevent="changePagePN(page)">
                                            {{page}}
                                        </a>
                                    </li>

                                    <li class="page-item" v-if="paginationPN.current_page < paginationPN.last_page">
                                        <a href="" class="page-link" @click.prevent="changePagePN(paginationPN.current_page + 1)">
                                            <span>Siguiente</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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
                            <nav>
                                <ul class="pagination justify-content-end">
                                    <li class="page-item" v-if="paginationON.current_page > 1">
                                        <a href="" class="page-link" @click.prevent="changePageON(paginationON.current_page - 1)">
                                            <span>Atrás</span>
                                        </a>
                                    </li>

                                    <li class="page-item" v-for="page in pagesNumberON" v-bind:class="[page === isActivedON ? 'active' : '']">
                                        <a href="" class="page-link" @click.prevent="changePageON(page)">
                                            {{page}}
                                        </a>
                                    </li>

                                    <li class="page-item" v-if="paginationON.current_page < paginationON.last_page">
                                        <a href="" class="page-link" @click.prevent="changePageON(paginationON.current_page + 1)">
                                            <span>Siguiente</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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

            pagination: {
                'total': 0,
                'current_page': 0,
                'per_page': 0,
                'last_page': 0,
                'form': 0,
                'to': 0,
            },
            paginationON: {
                'total': 0,
                'current_page': 0,
                'per_page': 0,
                'last_page': 0,
                'form': 0,
                'to': 0,
            },
            paginationP: {
                'total': 0,
                'current_page': 0,
                'per_page': 0,
                'last_page': 0,
                'form': 0,
                'to': 0,
            },
            paginationPN: {
                'total': 0,
                'current_page': 0,
                'per_page': 0,
                'last_page': 0,
                'form': 0,
                'to': 0,
            },
        }
    },

    methods: {
        obtenerPreguntas(page) {
            axios.get('/actividades-preguntas-listaPreguntas?page='+page)
            .then(response => {
                this.questionsList = response.data.preguntasP.data
                this.paginationP = response.data.pagination
            })
        },

        obtenerPreguntasNina(page) {
            axios.get('/actividades-preguntas-listaPreguntas-nina?page='+page)
                .then(response => {
                    this.questionsGirls = response.data.preguntasN.data;
                    this.paginationPN = response.data.pagination
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

        obtenerOpciones(page) {
            axios.get('/actividades-preguntas-listaOpciones?page='+page)
            .then(response => {
                this.optionList = response.data.opciones.data;
                this.pagination = response.data.pagination
            })
        },

        obtenerOpcionesNina(page) {
            axios.get('/listaOpciones-nina?page='+page)
                .then(response => {
                    this.optionGirls = response.data.opcionesN.data;
                    this.paginationON = response.data.pagination
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

        changePage(page){
            this.pagination.current_page = page;
            this.obtenerOpciones(page)
        },
        changePageON(page){
            this.paginationON.current_page = page;
            this.obtenerOpcionesNina(page)
        },
        changePageP(page){
            this.paginationP.current_page = page;
            this.obtenerPreguntas(page)
        },
        changePagePN(page){
            this.paginationPN.current_page = page;
            this.obtenerPreguntasNina(page)
        },
    },

    computed: {
        isActived() {
            return this.pagination.current_page
        },
        isActivedON() {
            return this.paginationON.current_page
        },
        isActivedP() {
            return this.paginationP.current_page
        },
        isActivedPN() {
            return this.paginationPN.current_page
        },

        pagesNumber() {
            if (!this.pagination.to){
                return []
            }

            let from = this.pagination.current_page - 2;
            if (from < 1){
                from = 1;
            }

            let to = from + (2 * 2);
            if (to >= this.pagination.last_page){
                to = this.pagination.last_page
            }

            let pagesArray = [];
            while (from <= to){
                pagesArray.push(from);
                from++;
            }
            return pagesArray;
        },
        pagesNumberON() {
            if (!this.paginationON.to){
                return []
            }

            let from = this.paginationON.current_page - 2;
            if (from < 1){
                from = 1;
            }

            let to = from + (2 * 2);
            if (to >= this.paginationON.last_page){
                to = this.paginationON.last_page
            }

            let pagesArrayON = [];
            while (from <= to){
                pagesArrayON.push(from);
                from++;
            }
            return pagesArrayON;
        },
        pagesNumberP() {
            if (!this.paginationP.to){
                return []
            }

            let from = this.paginationP.current_page - 2;
            if (from < 1){
                from = 1;
            }

            let to = from + (2 * 2);
            if (to >= this.paginationP.last_page){
                to = this.paginationP.last_page
            }

            let pagesArrayP = [];
            while (from <= to){
                pagesArrayP.push(from);
                from++;
            }
            return pagesArrayP;
        },
        pagesNumberPN() {
            if (!this.paginationPN.to){
                return []
            }

            let from = this.paginationPN.current_page - 2;
            if (from < 1){
                from = 1;
            }

            let to = from + (2 * 2);
            if (to >= this.paginationPN.last_page){
                to = this.paginationPN.last_page
            }

            let pagesArrayPN = [];
            while (from <= to){
                pagesArrayPN.push(from);
                from++;
            }
            return pagesArrayPN;
        },
    }
}

</script>
