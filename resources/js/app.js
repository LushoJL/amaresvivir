
require('./bootstrap');

window.Vue = require('vue');

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
//noticia

Vue.component('my-pensamientos-component', require('./components/MyPensamientosComponent').default);
Vue.component('form-component', require('./components/FormComponent').default);
Vue.component('semaforo-component', require('./components/actividades/niños/SemaforoComponent.vue').default);
Vue.component('galeria-component', require('./components/home/GaleriaComponent').default);

const app = new Vue({
    el: '#app',
});
