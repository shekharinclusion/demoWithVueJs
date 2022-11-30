<template>
    <p ref="pTag">
        {{ formValue.name }}
        {{ formValue.psw }}
        {{ formValue.education }}
        {{ formValue.user_type }}
    </p>
    <ul v-for="item in error" class="error">
        <li>
            {{item}} feild is requerd.
        </li>
    </ul>

    <form action="" style="    max-inline-size: min-content;">
        <label for="name">Name</label>
        <input type="text" id="name" v-model="formValue.name">
        <label for="psw">Password</label>
        <input type="text" id="psw" v-model="formValue.psw">
        <label for="education">Education</label>
        <select name="" id="education" v-model="formValue.education">
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="B.com">B.com</option>
        </select><br />
        <label for="user">user</label>
        <input type="checkbox" value="user" v-model="formValue.user_type"><br />
        <label for="client">client</label>
        <input type="checkbox" value="client" id="client" v-model="formValue.user_type">
        <button type="button" v-on:click="login()">Login</button>
    </form>

</template>
<script>

export default {
    name: 'Form',
    props: {

    },
    data() {
        return {
            formValue: {
                name: '',
                psw: '',
                education: '',
                user_type: [],
            },
            error:[]
        }
    },
    methods: {
        // if(this.input_value==''){
        //            this.$refs.input.focus();
        //            this.$refs.input.style.color='red';
        //        }else{
        //         this.$refs.pTag.style.color='green'
        //        }
        login() {
            this.error=[]
            for(const item in this.formValue){
                console.log();
                if(this.formValue[item]==='' || this.formValue[item].length==0){

                    this.error.push(item);

                }
            }


        }
    }

}
</script>
<style>
ul.error {
    color: red;
    padding: -10px;
}
.error li {
    /* background-color: rosybrown; */
    width: fit-content;
    /* padding: 4px; */
    background: #e1e1e2;
}
</style>
