
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.Fire = new Vue();


Vue.component('youtube-dashboard', require('./Youtube/youtube-dashboard.vue').default)
Vue.component('finder', require('./Youtube/finder.vue').default)

const app = new Vue({
    el: '#app',

});
