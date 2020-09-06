require('./bootstrap');

import Vue from 'vue';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import vueScrollto from 'vue-scrollto';
import locale from 'element-ui/lib/locale/lang/en';
import HeaderContent from './components/HeaderContent';
import MainContent from './components/MainContent';
import FooterContent from './components/FooterContent';
import store from './store';

Vue.use(ElementUI, { locale });
Vue.use(vueScrollto);

const app = new Vue({
    el: '#app',
    store: store,
    components: {
        'header-content': HeaderContent,
        'main-content': MainContent,
        'footer-content': FooterContent,
    },
    created() {
        store.dispatch('getBookings');
    }
});


