<template>

<!--elegir niño o niña-->
<div class="row" id="seletion" v-if="show">
    <div class="col" >
        <a  v-on:click="selectionChildren('ninio')" ><!--aqui habia un v-model-->
        <div class="box box-2" style="float: right">
        <h3>Niño</h3>
        <div class="image">
            <img src="image/actividadesyjuegos/niño.jpg" width="100%" alt="For you..." />
        </div>
    </div>
        </a>
    </div>
    <div class="col">
        <a  v-on:click="selectionChildren('ninia')" >
        <div class="box box-2">
                <h3>Niña</h3>
                <div class="image">
                    <img src="image/actividadesyjuegos/niña.jpg" width="100%" alt="For you..." />
                </div>
        </div>
        </a>
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

/*--------------------------------------------------------------
# actividades y juegos

NIÑOS
--------------------------------------------------------------*/
#holder{
    position:relative;
}


/* image boxes */
.box{
    text-align:center;
    background-color:#f4f4f4;
    border:1px solid #ccc;

    margin:5px 1%;
    padding:10px 2% 15px;
    position:relative;
    z-index:5;
    box-sizing:border-box;
    -moz-box-sizing:border-box;
    -webkit-box-sizing:border-box;

    box-shadow:0 0 3px #ccc;
    -moz-box-shadow:0 0 3px #ccc;
    -webkit-box-shadow:0 0 3px #ccc;

    transform: scale(1);
    -moz-transform: scale(1);
    -webkit-transform: scale(1);

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
.box-1 { max-width:24%; }
.box-2 { max-width:44%; }
.box-3 { max-width:35%; }

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
    padding:7px;
    background:#000;
}
.box .image img:hover{
    background:#333;
}

/* description text holder */
.box .description, .box .description a{
    color:rgb(153,153,153);
    color:rgba(153,153,153,0);
    text-shadow:0 0 5px #aaa;
    text-align:left;
    font-size:14px;

    transition: text-shadow 1s ease 0.5s, color 1s ease 0.5s, outline 1s ease 0.5s;
    -moz-transition: text-shadow 1s ease 0.5s, color 1s ease 0.5s, outline 1s ease 0.5s;
    -webkit-transition: text-shadow 1s ease 0.5s, color 1s ease 0.5s, outline 1s ease 0.5s;
    -o-transition: text-shadow 1s ease 0.5s, color 1s ease 0.5s, outline 1s ease 0.5s;
}
.box:hover .description, .box:hover .description a{
    text-shadow:0 0 0 #fff;
    color:rgb(100,100,100);
}
.box:hover .description a{
    outline:1px dotted #777;
}


#overlay{
    position:fixed;
    width:100%;
    height:100%;
    left:0;
    top:0;
    z-index:7;
    background:rgb(0,0,0);
    background:rgba(0,0,0,0.5);
    filter: alpha(opacity=50);

    transition: background-color 0.7s;
    -moz-transition: background-color 0.7s;
    -webkit-transition: background-color 0.7s;
    -o-transition: background-color 0.7s;
}
#overlay:hover{
    background:rgb(0,0,0);
    background:rgba(0,0,0,0);
    z-index:0;
    filter: alpha(opacity=0);
}

</style>
