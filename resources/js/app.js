
window.Vue = require('vue');

import router from '@/router/index';


import App from '@/layout/App.vue';
Vue.component('app-component', App);


const app = new Vue({
    el: '#app',
    router
});
