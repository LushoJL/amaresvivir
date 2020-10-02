<template>
    <div class="">

        <div class="row justify-content-md-center">
            <div class="col col-lg-5">
                <center>
                    <img :src="uri+'/Roldos/imageUno.png'" class="imgrol" alt="">

                    <div class="btn-group btn-group-toggle">
                        <label class="btn btn-secondary" :class="{ 'active': respuesta.uno === 'niña' }">
                            <input type="radio" name="options" id="option3" value="niña" v-model="respuesta.uno"> <img :src="ninia" class="imgrolesboton" alt="">
                        </label>

                        <label class="btn btn-secondary" :class="{ 'active': respuesta.uno === 'ambos' }">
                            <input type="radio" name="options" id="option2" value="ambos" v-model="respuesta.uno"> <img :src="ambos" class="imgrolesboton" alt="">
                        </label>
                        <label class="btn btn-secondary" :class="{ 'active': respuesta.uno === 'niño' }">
                            <input type="radio" name="options" id="option1" value="niño" v-model="respuesta.uno" ><img :src="ninio" class="imgrolesboton" alt="">
                        </label>
                    </div>
                </center>

            </div>
            <div class="col-lg-2">
            </div>
            <div class="col col-lg-5">
                <center>
                    <img :src="uri+'/Roldos/imageDos.png'" class="imgrol" alt="">

                    <div class="btn-group btn-group-toggle">
                        <label class="btn btn-secondary " :class="{ 'active': respuesta.dos === 'niña' }">
                            <input type="radio" name="options" id="option4" value="niña" v-model="respuesta.dos"> <img :src="ninia" class="imgrolesboton" alt="">
                        </label>

                        <label class="btn btn-secondary" :class="{ 'active': respuesta.dos === 'ambos' }">
                            <input type="radio" name="options" id="option6" value="ambos" v-model="respuesta.dos"> <img :src="ambos" class="imgrolesboton" alt="">
                        </label>
                        <label class="btn btn-secondary" :class="{ 'active': respuesta.dos === 'niño' }">
                            <input type="radio" name="options" id="option5" value="niño" v-model="respuesta.dos"><img :src="ninio" class="imgrolesboton" alt="">
                        </label>
                    </div>
                </center>

            </div>
        </div>

        <div class="row justify-content-between">



        </div>
        <button @click="siguiente" class="btn btn-naranjado ravie">SIGUIENTE</button>
        <!--        <router-link :to="{name:'rol-dos'}" @click="lista.push('uno')" class="btn btn-naranjado ravie">SIGUIENTE</router-link>-->

    </div>
</template>

<script>
import router from "../../../../routes.js";
export default {
    props: [
        'ninio',
        'ninia',
        'ambos',
        'uri'
    ],
    data(){
        return{
            respuesta:{
                uno:'',
                dos:'',
            },

        }
    },
    methods:{
        siguiente(){
            this.$emit('respuesta', this.respuesta);
            router.push('resultado')
        }
    }
}
</script>

<style scoped>

</style>
