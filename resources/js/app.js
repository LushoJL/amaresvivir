
require('./bootstrap');

window.Vue = require('vue');

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('semaforo-component', require('./components/actividadesjuegos/niños/actividadDos/semaforoComponent.vue').default);
Vue.component('cuentoniño-component', require('./components/actividadesjuegos/niños/actividadUno/cuentoNinioComponent.vue').default);
Vue.component('cuentoniña-component', require('./components/actividadesjuegos/niños/actividadUno/cuentoNiniaComponent.vue').default);
Vue.component('niños-component', require('./components/actividadesjuegos/niños/actividadUno/niñosComponent.vue').default);

Vue.component('my-pensamientos-component', require('./components/MyPensamientosComponent').default);
Vue.component('form-component', require('./components/FormComponent').default);
Vue.component('pensamiento-component', require('./components/PensamientoComponent.vue').default);






const app = new Vue({
    el: '#app'
});
