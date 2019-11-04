<template>
    <div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8 offset-md-2 mt-5">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Category List</h3>

              <div class="card-tools">
                  <button class="btn btn-primary">
                      <router-link to="/add-category" class="text-white">Add Category</router-link>
                  </button>
              </div>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Date</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
        
                <tr v-for="(category,index) in getallCategory" :key="category.id">
                  <td>{{index+1}}</td>
                  <td>{{category.cat_name}}</td>
                  <td>{{category.created_at | timeformat}}</td>
                  <td>
                      <router-link :to="`/edit-category/${category.id}`" class="btn btn-primary">Edit</router-link>
                      <a href="" @click.prevent="deletecategory(category.id)" class="btn btn-danger">Delete</a>
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
          this.$store.dispatch("allCategory")
       },
       computed: {
          getallCategory(){
             return this.$store.getters.getCategory  
          }
       },
       methods: {
         deletecategory(id){
           axios.get('/category/'+id)
                .then(()=> {
                  this.$store.dispatch("allCategory")
                  toast.fire({
                    type: 'success',
                    title: 'Category Deleted successfully'
                  })
                })
         }
       }
   }
</script>


<style>

</style>