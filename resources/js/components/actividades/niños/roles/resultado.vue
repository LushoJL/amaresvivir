<template>
    <div>
       <h1>PRIMERO</h1>
        <h1 v-for="item in primero">
            {{ item.uno }}
            {{ item.dos }}
        </h1>
        <hr>
        <h1>SEGUNDO</h1>
        <h1 v-for="item in segundo">
            {{ item.uno }}
            {{ item.dos }}
        </h1>
        <hr>
        <h1>TERCERO</h1>
        <h1 v-for="item in tercero">
            {{ item.uno }}
            {{ item.dos }}
        </h1>
    </div>



</template>

<script>
export default {
    data(){
        return{

                primero:[],
                segundo:[],
                tercero:[]

        }
    },
    mounted() {
        if (localStorage.getItem('primero')) {
            try {
                this.primero.push(JSON.parse(localStorage.getItem('primero')));
            } catch(e) {
                localStorage.removeItem('primero');
            }
        }
        if (localStorage.getItem('segundo')) {
            try {
                this.segundo.push(JSON.parse(localStorage.getItem('segundo')));
            } catch(e) {
                localStorage.removeItem('segundo');
            }
        }
        if (localStorage.getItem('tercero')) {
            try {
                this.tercero.push(JSON.parse(localStorage.getItem('tercero')));
            } catch(e) {
                localStorage.removeItem('tercero');
            }
        }
    },

}
</script>

<style scoped>

</style>
