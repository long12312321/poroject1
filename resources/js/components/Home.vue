<template>
<div>
  <navbar></navbar>
   <section class="blog-list py-5">
    <div class="container">
      <div class="item mb-5" v-for="listBlog in listB.data" :key="listBlog.id">
        <div class="media">
          <img
            class="mr-3 img-fluid post-thumb d-none d-md-flex"
            v-bind:src="listBlog.image"
            height="400px"
            width="400px"
            alt="image"
          />
          <div class="media-body">
            <h3 class="title mb-1">{{ listBlog.title }}</h3>
            <div class="intro">{{ listBlog.short_des }}</div>
            <router-link to="detail">Read more &rarr;</router-link>
          </div>
          <!--//media-body-->
        </div>
        <!--//media-->
      </div>
      <pagination :data="listB" @pagination-change-page="getResults"></pagination>
    
      <!--//item-->
    </div>
    
  </section>
   
</div>
 
</template>

<script>
import axios from "axios";
import Navbar from "./Navbar";
export default {
  name: "Home",
  data: function () {
    return {
      listB: {},
    };
  }, 
  components: {
    Navbar
  },
  mounted(){
    this.getResults();
  },
  methods:{
    getResults(page = 1) {
			axios.get('http://127.0.0.1:8000/api/home?page=' + page)
				.then(response => {
					this.listB = response.data;
				});
		}
  }
};
</script>

<style>
</style>