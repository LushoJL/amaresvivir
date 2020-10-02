<template>
    <div>
        <form action="">
            <div>


                <div class="ravie mt-5 mb-5" v-for="pregunta in preguntas" v-show="pregunta.position === c">
                    <center><h1 style="font-size: 50px">{{pregunta.question}}</h1></center>
                </div>

                <div class="radiobtn" v-for="element in elements"  v-show="element.question_id === c">
                    <input
                        :type="element.type"
                        :id="element.id"  name="1" value="VUERGÜENZA"><label :for="element.id">{{element.option}}</label>
                </div>

                <div class="" v-for="textElement in textElements">
                    <input class="form-control" :type="textElement.type" :placeholder="textElement.option">
                </div>
                <div class="ravie mt-5">
                    <center>
                        <button class="btn btn-sm" style="background-color: #CC662D; text: #ffffff"
                                @click.prevent="contador"
                        >Siguiente</button>
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
        },

        data() {
            return {
                preguntas: [],
                elements: [],
                textElements: [],
                c: 1,
                aux: 0,
            }
        },

        methods: {

            obtenerPregunta()
            {
                axios.get('/lista-preguntas')
                .then(response => {
                    this.preguntas = response.data;
                    this.aux = this.preguntas.position
                    console.log(this.aux)
                })
            },

            obtenerRadios()
            {
                axios.get('/lista-radios')
                .then(response => {
                    this.elements = response.data

                })
            },

            obtenerText()
            {
                axios.get('/lista-text')
                    .then(response => {
                        this.textElements = response.data
                    })
            },

            contador()
            {
                this.c = this.c +1;

            }
        }
    }

</script>
