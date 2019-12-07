
window.Vue = require('vue');
import filters from '@/utils/filters';
import store from '@/store/index';

Vue.component('menu-component', require('@/components/font-end/menu/MenuComponent').default);
Vue.component('home-list-product-component', require('@/components/font-end/home/ListProductComponent').default);
//product
Vue.component('filter-product-component', require('@/components/font-end/product/FilterComponent').default);
Vue.component('product-component', require('@/components/font-end/product/ListProductComponent').default);
Vue.component('cart-component', require('@/components/font-end/cart/CartComponent').default)
const app = new Vue({
    el: '#web_master',
    store
});
