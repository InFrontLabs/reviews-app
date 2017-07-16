import Vue from 'vue'
import Router from 'vue-router'
import Reviews from '../components/Reviews'
import Callback from '../components/Callback'

Vue.use(Router)

const router = new Router({
  mode: 'history',
  routes: [
    {
      path: '/home',
      name: 'Reviews',
      component: Reviews
    },
    {
      path: '/callback',
      name: 'Callback',
      component: Callback
    },
    {
      path: '*',
      redirect: '/home'
    }
  ]
})

export default router
