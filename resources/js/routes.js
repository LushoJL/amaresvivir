import Vue from 'vue'
import Router from "vue-router";
import roluno from "./components/actividades/niños/roles/roluno.vue";
import roldos from "./components/actividades/niños/roles/roldos.vue";
import roltres from "./components/actividades/niños/roles/roltres.vue";
import resultado from "./components/actividades/niños/roles/resultado.vue";
Vue.use(Router)
export default new Router({
    routes:[
        {
         path:'/rol/uno',
         name:'rol-uno',
         component:roluno
        },
        {
            path:'/rol/dos',
            name:'rol-dos',
            component:roldos
        },
        {
            path:'/rol/tres',
            name:'rol-tres',
            component:roltres
        },
        {
            path:'/rol/resultado',
            name:'resultado',
            component:resultado
        }
    ],
    hashbang: false,
    linkActiveClass: 'active',
    mode:'history'
})
Router.mode = 'html5'
