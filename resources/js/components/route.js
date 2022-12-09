import {createRouter, createWebHashHistory} from 'vue-router';

import java from './Routing/java.vue';
import php from './Routing/php.vue';

const routes=[
     {
        name:'home',
        path:'/:name',
        component:java,
     },
     {
        name:'php',
        path:'/php',
        component:php,
     }
]
const route=createRouter({
    history:createWebHashHistory(),
    hashbang: false,
    fallback: true,
    routes
})

export default route;
