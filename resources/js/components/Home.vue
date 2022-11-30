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
    <br/> <button v-on:click="childToPerentransferData()">pass data child to parent</button>
    <br />

    <childToPerentransferData  v-if="childToPerentranscomponet" :getData="getDataChildComponent" />
    <br />

    <button v-on:click="ref_componet()">ref in vue</button>
    <ref v-if="refComponet"/>

    <br /><br />
    <Form  v-if="formShow" />
    <button v-on:click="getFormValue()">form value get </button>

    <br />
    <Modifier/>

    <br />
    <NonPropsAndProps data="this is data !!" id="user-cmd" />

</template>
<script>
import reUseComponet from './reuseComponent.vue';
import dyNamicAddRemoveClasses from './dyNamicAddRemoveClasses.vue';
import childToPerentransferData from './childToPerentransferData.vue';
// import childToPerentransferData from './childToPerentransferData.vue';
import ref from './ref.vue';
import Form from './form.vue';
import Modifier from './modifier.vue';
import NonPropsAndProps from './nonPropsAndProps.vue';
export default {
    name: 'Home',
    props: {
        msg: String,
        // count: Number,
    },
    components:{
        reUseComponet,
        dyNamicAddRemoveClasses,
        childToPerentransferData,
        ref,
        Form,
        Modifier,
        NonPropsAndProps
    },
    data() {
        return {
            refComponet:false,
            childToPerentranscomponet:false,
            formShow:false,
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
        },
        ref_componet(){
            this.refComponet=!this.refComponet;
            console.log(this.refComponet);
        },
        childToPerentransferData(){
            this.childToPerentranscomponet=!this.childToPerentranscomponet;
        },
        getFormValue(){
            this.formShow=!this.formShow;
        }

    }
}
</script>
