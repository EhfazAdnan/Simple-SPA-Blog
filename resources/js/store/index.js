import axios from "axios"

export default {
    state: {
       category: [],
       post:[],
       blogpost:[], // frontend blog post fetch
       singlepost:[]
    },
    getters: {
       getCategory(state){
           return state.category
       },
       getAllPost(state){
           return state.post
       },
       getblogPost(state){
        return state.blogpost  // getter for frontend state
       },
       singlepost(state){
           return state.singlepost
       }
    },
    actions: {
       allCategory(context){
           axios.get('/category')
                .then((response) => {
                    context.commit('categories', response.data.categories)
                })
       },
       getAllPost(context){
           axios.get('/post')
                .then((response)=> {
                    context.commit('allpost',response.data.posts)
                })
       },
       getblogPost(context){  // front end get blog post
           axios.get('/blogpost')
                .then((response)=> {
                    context.commit('getblogPost',response.data.posts)
             })
       },
       getPostById(context,payload){
           axios.get('/singlepost/'+payload)
                .then((response) => {
                    context.commit('singlePost',response.data.post)
                })
       }
    },
    mutations: {
       categories(state,data){
           return state.category = data
       },
       allpost(state, payload){
           return state.post = payload
       },
       getblogPost(state, payload){
        return state.blogpost = payload
       },
       singlePost(state, payload){
           return state.singlepost = payload
       }
    }
}