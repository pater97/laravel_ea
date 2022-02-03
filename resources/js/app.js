/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

window.Vue = require('vue');


import VueRouter from 'vue-router';
Vue.use(VueRouter);
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
const home = Vue.component('home',require('./pages/home.vue').default); 
const about = Vue.component('about',require('./pages/about.vue').default); 
const contacts = Vue.component('contacts',require('./pages/contacts.vue').default); 
const games = Vue.component('games',require('./pages/games.vue').default);
const game = Vue.component('game',require('./pages/game.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 const routes = [
    {
        path: '/',
        name: 'home',
        component: home
    },
    {
        path: '/about',
        name: 'about',
        component: about
    },
    {
        path: '/Contacts',
        name: 'contacts',
        component: contacts
    },
    {
        path: '/games',
        name: 'games',
        component: games
    },
    // <!-- per lo show -->
    {
        path: '/games/:id',
        name: 'game',
        component: game
    }
];

const router = new VueRouter({
    mode: 'history',
    routes
})

const app = new Vue({
    router,
    el: '#app'
});
