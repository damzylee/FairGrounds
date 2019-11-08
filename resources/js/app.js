require('./bootstrap');

import Vue from 'vue';
import Routes from './routes.js';
import Axios from 'axios'
import VueAxios from 'vue-axios'

import App from './components/company/App';

//registering modules
Vue.use(VueAxios, Axios)

const app = new Vue({
  el: '#app',
  router:Routes,  
  render: h => h(App),
});

export default app;