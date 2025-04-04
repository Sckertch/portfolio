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
  background-color: rgba(255, 255, 255, 0.7);
  border-radius: 15px;
  padding: 20px;
  width: 50%;
  text-align: center;
  transition: all 0.3s ease;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.certification-item:hover {
  transform: translateY(-10px);
  background-color: rgba(255, 255, 255, 0.8);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
}

.certification-item img {
  width: 100%;
  max-width: 1000px;
  border-radius: 10px;
  margin-bottom: 15px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.certification-item h2 {
  font-size: 1.3rem;
  margin-bottom: 10px;
  color: #333;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
}

.certification-item p {
  font-size: 1rem;
  color: #333;
}
</style>