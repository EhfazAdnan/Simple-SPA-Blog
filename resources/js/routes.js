import AdminHome from './components/admin/AdminHome'

// category routes
import CategoryList from './components/admin/category/List'
import AddCategory from './components/admin/category/New'
import EditCategory from './components/admin/category/Edit'

// post routes
import PostList from './components/admin/post/List'
import AddPost from './components/admin/post/New'
import EditPost from './components/admin/post/Edit'

// frontend routes
import PublicHome from './components/public/PublicHome'
import BlogPost from './components/public/blog/BlogPost'
import SinglePost from './components/public/blog/SingleBlog'

export const routes = [

   {
      path:'/home',
      component: AdminHome   
   },

   // category routes

   {
      path:'/category-list',
      component: CategoryList   
   },

   {
      path:'/add-category',
      component: AddCategory   
   },

   {
      path:'/edit-category/:categoryid',
      component: EditCategory   
   },

   // post routes
    
   {
      path:'/post-list',
      component: PostList   
   },

   {
      path:'/add-post',
      component: AddPost   
   },

   {
      path:'/edit-post/:postid',
      component: EditPost   
   },

   // frontend routes

   {
      path:'/',
      component: PublicHome   
   },

   {
      path:'/blog',
      component: BlogPost   
   },

   {
      path:'/blog/:id',
      component: SinglePost   
   }

]