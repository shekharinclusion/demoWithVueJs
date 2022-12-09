import {createRouter, createWebHashHistory} from 'vue-router';


import Home from '../pages/home.vue';
import Ragister from '../pages/ragister.vue';
import Login from '../pages/login.vue';

const routes=[
     {
        name:'home',
        path:'/',
        component:Home,
     },
     {
        name:'Login',
        path:'/login',
        component:Login,
     },
     {
        name:'Ragister',
        path:'/ragister',
        component:Ragister,
     }
]
const route=createRouter({
    history:createWebHashHistory(),
    hashbang: false,
    fallback: true,
    routes
})

export default route;
