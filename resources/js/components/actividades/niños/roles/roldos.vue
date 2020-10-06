<template>
    <div class="">

        <div class="row justify-content-md-center">
            <div class="col col-lg-5">
                <center>
                    <img :src="uri+'/Roldos/img1.png'" class="imgrol" alt="">

                    <div class="btn-group btn-group-toggle">
                        <label class="btn btn-secondary" :class="{ 'active': segundo.uno === 'niña' }">
                            <input type="radio" name="options" id="option3" value="niña" v-model="segundo.uno"> <img :src="ninia" class="imgrolesboton" alt="">
                        </label>

                        <label class="btn btn-secondary" :class="{ 'active': segundo.uno === 'ambos' }">
                            <input type="radio" name="options" id="option2" value="ambos" v-model="segundo.uno"> <img :src="ambos" class="imgrolesboton" alt="">
                        </label>
                        <label class="btn btn-secondary" :class="{ 'active': segundo.uno === 'niño' }">
                            <input type="radio" name="options" id="option1" value="niño" v-model="segundo.uno" ><img :src="ninio" class="imgrolesboton" alt="">
                        </label>
                    </div>
                </center>

            </div>
            <div class="col-lg-2">
            </div>
            <div class="col col-lg-5">
                <center>
                    <img :src="uri+'/Roldos/img2.png'" class="imgrol" alt="">

                    <div class="btn-group btn-group-toggle">
                        <label class="btn btn-secondary " :class="{ 'active': segundo.dos === 'niña' }">
                            <input type="radio" name="options" id="option4" value="niña" v-model="segundo.dos"> <img :src="ninia" class="imgrolesboton" alt="">
                        </label>

                        <label class="btn btn-secondary" :class="{ 'active': segundo.dos === 'ambos' }">
                            <input type="radio" name="options" id="option6" value="ambos" v-model="segundo.dos"> <img :src="ambos" class="imgrolesboton" alt="">
                        </label>
                        <label class="btn btn-secondary" :class="{ 'active': segundo.dos === 'niño' }">
                            <input type="radio" name="options" id="option5" value="niño" v-model="segundo.dos"><img :src="ninio" class="imgrolesboton" alt="">
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
        if (localStorage.getItem('segundo')) {
            try {
                this.segundo = JSON.parse(localStorage.getItem('segundo'));
            } catch(e) {
                localStorage.removeItem('segundo');
            }
        }
    },
    data(){
        return{
            segundo:{
                uno:'',
                dos:'',
            },

        }
    },
    methods:{
        siguiente(){
            if (this.segundo.uno === '' || this.segundo.dos===''){
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
                let parsed = JSON.stringify(this.segundo);
                localStorage.setItem('segundo', parsed);
                router.push('tres')
            }
        },
    }
}
</script>

<style scoped>

</style>
