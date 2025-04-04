<template>
    <div id="app">
        <NavBar />
        <transition name="fade-slide" mode="out-in">
            <router-view />
        </transition>
    </div>
</template>

<script setup>
import NavBar from './components/NavBar.vue';
import { onMounted } from 'vue';
import { useCompetenceStore } from '../store/competence';
import { storeToRefs } from 'pinia';
</script>

<style>
#app {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #000000;
    /* Fond noir solide */
    color: #fff;
    margin: 0;
    padding: 0;
    min-height: 100vh;
}

/* Animations de transition entre les pages */
.fade-slide-enter-active,
.fade-slide-leave-active {
    transition: all 0.4s ease;
}

.fade-slide-enter-from {
    opacity: 0;
    transform: translateY(20px);
}

.fade-slide-leave-to {
    opacity: 0;
    transform: translateY(-20px);
}

/* Règles pour garantir que les transitions fonctionnent correctement */
.router-view-container {
    position: relative;
    width: 100%;
}

/* Style global de base */
body {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
    background-color: #000000;
}

/* Assurer que tous les composants prennent la pleine largeur */
.router-view-container>* {
    width: 100%;
}
</style>