import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router({
    routes:[
        //noticias
        {
            path:'/noticia',
            name:'articulo',
            component:require('./components/noticias/articuloComponent')
        }
    ],
    mode: 'history'
})
