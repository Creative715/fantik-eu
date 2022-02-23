import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({

    state: {
        tour:{
            comments:[],
            statistic:{
                likes: 0,
                views: 0
            }
        },
        slug: '',
    },
    actions: {
        getTourData(context, payload) {
            axios.get('/api/tour-json',{ params: {slug:payload } }) .then((response) =>{
                context.commit('SET_TOUR', response.data.data)
            }).catch(()=>{
                console.log('Error')
            });
        }
    },
    getters: {
        tourViews(state){
                return state.tour.statistic.views;
        },
        tourLikes(state){
                return state.tour.statistic.likes;
        }
    },
    mutations: {
        SET_TOUR(state, payload){
            return state.tour = payload;
        },
        SET_SLUG(state, payload){
            return state.slug = payload;
        }
    }
})
