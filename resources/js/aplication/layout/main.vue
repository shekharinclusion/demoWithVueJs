<template>
    <div>
  
    <Home />


    </div>

    <div>
     <!-- <header /> -->
    <teleport to="#header">
    <Header />

    </teleport>

<!-- <Footer /> -->
    <teleport to="#footer">
    <Footer />

    </teleport>
    <!-- <DynamicComponent /> -->
    </div>

</template>
<script>
import route from './route.js'; 
import Home from '../pages/home.vue';
import Header from './header.vue';
import Footer from './footer.vue';
// import  Header from './Header.vue';
export default {
    name:'main',
    components:{
        Header,
        Footer,
        Home
    }

}
</script>
