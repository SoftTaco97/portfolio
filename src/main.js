/* Libs */
import Vue from 'vue'; // Vue
import BootstrapVue from 'bootstrap-vue'; // Bootstrap
import 'bootstrap/dist/css/bootstrap.css'; // Bootstrap styles
import 'bootstrap-vue/dist/bootstrap-vue.css'; // More styles
import VueRouter from 'vue-router'; // Vue Router
import router from './routes/index.js'; // Routes
import './css/style.css'; // Main styles

// Using
Vue.use(BootstrapVue);
Vue.use(VueRouter);

// Production setting - I think
Vue.config.productionTip = false

/* Main Application */
import App from './App.vue';

/* Main Application */
new Vue({
  el: '#app',
  router,
  render: h => h(App)
})
