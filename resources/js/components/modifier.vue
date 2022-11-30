<template>
    <h4>vue js modifier</h4>
    <label for="psw">name</label>
        <input type="text" id="psw" v-model.lazy="name">

        <p>{{name}}</p>
</template>
<script>

export default {
    name: 'Modifier',
    props: {

    },
    data() {
      return{
        name:''
      }
    },
    methods: {

    }

}
</script>
