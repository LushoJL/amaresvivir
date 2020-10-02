<template>
    <div>
        <form action="">
            <div class="ravie mt-5 mb-5">
                <center><h1 style="font-size: 50px">¿CON QUE PERSONAJE DEL CUENTO TE IDENTIFICAS?</h1></center>
            </div>

            <div class="radiobtn" v-for="element in elements">
                <input
                    :type="element.type"
                    :id="element.id"  name="1" value="VUERGÜENZA"><label :for="element.id">{{element.option}}</label>
            </div>

            <div class="" v-for="textElement in textElements">
                <input class="form-control" :type="textElement.type" :placeholder="textElement.option">
            </div>

        </form>
    </div>
</template>

<script>

    export default {
        mounted() {
            this.obtenerRadios();
            this.obtenerText();
        },

        data() {
            return {
                elements: [],
                textElements: [],
            }
        },

        methods: {
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
            }
        }
    }

</script>
