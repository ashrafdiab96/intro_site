/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('lang.js');

window.Vue = require('vue').default;
import App from './App.vue';

// import {Swiper} from 'vue2-swiper';
import vue2Swiper from 'vue2-swiper';

import VueLang from '@eli5/vue-lang-js'
import translations from './vue-translations.js';
import VueRouter from 'vue-router';

import Home from './components/HomeComponent.vue';
import About from './components/AboutComponent.vue';
import Services from './components/ServicesComponent.vue';
import Contacts from './components/ContactsComponent.vue';
import NotFound from './components/NotFoundComponent.vue';

import Login from './components/admin/LoginComponent.vue';
import Dashboard from './components/admin/DashboardComponent.vue';

Vue.use(VueLang, {
    messages: translations, // Provide locale file
    locale: localStorage.getItem('local') || 'en', // Set locale
    fallback: localStorage.getItem('local') || 'en' // Set fallback lacale
});

Vue.use(VueRouter);
Vue.use(vue2Swiper);


/**
 * Users components
 */

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('header-component', require('./components/HeaderComponent.vue').default);

Vue.component('home-component', require('./components/HomeComponent.vue').default);

Vue.component('about-component', require('./components/AboutComponent.vue').default);

Vue.component('services-component', require('./components/ServicesComponent.vue').default);

Vue.component('contacts-component', require('./components/ContactsComponent.vue').default);

Vue.component('notfound-component', require('./components/NotFoundComponent.vue').default);

/**
 * Admin components
 */

 Vue.component('admin-login-component', require('./components/admin/LoginComponent.vue').default);

 Vue.component('admin-dashboard-component', require('./components/admin/DashboardComponent.vue').default);


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/intro/public/',
            name: 'home',
            component: Home
        },
        {
            path: '/intro/public/about',
            name: 'about',
            component: About
        },
        {
            path: '/intro/public/services',
            name: 'services',
            component: Services
        },
        {
            path: '/intro/public/contacts',
            name: 'contacts',
            component: Contacts
        },
        {
            path: '/intro/public/admin/login',
            name: 'login',
            component: Login
        },
        {
            path: '/intro/public/admin/dashboard',
            name: 'dashboard',
            component: Dashboard
        },
        {
            path: '/:catchAll(.*)*',
            name: "notfound",
            component: NotFound,
        },
    ],
});


const app = new Vue({
    el: '#app',
    router,
    // render: h => h(App),
});
