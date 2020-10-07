<template>
    <div>
        <form action="">
            <div>


                <div class="ravie mt-5 mb-5" v-for="pregunta in preguntas" v-show="pregunta.position === c">
                    <center><h1 style="font-size: 50px">{{pregunta.question}}</h1></center>
                </div>

                <div class="radiobtn" v-for="element in elements"  v-show="element.position_id === c">
                    <input
                        :type="element.type"
                        :id="element.option"
                        :name="element.position_id"
                        :value="element.option"><label :for="element.option">{{element.option}}</label>
                </div>

                <div class="" v-for="textElement in textElements" v-if="textElement.position_id === c">
                    <input class="form-control" :type="textElement.type" :placeholder="textElement.option">
                </div>

                <div class="ravie mt-5" v-if="c != max">
                    <center>
                        <button class="btn btn-sm" style="background-color: #CC662D; text: #ffffff"
                                @click.prevent="contador"
                        >Siguiente</button>
                    </center>
                </div>

                <div class="ravie mt-5" v-if="c == max">
                    <center>
                        <button class="btn btn-lg" style="background-color: #CC662D; text: #ffffff"
                                @click.prevent="contador"
                        >Terminar</button>
                    </center>
                </div>
            </div>
        </form>
    </div>
</template>

<script>

    export default {

        mounted() {
            this.obtenerRadios();
            this.obtenerText();
            this.obtenerPregunta();
            this.maximo();
        },

        data() {
            return {
                preguntas: [],
                elements: [],
                textElements: [],
                c: 1,
                max: 0,
            }
        },

        methods: {

            obtenerPregunta()
            {
                axios.get('/lista-preguntas')
                .then(response => {
                    this.preguntas = response.data;
                })
            },

            obtenerRadios()
            {
                axios.get('/lista-radios')
                .then(response => {
                    this.elements = response.data
                    //console.log(response.data)
                })
            },

            obtenerText()
            {
                axios.get('/lista-text')
                    .then(response => {
                        this.textElements = response.data
                    })
            },

            maximo()
            {
                axios.get('/maximo')
                .then(response => {
                    this.max = response.data;
                })
            },

            contador()
            {
                this.c += 1;
            }
        }
    }

</script>
