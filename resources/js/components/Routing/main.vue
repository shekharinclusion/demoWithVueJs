<template>
    <br>
    <br>
    <h1>this is render a componet {this is Routning section }   </h1>
    <router-link to="/java">home</router-link>
    <router-link to="/php">home</router-link>
</template>
<script>

import route from '../route.js'
import java from './java.vue'
import php from './php.vue'
import Vue from './vue.vue'

export default {

name: 'main',

data() {
    return {


    }
},
components:{
    java,php,Vue
},


}

</script>
