
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import store from './store'
import router from './router'
import App from './App'
require('./bootstrap')

let Vue = require('vue')

Vue.config.productionTip = false

/* eslint no-unused-vars: 0 */
const app = new Vue({
  el: '#app',
  router,
  store,
  render: h => h(App)
})
