<template>
    <br>
    <br>
    <h1>this is watcher componet </h1>
    <h4>{{numebr}}</h4>
    <button @click="(numebr=numebr+1)">+</button> <button @click="(numebr=numebr-1)">-</button>


    <!-- <input type="number" v-bind=""> -->



</template>


<script>

export default {

    name: 'Watcher',

    data() {
        return {
            numebr: 0,

        }
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
