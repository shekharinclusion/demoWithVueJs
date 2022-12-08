<template>
    <div class="mt-3 col-10">

        <form >
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" v-model="form.username" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <input v-model="form.recipient" type="text" class="form-control" placeholder="Recipient's username"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">@example.com</span>
            </div>

            <label for="basic-url" class="form-label">Your vanity URL</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                <input type="text" v-model="form.url" class="form-control" id="basic-url" aria-describedby="basic-addon3">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" v-model="form.amount" class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
            </div>



            <div class="input-group">
                <span class="input-group-text">With textarea</span>
                <textarea v-model="form.textarea" class="form-control" aria-label="With textarea"></textarea>
            </div>
            <br>
            <div class="d-flex justify-content-center bd-highlight mb-3">

                <button type="button" v-on:click="submitForm()" class="btn btn-success">Success</button>
            </div>
        </form>
    </div>



</template>


<script>
// import  ValidationProvider  from 'vee-validate';


export default {
    name: 'create',
    data() {
        return {
            form: {
                username: '',
                recipient: '',
                url: '',
                amount: '',
                textarea: '',

            }
        }
    },
    props:{
        changeTab:Function
    },


    methods:{
        changeTab(){
            return 1;
        },

    submitForm() {
        axios.post('api/store_form_data', this.form)
            .then((res) => {
                this.form.username=''
                this.form.recipient=''
                this.form.url=''
                this.form.amount=''
                this.form.textarea=''
                this.changeTab();
            //    console.log(this.tab);

            })
            .catch((error) => {
                // error.response.status Check status code
            }).finally(() => {
                //Perform action in always
            });
    }
    }

}

</script>
<style>

</style>
