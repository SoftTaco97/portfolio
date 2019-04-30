// Vue
import Vue from 'vue';

// Vue Router
import Router from 'vue-router';

// Meta information - SEO YO
import Meta from 'vue-meta';
Vue.use(Meta);

// Pages

// home page
import index from '../components/Index.vue';

// other pages
import other from '../components/Other.vue';

// 404 pages
import app404 from '../components/404.vue';

// Routes
const routes = [
    {
        path: '/',
        component: index
    },
    {
        path: '/other/',
        component: other
    },
    {
        path: '*',
        component: app404
    }
];

// Exporting routes
export default new Router({
  routes,
});