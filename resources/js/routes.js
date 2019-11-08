import Vue from 'vue';
import VueRouter from 'vue-router';

import Listcompany from './components/company/Listcompany.vue';
import Addcompany from './components/company/Addcompany.vue';
import Deletecompany from './components/company/Deletecompany.vue';
import Editcompany from './components/company/Editcompany.vue';
import Viewcompany from './components/company/Viewcompany.vue';

Vue.use(VueRouter);
  
const router = new VueRouter({
     mode:'history', 
     routes: [
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
    ]
});

export default router;