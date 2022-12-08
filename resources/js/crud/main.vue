<template>
<div class="mt-3 d-flex justify-content-start">
    <button type="button" @click="(tab='create')"  class="btn btn-primary">create</button>&nbsp;
    <button type="button" @click="(tab='list')" class="btn btn-primary">list</button>
    <!-- <button type="button" @click="(tab='create')" class="btn btn-success">Success</button> -->
</div>


<component :is="tab" :changeTab="changeTab"  />
<!-- <create /> -->


</template>


<script>
import create from './create.vue';
import list from './list.vue';



export default {
    name: 'main',
    components:{
        create,
        list
    },
        data(){
            return{
                tab:'create'
            }
        },
        methods:{
            changeTab(){
               this.tab='list';

            }
        }

}

</script>
<style>
@import'~bootstrap/dist/css/bootstrap.css'
</style>
