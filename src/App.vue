<template>
  <div id="app">
    <NavBar />
    <Transition name="page" mode="out-in">
      <router-view />
    </Transition>
    <FlouterDown />
  </div>
</template>

<script setup>
import NavBar from './components/NavBar.vue';
import { onMounted } from 'vue';
import { useCompetenceStore } from '../store/competence';
import { storeToRefs } from 'pinia';
import FlouterDown from './components/FlouterDown.vue';
</script>

<style>
#app {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  background: linear-gradient(135deg, #1e3c72, #2a5298, #6a11cb, #00ff7f, #ff0000, #ff7e5f);
  background-size: 400% 400%;
  animation: gradientAnimation 10s ease infinite;
  color: #fff;
  margin: 0;
  padding: 0;
  min-height: 100vh;
}

@keyframes gradientAnimation {
  0% {
    background-position: 0% 50%;
  }

  50% {
    background-position: 100% 50%;
  }

  100% {
    background-position: 0% 50%;
  }
}

/* Transitions pour le RouterView */
.page-enter-active,
.page-leave-active {
  transition: opacity 0.5s ease, transform 0.5s ease;
}

.page-enter-from,
.page-leave-to {
  opacity: 0;
  transform: translateY(30px);
}

/* Assurez-vous que le contenu principal prend l'espace nécessaire */
.router-view {
  flex: 1;
}
</style>