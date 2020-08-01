<template>
    <div class="card">
        <div class="card-header">¿En que estás pensando ahora?</div>

        <div class="card-body">

            <form action="" v-on:submit.prevent="newPensamiento()">
                <div class="form-group">
                    <label for="pensamiento">Ahora estoy pensando en:</label>
                    <input type="text" class="form-control" name="pensamiento" v-model="description">
                </div>
                <button type="submit" class="btn btn-primary">
                    Enviar pensamiento
                </button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            description:'',
        }
    },
    methods:{

        newPensamiento(){
            const params={
                description:this.description
            };
            this.description='';
            axios.post('/pensamiento',params).then((response) => {

                const pensamiento = response.data
                this.$emit('new', pensamiento);

            });


        }
    }
}
</script>

<style scoped>

</style>
