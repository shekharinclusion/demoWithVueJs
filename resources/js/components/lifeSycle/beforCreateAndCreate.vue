<template>
    <h3>Befor_create  and create in life sycle section   </h3>
    {{name}}

    <button>___</button>

</template>
<script>

export default{

    name:'beforCreateAndCreate',
    beforeCreate(){
        this.name=''
        console.log('this is befor beforeCreate ');

    },
    created(){
        console.log('this is befor create ');
    },
    data(){
        return{
            name:'default set ',

        }
    },
    props: {

    },
    methods:{



    },

}
</script>
