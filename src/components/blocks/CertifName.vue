<template>
  <div class="certification-item">
    <img :src="'https://portoimages.duckdns.org/' + certification.image" alt="Image de la certification">
    <h2>{{ certification.nom }}</h2>
    <p>{{ certification.description }}</p>
  </div>
</template>

<script setup>
import { defineProps, onMounted } from 'vue';

const props = defineProps({
  certification: Object
});

onMounted(() => {
  console.log("certification", props.certification);
});
</script>

<style scoped>
.certification-item {
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 10px;
  padding: 20px;
  width: 40%;
  text-align: center;
  transition: transform 0.3s ease, background-color 0.3s ease;
}

.certification-item:hover {
  transform: translateY(-10px);
  background-color: rgba(255, 255, 255, 0.2);
}

.certification-item img {
  width: 100%;
  max-width: 200px;
  border-radius: 10px;
  margin-bottom: 20px;
}

.certification-item h2 {
  font-size: 1.5rem;
  margin-bottom: 15px;
  color: #ffd700;
}

.certification-item p {
  font-size: 1.2rem;
  color: #fff;
}
</style>