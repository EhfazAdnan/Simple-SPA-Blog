import axios from "axios"

export default {
    state: {
       category: [],
       post:[]
    },
    getters: {
       getCategory(state){
           return state.category
       },
       getAllPost(state){
           return state.post
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
       }
    },
    mutations: {
       categories(state,data){
           return state.category = data
       },
       allpost(state, payload){
           return state.post = payload
       }
    }
}