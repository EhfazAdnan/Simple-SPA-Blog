import axios from "axios"

export default {
    state: {
       category: [],
       post:[],
       blogpost:[] // frontend blog post fetch
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
       }
    }
}