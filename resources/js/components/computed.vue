<template>
    <br>
    <br>
    <br>
    <h4>computed property </h4>
    <p>computed faster then methods  because he get value on cache </p>
    <input type="number" v-model="num"><br />
    <input type="number" v-model="multiplyTime"><br />
    <button v-on:click="tablecalculation()">Table</button><br />
    <!-- {{table}} -->

    <ul class=".table" v-for="item in table">
        <li>
            {{item}}
        </li>
    </ul>


    <!-- <input type="number" v-bind=""> -->



</template>


<script>

export default {

    name: 'Computed',
    props: {
        msg: String,

    },
    data() {
        return {
            num: null,
            multiplyTime: null,
            table: []
        }
    },
    methods: {

    },
    computed: {
        tablecalculation() {

            for (let index = 1; index <= this.multiplyTime; index++) {
                console.log(this.num);
                this.table.push(this.num * index);

            }

        }

    }

}

</script>
<style>
.table {
    margin-left: 250px;
    margin-top: -17px;
    margin-bottom: 13px;
}
</style>
