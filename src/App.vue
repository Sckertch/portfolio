<template>
  <div id="app">
    <NavBar/>
    <router-view />
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
}

</style>