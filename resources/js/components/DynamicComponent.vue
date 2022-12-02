<template>
    <br>
    <br>
    <h1>this is render a componet  Dynamic way   </h1>

    <button @click="(tab='Vue')" >vue</button> <button @click="(tab='java')">java</button > <button @click="(tab='php')">php</button>
    <!-- <Vue /> -->

    <component :is="tab"/>

</template>


<script>

import java from './dynamicComponent/java.vue'
import php from './dynamicComponent/php.vue'
import Vue from './dynamicComponent/vue.vue'
export default {

    name: 'DynamicComponent',

    data() {
        return {
            tab:'Vue',
            numebr: 0,

        }
    },
    components:{
        java,php,Vue
    },
    watch:{
        numebr(crunt,old){
            if(crunt>5 && crunt>old){
                alert('stop incremet at a time ');
            }
            console.log(crunt,old);
        }
    }

}

</script>
