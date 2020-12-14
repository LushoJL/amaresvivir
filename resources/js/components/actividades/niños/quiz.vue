<template>
    <div>
            <div>

                <div class="ravie mt-5 mb-5" v-for="pregunta in preguntas" v-show="pregunta.position === c">
                    <center><h1 style="font-size: 50px">{{pregunta.question}}</h1></center>
                </div>

                <div class="radiobtn" v-for="element in elements"  v-show="element.position_id === c">
                    <input
                        :type="element.type"
                        :id="element.id"
                        :name="element.position_id"
                        :value="element.option"
                    >
                    <label :for="element.id">{{element.option}}</label>
                </div>

                <div class="" v-for="textElement in textElements" v-if="textElement.position_id === c">
                    <input class="form-control"
                           :type="textElement.type"
                           :placeholder="textElement.option"
                           :name="textElement.position_id+1"
                           :autocomplete="off"
                    >
                </div>

                <div class="ravie mt-5" v-if="c != max">
                    <center>
                        <button class="btn btn-sm" style="background-color: #CC662D; text: #ffffff"
                                @click.prevent="contador"
                        >Siguiente</button>
                    </center>
                </div>

                <div class="ravie mt-5" v-show="c == max">
                    <center>
                        <button type="submit" class="btn btn-lg" style="background-color: #CC662D; text: #ffffff"
                            @click="mensaje"
                        >Terminar</button>
                    </center>
                </div>
            </div>

    </div>
</template>

<script>

    export default {

        props: ['cat'],

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
                var dest;
                if (this.cat == 'niño')
                {
                    dest = '/lista-preguntas';
                }
                else
                {
                    dest = '/lista-preguntas-nina';
                }
                axios.get(dest)
                .then(response => {
                    this.preguntas = response.data;
                })
            },

            obtenerRadios()
            {
                var dest;
                if (this.cat == 'niño')
                {
                    dest = '/lista-radios';
                }
                else
                {
                    dest = '/lista-radios-nina';
                }
                axios.get(dest)
                .then(response => {
                    this.elements = response.data
                    //console.log(response.data)
                })
            },

            obtenerText()
            {
                var dest;
                if (this.cat == 'niño')
                {
                    dest = '/lista-text';
                }
                else
                {
                    dest = '/lista-text-nina';
                }
                axios.get(dest)
                    .then(response => {
                        this.textElements = response.data
                    })
            },

            maximo()
            {
                var dest;
                if (this.cat == 'niño')
                {
                    dest = '/maximo';
                }
                else
                {
                    dest = '/maximo-nina';
                }
                axios.get(dest)
                .then(response => {
                    this.max = response.data;
                })
            },

            contador()
            {
                this.c += 1;
            },

            alerta()
            {
                modalAlert('¡Felicidades!', 'Terminaste las preguntas', 'success');

            },

            mensaje()
            {
                endLoader('success', 'Se guardaron tus respuestas');
            }

        }
    }

</script>
