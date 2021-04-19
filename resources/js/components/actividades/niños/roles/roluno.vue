<template>
    <div class="">

        <div class="row justify-content-md-center">
            <div class="col col-lg-5">
                <center>
                <img :src="uri+'/Roluno/img1.png'" class="imgrol" alt="">

                    <div class="btn-group btn-group-toggle">
                        <label class="btn btn-secondary" :class="{ 'active': primero.uno === 'niña' }">
                            <input type="radio" name="options" id="option3" value="niña" v-model="primero.uno"> <img :src="ninia" class="imgrolesboton" alt="">
                        </label>

                        <label class="btn btn-secondary" :class="{ 'active': primero.uno === 'ambos' }">
                            <input type="radio" name="options" id="option2" value="ambos" v-model="primero.uno"> <img :src="ambos" class="imgrolesboton" alt="">
                        </label>
                        <label class="btn btn-secondary" :class="{ 'active': primero.uno === 'niño' }">
                            <input type="radio" name="options" id="option1" value="niño" v-model="primero.uno" ><img :src="ninio" class="imgrolesboton" alt="">
                        </label>
                    </div>
                </center>

            </div>
            <div class="col-lg-2">
            </div>
            <div class="col col-lg-5">
                <center>
                <img :src="uri+'/Roluno/img2.png'" class="imgrol" alt="">

                    <div class="btn-group btn-group-toggle">
                        <label class="btn btn-secondary " :class="{ 'active': primero.dos === 'niña' }">
                            <input type="radio" name="options" id="option4" value="niña" v-model="primero.dos"> <img :src="ninia" class="imgrolesboton" alt="">
                        </label>

                        <label class="btn btn-secondary" :class="{ 'active': primero.dos === 'ambos' }">
                            <input type="radio" name="options" id="option6" value="ambos" v-model="primero.dos"> <img :src="ambos" class="imgrolesboton" alt="">
                        </label>
                        <label class="btn btn-secondary" :class="{ 'active': primero.dos === 'niño' }">
                            <input type="radio" name="options" id="option5" value="niño" v-model="primero.dos"><img :src="ninio" class="imgrolesboton" alt="">
                        </label>
                    </div>
                </center>

            </div>
        </div>

        <div class="row justify-content-between">



        </div>
        <br>
        <div class="row justify-content-center">
            <div col-lg-12>
                <button @click="siguiente" class="btn btn-naranjado ravie">SIGUIENTE</button>
            </div>
        </div>

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
        if (localStorage.getItem('primero')) {
            try {
                this.primero = JSON.parse(localStorage.getItem('primero'));
            } catch(e) {
                localStorage.removeItem('primero');
            }
        }
    },
    data(){
        return{
            primero:{
                uno:'',
                dos:'',
            },

        }
    },
    methods:{
        siguiente(){
            if (this.primero.uno === '' || this.primero.dos===''){
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
            }else{
                let parsed = JSON.stringify(this.primero);
                localStorage.setItem('primero', parsed);
                router.push('dos')
            }



        },

    }
}
</script>

<style scoped>

</style>
