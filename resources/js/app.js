
require('./bootstrap');

window.Vue = require('vue');

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
//noticia
import VueRouter from 'vue-router'

Vue.use(VueRouter)

Vue.component('app-component',require('./components/actividades/niños/roles/AppComponent.vue').default);
Vue.component('semaforo-component',require('./components/actividades/niños/SemaforoComponent.vue').default);
Vue.component('admin-rol-component',require('./components/actividades/niños/roles/adminrolComponent').default);
Vue.component('admin-rol2-component',require('./components/actividades/niños/roles/adminrolDosComponent').default);
Vue.component('admin-rol3-component',require('./components/actividades/niños/roles/adminrolTresComponent').default);
Vue.component('galeria-component', require('./components/home/GaleriaComponent').default);
Vue.component('conocenos-component', require('./components/aboutUs/conocenosComponent').default);

import App from './components/actividades/niños/roles/AppComponent.vue';

import router from "./routes";

const app = new Vue({
    el: '#app',
    router,
    // render: h => h(App)

});
