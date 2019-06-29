

require('./bootstrap');

window.Vue = require('vue');

/* ------------------------- Imports -------------------- */

//vee validate
import Vue from 'vue';
import VeeValidate from 'vee-validate';
Vue.use(VeeValidate);

//toated
// register the plugin on vue
import Toasted from 'vue-toasted';
Vue.use(Toasted, {
    duration: 5000
})
// you can also pass options, check options reference below
//Vue.use(Toasted, Options)

//animate.css
require('vue2-animate/dist/vue2-animate.min.css')

//vur router
import router from './router'


//vuetify
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'

Vue.use(Vuetify)


/* ------------------------- Imports -------------------- */


/* ------------------------URL interceptor for progressbar ----------------*/

router.beforeResolve((to, from, next) => {
    // If this isn't an initial page load.
    if (to.name) {
        // Start the route progress bar.
        NProgress.start()
    }
    next()
  })
  
  router.afterEach((to, from) => {
    // Complete the animation of the route progress bar.
    NProgress.done()
  })

  /* ------------------------URL interceptor for progressbar ----------------*/

  


Vue.component('index', require('./components/index.vue'));
Vue.component('services', require('./components/services.vue'));
Vue.component('projects', require('./components/projects.vue'));
Vue.component('about', require('./components/about.vue'));
Vue.component('contact', require('./components/contact.vue'));
Vue.component('notfound', require('./components/notfound.vue'));

//parts
Vue.component('menubar', require('./components/parts/menubar.vue'));
Vue.component('foot', require('./components/parts/foot.vue'));
Vue.component('partners', require('./components/parts/partners.vue'));
Vue.component('share', require('./components/parts/share.vue'));
Vue.component('companyNote', require('./components/parts/companyNote.vue'));

const app = new Vue({
    el: '#app',
    router
});
