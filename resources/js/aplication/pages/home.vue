<template>
<div>
  <router-link to="/ragister">Ragister</router-link> |
    <router-link to="/login">Login</router-link>
    <router-view></router-view>
</div>

</template>
<script>
import route from '../layout/route.js'; 

export default {
    name:'Home'

}
</script>

    