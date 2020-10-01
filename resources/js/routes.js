import Vue from 'vue'
import Router from "vue-router";
import roluno from "./components/actividades/niños/roles/roluno.vue";
import roldos from "./components/actividades/niños/roles/roldos.vue";
import roltres from "./components/actividades/niños/roles/roltres.vue";
Vue.use(Router)
export default new Router({
    routes:[
        {
         path:'/rol-uno',
         name:'rol-uno',
         component:roluno
        },
        {
            path:'/rol-dos',
            name:'rol-dos',
            component:roldos
        },
        {
            path:'/rol-tres',
            name:'rol-tres',
            component:roltres
        }
    ],
    hashbang: false,
    linkActiveClass: 'active',
    mode:'history'
})
Router.mode = 'html5'
