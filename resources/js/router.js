import Vue from 'vue';
import VueRouter from 'vue-router';
import Start from './views/Start';

Vue.use(VueRouter);

export default VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/', name: 'home', component: Start,
        }
    ]
});