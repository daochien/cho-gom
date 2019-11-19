import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import App from '@/layout/App';
import Dashboard from '@/page/dashboard';


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
