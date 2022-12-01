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

    <br />
    <Computed />

    <br />
    <Watcher />

    <br />
    <Slot ><h1>pass html tag useing slot</h1> </Slot>
    <Slot ><img src="https://i.picsum.photos/id/769/200/300.jpg?hmac=cl3KEs924CuE_nF1wC98S7NBc8JPXkf0hlwtPXGIIhM" alt=""> </Slot>
    <Slot msg="pass data by props" />

    <br />
    <!-- <MultipulSlotOneComponet ><h1>pass html tag useing slot</h1> </MultipulSlotOneComponet>
    <MultipulSlotOneComponet ><img src="https://i.picsum.photos/id/769/200/300.jpg?hmac=cl3KEs924CuE_nF1wC98S7NBc8JPXkf0hlwtPXGIIhM" alt=""> </MultipulSlotOneComponet>
    <MultipulSlotOneComponet msg="pass data by props" /> -->
    <MultipulSlotOneComponet >
        <template v-slot:first>
            <h1>this is first slot </h1>
        </template>
        <template v-slot:second>
            <h1>this is first second </h1>
        </template>
        <template v-slot:last>
            <h1>this is first last </h1>
        </template>

    </MultipulSlotOneComponet>
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
import Computed from './computed.vue';
import Watcher from './watcher.vue';
import Slot from './slot.vue';
import MultipulSlotOneComponet from './multipulSlotOneComponet.vue';
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
        NonPropsAndProps,
        Computed,
        Watcher,
        Slot,
        MultipulSlotOneComponet
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
