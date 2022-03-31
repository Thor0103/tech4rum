require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import Forum from './components/Forum.vue';
import Login from './components/pages/Login.vue';
import UserProfile from './components/pages/UserProfile.vue';
import Registration from './components/pages/Registration.vue';
import {routes} from './routes';
import Antd from 'ant-design-vue';
import 'ant-design-vue/dist/antd.css';
import CKEditor from 'ckeditor4-vue';
import VueCryptojs from 'vue-cryptojs'
Vue.config.productionTip = false;
Vue.use(Antd);
Vue.use(VueRouter);
Vue.use(CKEditor);
Vue.use(VueCryptojs);


Vue.component('forum', require('./components/Forum.vue'));
Vue.component('login', require('./components/pages/Login.vue'));
Vue.component('userprofile', require('./components/pages/UserProfile.vue'));
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('registration', require('./components/pages/Registration.vue'));

// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

import '@fortawesome/fontawesome-free/css/all.css';
import '@fortawesome/fontawesome-free/js/all.js';


// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

const router = new VueRouter(
    {
        routes: routes,
    }
)

new Vue (
    {
        el: '#app',
        router,
        render: h => h(Forum)
    },
);

new Vue(
    {
        el: '#login',
        router,
        render: h => h(Login)
    }
);

new Vue (
    {
        el: '#userprofile',
        router,
        render: h => h(UserProfile)
    },
);

new Vue(
    {
        el: '#registration',
        router,
        render: h => h(Registration)
    }
);



