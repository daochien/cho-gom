
window.Vue = require('vue');
import filters from '@/utils/filters';

Vue.component('menu-component', require('@/components/font-end/MenuComponent').default);
Vue.component('product-component', require('@/components/font-end/ProductComponent').default);

const app = new Vue({
    el: '#web_master',
});
