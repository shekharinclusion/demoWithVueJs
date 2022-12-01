<template>
    <br>
    <br>
    <h1>this is slot componet </h1>
    <slot>{{msg}}   </slot>


</template>


<script>

export default {

    name: 'Slot',

    data() {
        return {
            numebr: 0,
        }
    },
    props:{
        msg:String
    }


}

</script>
