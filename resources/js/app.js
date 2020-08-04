
require('./bootstrap');

window.Vue = require('vue');

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('my-pensamientos-component', require('./components/MyPensamientosComponent').default);
Vue.component('form-component', require('./components/FormComponent').default);
Vue.component('pensamiento-component', require('./components/PensamientoComponent.vue').default);
Vue.component('niños-component', require('./components/niñosComponent.vue').default);




const app = new Vue({
    el: '#app'
});
