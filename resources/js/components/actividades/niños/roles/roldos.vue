<template>
    <div class="">

        <div class="row justify-content-md-center">
            <div class="col col-lg-5">
                <center>
                    <img :src="uri+'/compu.png'" class="imgrol" alt="">

                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-link"><img :src="ninio" class="imgrolesboton" alt=""></button>
                        <button type="button" class="btn btn-link"><img :src="ambos" class="imgrolesboton" alt=""></button>
                        <button type="button" class="btn btn-link"><img :src="ninia" class="imgrolesboton" alt=""></button>
                    </div>
                </center>

            </div>
            <div class="col-lg-2">
            </div>
            <div class="col col-lg-5">
                <center>
                    <img :src="uri+'/micro.png'" class="imgrol" alt="">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-link"><img :src="ninio" class="imgrolesboton" alt=""></button>
                        <button type="button" class="btn btn-link"><img :src="ambos" class="imgrolesboton" alt=""></button>
                        <button type="button" class="btn btn-link"><img :src="ninia" class="imgrolesboton" alt=""></button>
                    </div>
                </center>

            </div>
        </div>

        <div class="row justify-content-between">



        </div>
        <router-link :to="{name:'rol-tres'}" @click="lista.push('uno')" class="btn btn-naranjado ravie">SIGUIENTE</router-link>

    </div>
</template>

<script>
export default {
    props: [
        'ninio',
        'ninia',
        'ambos',
        'uri'
    ],
    mounted() {
    },
    data(){
        return{
        }
    },
    methods:{
    }
}
</script>

<style scoped>

</style>
