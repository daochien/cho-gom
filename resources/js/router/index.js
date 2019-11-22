import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import App from '@/layout/App';
import Dashboard from '@/page/dashboard';
import Categories from '@/page/categories';
import CreateProduct from '@/page/product';
import Product from '@/page/product/Manage.vue';

export const constantRouter = [
    {
        path: '/admin',
        name: 'App',
        redirect: '/admin/',
        component: App,
        meta: {
            title: 'App'
        },
        children: [
            {
                path: '/',
                name: 'Dashboard',
                component: Dashboard,
                meta: {
                    title: 'Dashboard',
                },
            },
            {
                path: 'categories',
                name: 'Categories',
                component: Categories,
                meta: {
                    title: 'Categories',
                },
            },
            //san pham
            {
                path: 'create-product',
                name: 'CreateProduct',
                component: CreateProduct,
                meta: {
                    title: 'CreateProduct',
                },
            },
            {
                path: 'manage-product',
                name: 'Product',
                component: Product,
                meta: {
                    title: 'Product',
                },
            }
        ]
    },
    {
        path: '*',
        redirect: '/'
    }
];

const router = new VueRouter({
    mode: 'history',
    scrollBehavior: () => ({ y: 0 }),
    routes: constantRouter
});


export default router;
