<template>
    <span id="singleblog">
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Post right sidebar</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Blog</a><i class="icon-angle-right"></i></li>
              <li class="active">Blog post right sidebar</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span8">

            <article>
              <div class="row">
                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><a href="#">{{ singlePost.title }}</a></h3>
                    </div>
                    <img :src="`uploadimage/${singlePost.photo}`" alt="" />
                  </div>
                  <p>
                    {{ singlePost.description }}
                  </p>
                  <div class="bottom-article">
                    <ul class="meta-post">
                      <li><i class="icon-user"></i><a href="#"> {{ singlePost.user.name }}</a></li>
                      <li><i class="icon-folder-open"></i><a href="#"> {{ singlePost.category.cat_name }}</a></li>
                      <li><i class="icon-calendar"></i><a href="#"> {{singlePost.created_at | timeformat}}</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>           
          </div>

         <BlogSidebar/> 

        </div>
      </div>
    </section>

    </span>
</template>

<script>

import BlogSidebar from "./BlogSidebar.vue"

export default {
    name: "SingleBlog",

    components:{
       BlogSidebar
    },

    mounted(){
      this.singlepost();
    },

    computed:{
      singlePost(){
          return this.$store.getters.singlepost
      }
    },

    methods:{
       singlepost(){
         this.$store.dispatch('getPostById', this.$route.params.id);
       }
    },

    watch:{
      $route(to, from){
         this.singlepost();
      } 
    }

}
</script>

<style>

</style>