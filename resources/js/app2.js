require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
import Axios from 'axios'
import VueAxios from 'vue-axios'



let CompanyLayout = require('./components/company/App.vue');

// show the company templates
const Listcompany = Vue.component('Listcompany', require('./components/company/Listcompany.vue'));
const Addcompany = Vue.component('Addcompany', require('./components/company/Addcompany.vue'));
const Deletecompany = Vue.component('Deletecompany', require('./components/company/Deletecompany.vue'));
const Editcompany = Vue.component('Editcompany', require('./components/company/Editcompany.vue'));
const Viewcompany = Vue.component('Viewcompany', require('./components/company/Viewcompany.vue'));
  
//registering modules
Vue.use(VueRouter, VueAxios, Axios)
   
const routes = [
    { 
      name: 'Listcompany',
      path: '/', 
      component: Listcompany 
    },

    { 
        name: 'Addcompany',
        path: '/add-company', 
        component: Addcompany
    },

    { 
        name: 'Editcompany',
        path: '/edit/:id', 
        component: Editcompany
    },

    { 
        name: 'Deletecompany',
        path: '/company-delete', 
        component: Deletecompany
    },

    { 
        name: 'Viewcompany',
        path: '/view/:id', 
        component: Viewcompany
    }
]; 
  
const router = new VueRouter({ mode:'history', routes: routes 
});

// const app = new Vue({
//   el: '#app',
//   components: { CompanyLayout },
//   router,
// });
  
new Vue(
  Vue.util.extend(
    {router}, CompanyLayout)).$mount('#app');