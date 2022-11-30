<template>
    <br />
    <h4>NonPropsAndProps</h4>

    <div v-bind="$attrs">
        <h5>{{data}}</h5>
    </div>

</template>
<script>

export default {
    name: 'NonPropsAndProps',
    props: {
        data:String

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

