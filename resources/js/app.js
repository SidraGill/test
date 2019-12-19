/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');
import  Vue from 'vue';
import axios from 'axios'


import BootstrapVue from 'bootstrap-vue';
import VueAxios from 'vue-axios';
import VueGoodWizard from 'vue-good-wizard';
// import HorizontalStepper from 'vue-stepper';
import $ from 'jquery';



import Calculation from './components/Calculation';
import ProgressBar from './components/ProgressBar';


Vue.use(BootstrapVue, VueAxios, axios , VueGoodWizard);
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

import fontawesome from '@fortawesome/fontawesome';

// import { library } from '@fortawesome/fontawesome-svg-core'
import { faUserSecret } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

Vue.component('font-awesome-icon', FontAwesomeIcon);
Vue.component('calc-comp', Calculation);
Vue.component('progress-bar', ProgressBar);

import fas from '@fortawesome/fontawesome-free-solid';
import fab from '@fortawesome/fontawesome-free-brands';


fontawesome.library.add(fas, fab);

import Routes from '@/js/routes.js'
import App from '@/js/views/App'

export const eventBus = new Vue();


const app = new Vue({
    el: '#app',
    router: Routes,
    render: h=> h(App),

});
