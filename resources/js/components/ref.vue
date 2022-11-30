<template>
     <h1>reff in vue js </h1>
    <h3>
       ref in vue js 3...
    </h3>
    <input type="text" ref="input" v-model="input_value"><br  />

    <button v-on:click="getInputValue()" > use reff</button>


</template>
<script>

export default{
    name:'ref',
    props: {

    },
    data(){
        return{
            input_value:''
        }
    },
    methods:{
        getInputValue(){
            if(this.input_value==''){
                this.$refs.input.focus();
                this.$refs.input.style.color='red';
            }else{
                console.log(this.input_value);
            }
        }
    }

}
</script>
