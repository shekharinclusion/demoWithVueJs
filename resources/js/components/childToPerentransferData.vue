<template>
    <h3>
        this is reuse childToPerentransferData......
    </h3>
    <button v-on:click="getData(name)">send data child to parent </button>


</template>
<script>

export default{

    name:'childToPerentransferData',

    data(){
        return{
            name:'shekhar chauhan',

        }
    },
    props: {
        getData:Function
    },
    methods:{



    },

}
</script>
