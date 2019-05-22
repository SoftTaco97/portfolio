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

// contact page
import contact from '../components/Contact.vue';

// services page
import services from '../components/Services.vue';

// clients page
import clients from '../components/Clients.vue';

// projects page
import projects from '../components/Projects.vue';

// 404 pages
import app404 from '../components/404.vue';

// Routes
const routes = [
    {
        path: '/',
        component: index
    },
    {
        path: '/contact/',
        component: contact
    },
    {
        path: '/services/',
        component: services
    },
    {
        path: '/clients/',
        component: clients
    },
    {
        path: '/projects/',
        component: projects
    },
    {
        path: '*',
        component: app404
    }
];

// Exporting routes
export default new Router({
    routes, // routes
    scrollBehavior (to, from, savedPosition) { // Scroll behavior
        return (savedPosition) 
                ? savedPosition 
                : (to.hash) 
                    ? { 
                        selector: to.hash, 
                        x: 0, 
                        y: 0 
                    } : { 
                        x: 0, 
                        y: 0
                    } 
    }
});