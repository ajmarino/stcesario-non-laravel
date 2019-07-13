import Vue from 'vue';
import VueRouter from 'vue-router';
import VueHeadful from 'vue-headful';

import routes from './routes';

Vue.use(VueRouter);
Vue.component('vue-headful', VueHeadful);

// Registers components based on filename
const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

const app = new Vue({
    el: '#app',

    router: new VueRouter(routes),

    data: {
        routes: routes.routes,
    },

    beforeMount() {
        document.getElementsByTagName('html')[0].classList.remove('no-js');
    },

    mounted() {
        console.info('App started.');
    },

    methods: {
        gotoSection(section) {

        }
    }
});
