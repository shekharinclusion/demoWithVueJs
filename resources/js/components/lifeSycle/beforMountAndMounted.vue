<template>
    <h3>befor Mount And Mounted in life sycle section   </h3>
    {{name}}

    <button>___</button>

</template>
<script>

export default{

    name:'beforMountAndMounted',
    beforeMount(){
        this.name=''
        console.log('this is befor beforeMount ',this.$el);
    },
    mounted(){
        console.log('this is befor mounted ',this.$el);
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
