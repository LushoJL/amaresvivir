<template>

    <!--elegir niño o niña-->
    <div class="d-flex justify-content-center" id="seletion" v-if="show">

            <div class="box box-1" v-on:click="selectionChildren('ninio')" >
            <h3>Niño</h3>
            <div class="image" >
                <img src="image/actividadesyjuegos/niño.jpg" width="350" alt="For you..." />
            </div>
        </div>

            <div class="box box-2" v-on:click="selectionChildren('ninia')">
                    <h3>Niña</h3>
                    <div class="image">
                        <img src="image/actividadesyjuegos/niña.jpg" width="350" alt="For you..." />
                    </div>
            </div>


    </div>

<!--    cuento de niño-->
    <cuentoniño-component
        v-else-if="children==='ninio'"
    ></cuentoniño-component>
    <cuentoniña-component
        v-else-if="children==='ninia'"
    ></cuentoniña-component>


</template>

<script>
export default {
    name: "niñosComponent",
    data(){
        return{
            children:'',
            show:true
        }
    },
    methods:{
        selectionChildren(info){
            this.children=info;
            this.show=false
        }
    }


}
</script>

<style scoped>

/* image boxes */
.box{
    width: 400px;
    background-color:#f4f4f4;
    border:1px solid #ccc;

    cursor: pointer;

    position:relative;
    z-index:5;
    box-sizing:border-box;


    box-shadow:0 0 3px #ccc;
    -moz-box-shadow:0 0 3px #ccc;
    -webkit-box-shadow:0 0 3px #ccc;

    transform: scale(1);
    -moz-transform: scale(1);
    -webkit-transform: scale(1);
    text-align: center;
    transition: background-color 1s, box-shadow 1s, transform 0.5s;
    -moz-transition: background-color 1s, -moz-box-shadow 1s, -moz-transform 0.5s;
    -webkit-transition: background-color 1s, -webkit-box-shadow 1s, -webkit-transform 0.5s;
    -o-transition: background-color 1s, -o-box-shadow 1s, -o-transform 0.5s;
}

.box:hover{
    background-color:#fff;
    z-index:10;

    box-shadow:0 0 15px #333;
    -moz-box-shadow:0 0 15px #333;
    -webkit-box-shadow:0 0 15px #333;

    transform: scale(1.1);
    -moz-transform: scale(1.1);
    -webkit-transform: scale(1.1);
}
/* title holder */
.box h3{
    font-size:27px;
    color:#777;
    margin:5px 10px;
    padding:5px 10px;
    font-family:'Arial Narrow', Arial;
    letter-spacing:1px;
    text-shadow:0 1px 1px #ccc;
    border-bottom:0 solid #fff;

    transition: color 1s, text-shadow 1s, border-bottom 1s;
    -moz-transition: color 1s, text-shadow 1s, border-bottom 1s;
    -webkit-transition: color 1s, text-shadow 1s, border-bottom 1s;
    -o-transition: color 1s, text-shadow 1s, border-bottom 1s;
}
.box:hover h3{
    color:#333;
    border-bottom:1px solid #aaa;
    text-shadow:1px 1px 1px #fff, 2px 2px 1px #888;
}

/* image holder */
.box .image{

    margin:10px;
    opacity:0.5;
    filter: alpha(opacity=50);

    transition: opacity 1s;
    -moz-transition: opacity 1s;
    -webkit-transition: opacity 1.5s;
    -o-transition: opacity 1s;
}
.box:hover .image{
    opacity:1;
    filter: alpha(opacity=100);
}
.box .image img{
    padding:2%;
    background: #000000;
    width: 100%;

}
.box .image img:hover{
    background:#333;
}

@media (min-width: 600px) {
    .box-1{
        float: left;
        margin-right:10px;
    }
    .box-2{
        float: left;
        margin-left:10px;
    }
}
</style>
