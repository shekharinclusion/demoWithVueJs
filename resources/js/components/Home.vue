<template>
    <!-- <h3>{{msg}}{{email}} </h3> -->
    <h5>method call {{ getname('sohit') }}</h5>
    <input type="text" v-model="name"><br>
    <input type="email" v-model="email"><br>
    <button v-on:click="onclick()">submit</button>
    array
    <ul>
        <li v-for="item in arr">
            {{ item }}
        </li>
    </ul>
    <br>
    abj
    <ul>
        <li v-for="item in userInfo">
            {{ item.name }}
        </li>
    </ul>

    <!-- <h4>{{count}}</h4> -->


    <h1>import componet </h1>
    <reUseComponet :data="userInfo" :reUseFunction="reUseFunction" />

    <h1>dynamic add and remove calsses </h1>
    <dyNamicAddRemoveClasses />
    <br />
    <h1>pass data child to parent </h1>
    <childToPerentransferData :getData="getDataChildComponent" />
</template>
<script>
import reUseComponet from './reuseComponent.vue'
import dyNamicAddRemoveClasses from './dyNamicAddRemoveClasses.vue'
import childToPerentransferData from './childToPerentransferData.vue'
export default {
    name: 'Home',
    props: {
        msg: String,
        // count: Number,
    },
    components:{
        reUseComponet,
        dyNamicAddRemoveClasses,
        childToPerentransferData
    },
    data() {
        return {
            email: 'sample@gmail.com ',
            name: null,
            email: null,
            arr: ['php', 'arr', 'java'],
            userInfo: [
                {
                name: 'shekhar',
                age: 12,
                gender: 'm',
                },
                {
                name: 'asdfasdf',
                age: 14,
                gender: 'm',
                },
                {
                name: 'shsadddekhar',
                age: 11,
                gender: 'm',
                },
        ]
        }
    },
    methods: {
        getname(name) {
            return name;
        },
        onclick() {

            console.log(check);
            // this.count=Number(this.count)+1;
            console.log('name', this.name);
            console.log('email', this.email);

        },
        reUseFunction(){
            console.log('reUseFunction called');
        },
        getDataChildComponent(name){
            alert(name);
        }
    }
}
</script>
