/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueShowdown from 'vue-showdown'
import Vuetify from "../plugins/vuetify"
import { TiptapVuetifyPlugin } from 'tiptap-vuetify'
import VueHtmlToPaper from 'vue-html-to-paper';
const options = {
  name: '_blank',
  specs: [
    'fullscreen=yes',
    'titlebar=yes',
    'scrollbars=yes'
  ],
  styles: [
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
    'https://unpkg.com/kidlat-css/css/kidlat.css'
  ]
}

Vue.use(VueHtmlToPaper, options);
Vue.use(TiptapVuetifyPlugin, {
  // the next line is important! You need to provide the Vuetify Object to this place.
  vuetify: Vuetify, // same as "vuetify: vuetify"
  // optional, default to 'md' (default vuetify icons before v2.0.0)
  iconsGroup: 'mdi'
})
Vue.use(VueShowdown, {
  // set default flavor of showdown
  flavor: 'github',
  // set default options of showdown (will override the flavor options)
  options: {
    emoji: false,
  },
})
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('input-form', require('./components/crud/InputForm.vue').default);
Vue.component('show-form', require('./components/crud/ShowForm.vue').default);
Vue.component('create-form', require('./components/crud/CreateForm.vue').default);
Vue.component('main-menu', require('./components/menu/MainMenu.vue').default);
Vue.component('update-form', require('./components/crud/UpdateForm.vue').default);
Vue.component('landing-page', require('./components/menu/LandingPage.vue').default);
Vue.component('api-test', require('./components/ApiTest.vue').default);
Vue.component('nav-bar', require('./components/menu/NavBar.vue').default);
Vue.component('user-profile', require('./components/systemPages/UserProfile').default);
Vue.component('settings', require('./components/systemPages/Settings').default);
Vue.component('admin', require('./components/systemPages/Admin').default);
Vue.component('admin-dashboard', require('./components/systemPages/AdminDashboard').default);
Vue.component('admin-alerts', require('./components/systemPages/AdminAlerts').default);



Vue.prototype.$userName = document.querySelector("meta[name='user-name']").getAttribute('content');
Vue.prototype.$userId = document.querySelector("meta[name='user-id']").getAttribute('content');
Vue.prototype.$email = document.querySelector("meta[name='email']").getAttribute('content');
Vue.prototype.$theme = document.querySelector("meta[name='theme']").getAttribute('content');

import 'tiptap-vuetify/dist/main.css'
import 'vuetify/dist/vuetify.min.css'


/**d
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



const app = new Vue({
    el: '#app',
    vuetify: Vuetify,

    
});

