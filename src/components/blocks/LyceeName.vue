<template>
  <div class="lycee-item">
    <h2>{{ lycee.date }}</h2>
    <img :src="'https://portoimages.duckdns.org/' + lycee.image" alt="Image du lycée">
    <h2>{{ lycee.nom }}</h2>
    <p>{{ lycee.description }}</p>
    <p>{{ lycee.anneeScolaire }}</p>
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
  padding: 15px;
  width: 100%;
  text-align: center;
  transition: transform 0.3s ease, background-color 0.3s ease;
  margin-bottom: 20px;
}

.lycee-item:hover {
  transform: translateY(-10px);
  background-color: rgba(255, 255, 255, 0.2);
}

.lycee-item img {
  width: 100%;
  max-width: 500px;
  /* Augmenter la taille maximale de l'image */
  border-radius: 10px;
  margin-bottom: 15px;
}

.lycee-item h2 {
  font-size: 1.5rem;
  margin-bottom: 10px;
  color: #ffd700;
}

.lycee-item p {
  font-size: 1rem;
  color: #fff;
  margin-bottom: 5px;
}
</style>