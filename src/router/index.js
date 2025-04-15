import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  {
    path: '/',
    name: 'home',
    component: () => import('../components/AppHome.vue')  // Ajoutez cette route pour la page d'accueil
  },
  {
    path: '/profil',
    name: 'profil',
    component: () => import('../components/AppProfil.vue')
  },
  {
    path: '/bts',
    name: 'bts',
    component: () => import('../components/AppBts.vue')
  },
  {
    path: '/projets',
    name: 'projets',
    component: () => import('../components/projet/PartProjet.vue')
  },
  {
    path: '/stages',
    name: 'stages',
    component: () => import('../components/projet/PartStage.vue')
  }
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
});

export default router;