<template>
  <body>
    <router-view></router-view>
  </body>
</template>

<script>
import Navbar from "./Navbar";
export default {
  name: "app",
  data() {
    return {
        isLogin:false
      
    };
  },
  components: {
    Navbar,
  },
};
</script>

<style>
</style>