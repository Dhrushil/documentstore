/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Reusable Components
Vue.component('navbar', require('./components/reusableComponents/navbar.vue').default);

//Menu Components
Vue.component('landing-page', require('./components/menus/landingPage.vue').default);



// Crud/courses Components
Vue.component('courses-index', require('./components/crud/courses/index.vue').default);
Vue.component('courses-create', require('./components/crud/courses/create.vue').default);
Vue.component('courses-view', require('./components/crud/courses/view.vue').default);














/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/** Vuetify Installation and options */
import Vuetify from "../plugins/vuetify"
import 'vuetify/dist/vuetify.min.css'



const app = new Vue({
    el: '#app',
    vuetify: Vuetify,
});
