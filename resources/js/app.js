
window.Vue = require('vue');
import CKEditor from '@ckeditor/ckeditor5-vue';
import router from '@/router/index';
import filters from '@/utils/filters';
import Bus from '@/utils/bus'
import App from '@/layout/App.vue';
Vue.component('app-component', App);
Vue.use( CKEditor );
Vue.use(Bus);

const app = new Vue({
    el: '#app',
    router
});

