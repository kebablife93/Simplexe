import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
      authenticated: false
  },
  mutations: {
      setAuthenticated(state, value){
          this.replaceState({...state, authenticated: value})
          //setlocalStorage authenticated
          console.log(state)
      },
    initialize(state){
      if(typeof(localStorage.getItem("exist")) == 'undefined'){
        state.authenticated = false;
      }else{
        state.authenticated = localStorage.getItem("exist");
      }
    }
  },
  actions: {
  },
  modules: {
  }
})