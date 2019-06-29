
import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)


import Meta from 'vue-meta'
 
Vue.use(Meta)

import index from './components/index.vue'
import services from './components/services.vue'
import projects from './components/projects.vue'
import about from './components/about.vue'
import contact from './components/contact.vue'
import notfound from './components/notfound.vue'

export default new Router({

    mode: 'history',

    routes: [
        {
            path: '/',
            name: 'index',
            component: index,
             meta:{
              //  auth: true
            }
        },
        {
            path: '/services',
            name: 'services',
            component: services,
             meta:{
              //  auth: true
            }
        },
        {
            path: '/projects',
            name: 'projects',
            component: projects,
             meta:{
              //  auth: true
            }
        },
        {
            path: '/about',
            name: 'about',
            component: about,
             meta:{
              //  auth: true
            }
        },
        {
            path: '/contact',
            name: 'contact',
            component: contact,
             meta:{
              //  auth: true
            }
        },
        {
            path: '*',
            name: 'notfound',
            component: notfound,
             meta:{
              
            }
        },

    ]
})
