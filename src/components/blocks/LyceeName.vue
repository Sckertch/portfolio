<template>
  <div class="lycee-item">
    <div class="lycee-header">
      <h2 class="lycee-name">{{ lycee.nom }}</h2>
      <p class="lycee-date">{{ lycee.date }}</p>
    </div>
    <div class="lycee-description">
      <p>{{ lycee.description }}</p>
    </div>
  </div>
</template>

<script setup>
import { defineProps, onMounted } from 'vue';

const props = defineProps({
  lycee: Object
});

onMounted(() => {
  console.log("lycee", props.lycee);
});
</script>

<style scoped>
.lycee-item {
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 10px;
  padding: 20px;
  width: 100%;
  text-align: left;
  transition: transform 0.3s ease, background-color 0.3s ease;
  margin-bottom: 20px;
}

.lycee-item:hover {
  transform: translateY(-10px);
  background-color: rgba(255, 255, 255, 0.2);
}

.lycee-header {
  margin-bottom: 15px;
}

.lycee-name {
  font-size: 1.5rem;
  margin-bottom: 5px;
  color: #ffd700;
}

.lycee-date {
  font-size: 1rem;
  color: #ccc;
  margin-bottom: 10px;
}

.lycee-description {
  font-size: 1rem;
  color: #fff;
  line-height: 1.6;
  margin-top: 10px;
  /* Ajouter une marge supérieure pour l'espacement */
}
</style>