import './assets/main.css';

import { createApp } from 'vue';
import App from './App.vue';
import { createPinia } from 'pinia';
import router from './assets/script/router.js';
import BootstrapVue3 from 'bootstrap-vue-3'; 
import 'bootstrap/dist/css/bootstrap.css'; 
import 'bootstrap-vue-3/dist/bootstrap-vue-3.css';

const pinia = createPinia();

const app = createApp(App); 
app.use(BootstrapVue3);
app.use(router);
app.use(pinia);
app.mount('#app');
