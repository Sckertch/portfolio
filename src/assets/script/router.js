// src\assets\script\router.js
import { createRouter, createWebHistory } from 'vue-router';
import AppProfil from '../../components/AppProfil.vue';
import AppBts from '../../components/AppBts.vue';
import AppProjet from '../../components/AppProjet.vue';
import AppVeille from '../../components/AppVeille.vue';
import Home from '../../components/AppHome.vue';

const routes = [
  { path: '/', name: 'Acceuil', component: Home },
  { path: '/profil', name: 'Profil', component: AppProfil },
  { path: '/bts', name: 'BTS', component: AppBts },
  { path: '/projet', name: 'Projet', component: AppProjet },
  { path: '/veille', name: 'Veille', component: AppVeille },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
