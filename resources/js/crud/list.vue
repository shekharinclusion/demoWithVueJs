<template>
    <div class="mt-3 col-10">
        <h5>user record </h5>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">S.NO</th>
                    <th scope="col">UserName</th>
                    <th scope="col">User Recipient</th>
                    <th scope="col">Url</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item ,index) in userData " :key="index">

                    <th scope="row">{{(index+1)}}</th>
                    <td>{{item.username}}</td>
                    <td>{{item.recipientName}}</td>
                    <td>{{item.url}}</td>
                    <td>{{item.cost}}</td>
                    <td>{{item.discreption}}</td>
                </tr>

            </tbody>
        </table>


    </div>



</template>


<script>
// import  ValidationProvider  from 'vee-validate';


export default {
    name: 'list',
    data() {
        return {
            userData:null

        }
    },
    methods: {

    },
    beforeCreate() {
        axios.get('api/get_form_data', this.form)
            .then((res) => {
                this.userData=res.data;
                console.log(res.data);
                //Perform Success Action
            })
            .catch((error) => {
                // error.response.status Check status code
            }).finally(() => {
                //Perform action in always
            });
    }

}

</script>
<style>

</style>
