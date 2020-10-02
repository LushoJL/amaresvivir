<template>

    <div class="container">
        <br>
        <div class="row justify-content-md-center">
            <div class="col-md-auto cardluc-100 naranjado coiny textonegro">
                <strong>ROLES DE GENERO</strong>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-auto ravie carrole">
                <strong>LO HACES TU O YO LO HAGO</strong>
            </div>
        </div>


        <transition>
            <router-view  :respuestas="respuesta"
                          :ninio="ninio"
                          :ninia="ninia"
                          :ambos="ambos"
                          :uri="uri"
                          @respuesta="respuesta.push($event)"
            ></router-view>
        </transition>



</div>
</template>

<script>
export default {
    props:['ninio','ninia','ambos','uri'],

    data() {
        return {
            respuesta: [],
        }

    },

    mounted() {
        if (localStorage.respuesta) {
            this.respuesta = localStorage.respuesta;
        }
    },
    watch: {
        respuesta(newName) {
            localStorage.respuesta = newName;
        }
    },

}
</script>

<style scoped>
    .carrole{
        position: relative;
        height: 100px;
        text-align: center;
        font-size: 1.5vw;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    @media only screen and (max-width: 767px) {
        .carrole {
            font-size: 5vw
        }
    }
</style>
