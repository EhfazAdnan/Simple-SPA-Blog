<template>
    <div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-10 offset-md-1 mt-5">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Post List</h3>

              <div class="card-tools">
                  <button class="btn btn-primary">
                      <router-link to="/add-post" class="text-white">Add Post</router-link>
                  </button>
              </div>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>User</th>
                  <th>Category</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
        
                <tr v-for="(post,index) in allpost" :key="post.id">
                  <td>{{ index+1 }}</td>
                  <td v-if="post.user">{{ post.user.name }}</td>
                  <td v-if="post.category">{{ post.category.cat_name }}</td>
                  <td>{{post.title | shortlength(35,"...")}}</td>
                  <td>{{post.description | shortlength(75,"...")}}</td>
                  <td><img :src="ourImage(post.photo)" alt="" width="100" height="80"></td>
                  <td>
                      <router-link :to="`edit-post/${post.id}`" class="btn btn-primary text-white">Edit</router-link>
                      <a @click.prevent="deletePost(post.id)" class="btn btn-danger text-white">Delete</a>
                  </td>
                </tr>

                </tbody>
            
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    </div>
</template>

<script>
export default {
    name: "List",
    mounted(){
       this.$store.dispatch('getAllPost')
    },
    computed: {
       allpost(){
           return this.$store.getters.getAllPost
       }
    },
    methods: {
       ourImage(img){
         return "uploadimage/"+img;
       },
       deletePost(id){
         axios.get('/delete/'+id)
              .then(()=>{
                  this.$store.dispatch('getAllPost')
                  toast.fire({
                    type: 'success',
                    title: 'Post Deleted successfully'
                  })
              })
              .catch(()=>{

              })
       }
    }
}
</script>

<style>

</style>