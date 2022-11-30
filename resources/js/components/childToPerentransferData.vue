<template>

    <input style="    margin-top: 10px;
    border: 3px solid;
    color: black;" type="text" v-model="name" ><br />
    <h4> binding data</h4>
    <button style="    margin-top: 5px;" v-on:click="getData(name)">send data child to parent </button>


</template>
<script>

export default{

    name:'childToPerentransferData',

    data(){
        return{
            name:'',

        }
    },
    props: {
        getData:Function
    },
    methods:{



    },

}
</script>
