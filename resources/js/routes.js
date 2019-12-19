import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '@/js/components/Home';
import Personal from '@/js/components/Personal';
import Income from '@/js/components/Income';
import Property from '@/js/components/Property';
import Deduction from '@/js/components/Deduction';
import Credit from '@/js/components/Credit';
import Wealth from '@/js/components/Wealth';
import Other_Income from '@/js/components/Other_Income';
import Adjustable from '@/js/components/Adjustable';
import Report from '@/js/components/Report';
// import Tax from '@/js/components/Tax';

Vue.use(VueRouter);
const User = {
    props: ['id'],
    template: '<div>User {{ id }}</div>'
};

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/personal',
            name: 'personal info',
            component: Personal,
            props: true
        },
        {
            path: '/income',
            name: 'income',
            component: Income
        },
        {
            path: '/property',
            name: 'property',
            component: Property
        },
        {
            path: '/deduction',
            name: "deduction",
            component: Deduction
        },
        {
            path: '/credit',
            name: 'credit',
            component: Credit
        },{
            path: '/wealth',
            name: 'wealth',
            component: Wealth
        },{
            path: '/other-income',
            name: 'Other_Income',
            component: Other_Income
        },{
            path: '/adjustable',
            name: 'Adjustable',
            component: Adjustable
        },{
            path: '/report',
            name: 'Report',
            component: Report,
            props: true
        },{
            path: '/',
            // name: 'Reset',
            // component: Report,
            // props: true
        },
        /*{
            path: '/tax',
            name: 'tax',
            component: Tax
        },
        {
            path: '/return',
            name: 'return',
            component: Return
        }*/
    ]
});

export default router;
