require('./bootstrap');

window.Vue = require('vue').default;

import store from './store';


Vue.component('tour-component', require('./components/TourComponent').default);

const app = new Vue({
    store,
    el: '#app',
    created() {
        let url = window.location.pathname
        let slug = url.substring(url.lastIndexOf('/')+1)

        console.log(url)
        console.log(slug)
        this.$store.commit('SET_SLUG', slug )
        this.$store.dispatch('getTourData', slug)
    }
});
