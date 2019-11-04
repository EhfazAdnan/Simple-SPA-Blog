<template>
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-around">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Post {{ this.$route.params.postid }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" enctype="multipart/form-data" @submit.prevent="updatePost()">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="postId">Post Title</label>
                                    <input type="text" class="form-control" id="postId" placeholder="Post Title" v-model="form.title" name="title" :class="{ 'is-invalid': form.errors.has('title') }">
                                    <has-error :form="form" field="title"></has-error>
                                </div>

                                <div class="form-group">
                                    <label for="descriptionId">Post Description</label>
                                    <!-- <textarea class="form-control" id="descriptionId" placeholder="Post Description" v-model="form.description" name="description" :class="{ 'is-invalid': form.errors.has('description') }"></textarea> -->
                                    <markdown-editor v-model="form.description"></markdown-editor>
                                    <has-error :form="form" field="description"></has-error>
                                </div>

                                <div class="form-group">
                                    <label for="postId">Select Category</label>
                                    <select class="form-control" :class="{ 'is-invalid': form.errors.has('cat_id') }" v-model="form.cat_id">
                                        <option disabled value="">Choose your category</option>
                                        <option :value="category.id" v-for="(category) in getallCategory" :key="category.id">{{ category.cat_name }}</option>
                                    </select>
                                    <has-error :form="form" field="cat_id"></has-error>
                                </div>

                                <div class="form-group">
                                    <label>Select Post Image</label><br>
                                    <input @change="changePhoto($event)" type="file" name="photo" :class="{ 'is-invalid': form.errors.has('photo') }">
                                    <img :src="updateImage()" alt="" width="100" height="60">
                                    <has-error :form="form" field="photo"></has-error>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</template>

<script>
export default {
    name: "Edit",
    data(){
       return{
           form: new Form({
               title:'',
               description:'',
               cat_id:'',
               photo:''
           })
       }
    },
    mounted(){
       this.$store.dispatch("allCategory")
    },
    created() {
        var _this = this;
        axios.get('post/' + this.$route.params.postid)
             .then(function (response) {
             console.log(response.data);
            _this.form.fill(response.data.post);
        });
    },
    computed: {
        getallCategory(){
           return this.$store.getters.getCategory
        }
    },
    methods:{
       changePhoto(event){
           let file = event.target.files[0];
           if(file.size>1048576){
                toast.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong',
                    footer:'<a href>Why do I have this issue?</a>'
                })
           }else{
                let reader = new FileReader();
                  reader.onload = event => {
                  this.form.photo = event.target.result
                };

               reader.readAsDataURL(file);
           }

       },

       updatePost(){
           this.form.post('update/' + this.$route.params.postid)
               .then(()=>{
                    this.$router.push('/post-list')
                        toast.fire({
                            type: 'success',
                            title: 'Post Updated successfully'
                    }) 
               })
               .catch(()=>{

               })
       },

       updateImage(){
            let img = this.form.photo;
            if(img.length > 100){
                return this.form.photo
            }else{
                return "uploadimage/"+this.form.photo
            }
       }
    }
}
</script>

<style>

</style>