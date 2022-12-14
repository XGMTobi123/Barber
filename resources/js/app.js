/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue').default;
import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)

/**
 * The following block of code may be used to automatically register your
 * Vue blocks. It will recursively scan this directory for the Vue
 * blocks and automatically register them with their "basename".
 *
 * Eg. ./blocks/Header.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('app-header', require('./blocks/Header.vue').default);
Vue.component('get-started', require('./blocks/get-started.vue').default);
Vue.component('history-service', require('./blocks/history-service.vue').default);
Vue.component('gallery-footer',require('./blocks/gallery-footer.vue').default);
Vue.component('feedback',require('./blocks/feedback.vue').default);
Vue.component('index', require('@/js/pages/Index.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding blocks to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
});
