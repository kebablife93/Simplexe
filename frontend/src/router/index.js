import Vue from 'vue'
import VueRouter from 'vue-router'
import HomeConnexion from '../views/HomeConnexion.vue'
import HomeRegistration from '../views/HomeRegistration.vue'
import CalculSimplex from '../views/CalculSimplex.vue'
import ChoixVariable from '../views/ChoixVariable.vue';

Vue.use(VueRouter)

  const routes = [
{
    path: '/connexion',
    name: 'HomeConnexion',
    component: HomeConnexion,
  },

  {
    path: '/calcul',
    name: 'CalculSimplex',
    component: CalculSimplex,
  },

  {
    path: '/registration',
    name: 'HomeRegistration',
    component: HomeRegistration,
  },

  {
    path: '/choixvariable',
    name: 'ChoixVariable',
    component: ChoixVariable,
  },


]

const router = new VueRouter({
  routes
})

export default router
