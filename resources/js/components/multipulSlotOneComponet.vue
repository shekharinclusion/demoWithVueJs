<template>
    <br>
    <br>
    <h1>this is Multipul Slot One Componet  </h1>


    <slot name="first"></slot>

    <slot name="second"></slot>
    <slot name="last"></slot>

</template>


<script>

export default {

    name: 'MultipulSlotOneComponet',

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
