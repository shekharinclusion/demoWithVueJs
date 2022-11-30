<template>
    <h3>
        this is reuse component......
    </h3>
    <ul v-for="item in data">
        <!-- {{data}} -->
        <li>
            {{item.name}}
            {{item.gender}}
            {{item.age}}
        </li>
    </ul>
    <button v-on:click="reUseFunction">click me </button>

</template>
<script>

export default{
    name:'reUseComponent',
    props: {
        data: Object,
        reUseFunction:Function,
    }

}
</script>
