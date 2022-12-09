<template>



<div class="footer">

<h2>Fixed/Sticky Footer Example</h2>
<p>The footer is placed at the bottom of the page.</p>
  <p>Footer</p>
</div>
</template>

<script>
export default {
    name:'Footer'

}
</script>
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #f8f9fa;
   color: red;
   text-align: center;
}
</style>
