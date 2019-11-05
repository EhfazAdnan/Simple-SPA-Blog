<template>
    <span id="sidebar">
        <div class="span4">
            <aside class="right-sidebar">
              <div class="widget">

                <form class="form-search">
                  <input @keyup="RealSearch" placeholder="Type something" v-model="keyword" type="text" class="input-medium search-query">
                  <button type="submit" @click.prevent="RealSearch" class="btn btn-square btn-theme">Search</button>
                </form>

              </div>
              <div class="widget">
                <h5 class="widgetheading">Categories</h5>
                <ul class="cat">
                  <li v-for="(category) in allcategory" :key="category.id"><i class="icon-angle-right"></i><router-link :to="`/categories/${category.id}`">{{ category.cat_name }}</router-link><span> (20)</span></li>
                </ul>
              </div>
              <div class="widget">
                <h5 class="widgetheading">Latest posts</h5>
                <ul class="recent">

                  <li v-for="(post) in blogpost" :key="post.id">
                    <img :src="`uploadimage/${post.photo}`" class="pull-left" alt="" width="100" height="100" />
                    <h6><router-link :to="`/blog/${post.id}`">{{ post.title }}</router-link></h6>
                    <p>
                      {{ post.description | shortlength(100,"...") }}
                    </p>
                  </li>
                  
                </ul>
              </div>
            </aside>
          </div>
    </span>
</template>

<script>
export default {
    name: "BlogSidebar",
    data(){
       return{
         keyword:''
       }
    },
    computed: {
      allcategory(){
        return this.$store.getters.allcategory
      },
      blogpost(){
        return this.$store.getters.getblogPost
      }
    },
    mounted(){
      this.$store.dispatch('allcategories')
      this.$store.dispatch('getblogPost');
    },
    methods: {
      RealSearch(){
        this.$store.dispatch('SearchPost',this.keyword);
      }
    }
}
</script>

<style>

</style>