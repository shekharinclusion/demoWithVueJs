<template>
<br />
    <h3 :class="{green:color}">
        this is reuse dynamic remove and add class by componet
    </h3>

    <button v-on:click="color=!color" >click me </button>

</template>
<script>

export default{
    name:'dyNamicAddRemoveClasses',
    data(){
        return{
            color:true
        }
    }
}
</script>
<style>
.green{
    background-color: green;
    width: 500px;
    padding: 10px;
}
</style>
