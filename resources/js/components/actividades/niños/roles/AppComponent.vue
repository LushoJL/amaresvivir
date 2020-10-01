<template>

    <div class="container">

        <div class="row justify-content-md-center">
            <div class="col-md-auto cardluc-100 naranjado coiny">
                <strong>ROLES DE GENERO</strong>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-auto ravie carrole">
                <strong>LO HACES TU O YO LO HAGO</strong>
            </div>
        </div>


            <router-view  :lista="lista"
                          :ninio="ninio"
                          :ninia="ninia"
                          :ambos="ambos"
                          :uri="uri"
                          @list-added="lista.push($event)"
            ></router-view>


</div>
</template>

<script>
export default {
    props:['ninio','ninia','ambos','uri'],
    mounted() {
        console
    },
    data() {
        return {
            lista: ['Arbol', 'Perro', 'Caballo'],
            transitionName: 'slide-left',
            click:false,
            nombre:''
        }

    },
    watch: {
        click(nuevoValor, valorAnterior){
            console.log(valorAnterior, nuevoValor);
        }
    }

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
