import {createRouter, createWebHashHistory} from 'vue-router';

import java from './Routing/java.vue';
import php from './Routing/php.vue';

const routes=[
     {
        name:'java',
        path:'/java',
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
    routes
})

export default route;
