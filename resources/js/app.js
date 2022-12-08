require('./bootstrap');




import { createApp } from 'vue';
import route from './components/route.js'

//  Vue.use(VueAxios, axios)

// import App from './App.vue';
// import App from './crud/main.vue';
import main from './components/Routing/main.vue';

createApp(main).use(route).mount('#app');

// window.Vue=require('vue').Default;
// Vue.component('app',require('./App.vue').Default);
// const app= new vue({
//     el:'#app'
// })
