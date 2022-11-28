<template>
    <h3>{{msg}}{{email}} </h3>
    <h5>method call {{getname('sohit')}}</h5>
    <button v-on:click="onclick()">Click Me</button>
</template>
<script>
export default {
    name: 'Home',
    props: {
        msg: String,
    },
    data() {
        return {
            email: 'sample@gmail.com '
        }
    },
    methods:{
        getname(name){
            return name;
        },
        onclick(){
            alert('sda');
        }
    }
}
</script>
