/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('imagenes-component', require('./components/ImagenesComponent.vue').default);
Vue.component('galeria-component', require('./components/GaleriaComponent.vue').default);
Vue.component('pagination', require('laravel-vue-pagination'));


const app = new Vue({
    el: '#app',
});
