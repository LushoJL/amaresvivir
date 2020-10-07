<template>
    <div class="">

        <div class="row justify-content-md-center">
            <div class="col col-lg-5">
                <center>
                    <img :src="uri+'/Roltres/img1.png'" class="imgrol" alt="">

                    <div class="btn-group btn-group-toggle">
                        <label class="btn btn-secondary" :class="{ 'active': tercero.uno === 'niña' }">
                            <input type="radio" name="options" id="option3" value="niña" v-model="tercero.uno"> <img :src="ninia" class="imgrolesboton" alt="">
                        </label>

                        <label class="btn btn-secondary" :class="{ 'active': tercero.uno === 'ambos' }">
                            <input type="radio" name="options" id="option2" value="ambos" v-model="tercero.uno"> <img :src="ambos" class="imgrolesboton" alt="">
                        </label>
                        <label class="btn btn-secondary" :class="{ 'active': tercero.uno === 'niño' }">
                            <input type="radio" name="options" id="option1" value="niño" v-model="tercero.uno" ><img :src="ninio" class="imgrolesboton" alt="">
                        </label>
                    </div>
                </center>

            </div>
            <div class="col-lg-2">
            </div>
            <div class="col col-lg-5">
                <center>
                    <img :src="uri+'/Roltres/img2.png'" class="imgrol" alt="">

                    <div class="btn-group btn-group-toggle">
                        <label class="btn btn-secondary " :class="{ 'active': tercero.dos === 'niña' }">
                            <input type="radio" name="options" id="option4" value="niña" v-model="tercero.dos"> <img :src="ninia" class="imgrolesboton" alt="">
                        </label>

                        <label class="btn btn-secondary" :class="{ 'active': tercero.dos === 'ambos' }">
                            <input type="radio" name="options" id="option6" value="ambos" v-model="tercero.dos"> <img :src="ambos" class="imgrolesboton" alt="">
                        </label>
                        <label class="btn btn-secondary" :class="{ 'active': tercero.dos === 'niño' }">
                            <input type="radio" name="options" id="option5" value="niño" v-model="tercero.dos"><img :src="ninio" class="imgrolesboton" alt="">
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
    mounted() {
        if (localStorage.getItem('tercero')) {
            try {
                this.tercero = JSON.parse(localStorage.getItem('tercero'));
            } catch(e) {
                localStorage.removeItem('tercero');
            }
        }
    },
    data(){
        return{
            tercero:{
                uno:'',
                dos:'',
            },

        }
    },
    methods:{
        siguiente(){
            if (this.tercero.uno === '' || this.tercero.dos===''){
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'error',
                    title: 'seleccione una opcion'
                })
            }else {
                let parsed = JSON.stringify(this.tercero);
                localStorage.setItem('tercero', parsed);
                router.push('resultado')
            }
        },
    }
}
</script>

<style scoped>

</style>
