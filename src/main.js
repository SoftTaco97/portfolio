/* Libs */

// Main libraries
import Vue from 'vue'; // Vue
import VueRouter from 'vue-router'; // Vue Router
import BootstrapVue from 'bootstrap-vue'; // Bootstrap

// Third party styles / scripts 
import 'bootstrap/dist/css/bootstrap.css'; // Bootstrap styles
import 'bootstrap-vue/dist/bootstrap-vue.css'; // More styles
import VueParticles from 'vue-particles' // Particles JS

// Project styles / scripts
import router from './routes/index.js'; // Routes
import './css/style.css'; // Main styles

// Using
Vue.use(BootstrapVue);
Vue.use(VueRouter);
Vue.use(VueParticles)

// Production setting - I think
Vue.config.productionTip = false

/* Main Application */
import App from './App.vue';
new Vue({
  el: '#app',
  router,
  render: h => h(App)
});