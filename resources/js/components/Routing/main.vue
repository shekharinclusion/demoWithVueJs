<template>
    <br>
    <br>
    <h1>this is render a componet {this is Routning section }   </h1>
    <router-link to="/home-page">home</router-link>
    <router-link to="php">list</router-link>
    <router-view></router-view>
</template>
<script>

import route from '../route.js'


export default {

name: 'main',

data() {
    return {


    }
},



}

</script>
