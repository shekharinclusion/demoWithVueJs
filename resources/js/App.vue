<template>
    <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add user
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form enctype='multipart/form-data'>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" v-model="name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="text" class="form-control" v-model="email">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" v-model="password" name="pswd"
                                placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                            <label for="exampleInputPassword1">File</label>
                            <input type="file" name="file[]"  class="form-control" @change="viewFile" file id="file" multiple>
                        </div>
                        <button type="button" @click="save_formdata()" class="btn btn-secondary" data-bs-dismiss="modal">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <table class="table mt-5 border border-primary">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(user, index) in users" :key="index">

                <th scope="row">{{ ++index }}</th>
                <td>{{ user.name }}</td>
                <td>{{ user.email }}</td>
                <td> <button type="button" @click="delteUser(user.id,--index)" >DELETE</button>  <button type="button" @click="view(user.id,--index)" >VIEW IMG</button> </td>
            </tr>

        </tbody>
    </table>
    <demo msg="this is pars msg from app.vue "></demo>
    <Home msg="this is pars msg from home.vue "></Home>

</template>
<script>
import { reactive, ref } from 'vue';
import axios from 'axios';
import demo from './components/demo.vue';
import Home from './components/Home.vue';

export default {
    components:{
        demo,
        Home
    },

    data() {
        return {
            file: [],
            form: new FormData,
            users: [],
            api: 'http://127.0.0.1:8000/api/get_users',
            api_store: 'http://127.0.0.1:8000/api/store/',
            api_delete: 'http://127.0.0.1:8000/api/delete/',

        }
    },
    setup() {

        const form = reactive({
            email: '',
            pswd: '',
            file: '',
        });

        // console.log(form);

    },
    mounted() {
        // console.log(api);
        axios.get(this.api).then((response) => {
            // console.log(response.data)
            this.users = response.data;
            // console.log(this.users);
        })
    },
    methods: {
        save_formdata() {

         Object.keys(this.file).forEach(key => {
            console.log(1112);
            console.log('obj',this.file[key]);
            this.form.append("files[]", this.file[key]);
        });
            const config ={headers:{'Content-Type': 'application/form-data'}};

            //  let data={ 'name': this.name, 'email': this.email, 'password': this.password ,'file': this.form};
                axios.post(this.api_store,this.form,config).then((response) => {
                    this.users.push(response.data);
                    this.name='';
                    this.password='';
                    this.email='';
                    this.users.slice(0,5);


                })
            // }
        },
        delteUser(id,index){
            console.log(index);
            // console.log(index);
            axios.post(this.api_delete+id).then((response) => {
                this.users.splice(index);
                })
        },
        viewFile(e,onUploadProgress){
            console.log(onUploadProgress);
           let files=e.target.files;
           this.file=files;
        },
        view(id,index){
            axios.post(this.api_delete+id).then((response) => {
                this.users.splice(index);
                })
        }

    }
}
</script>
