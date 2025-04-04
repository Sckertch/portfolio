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
  background-color: rgba(255, 255, 255, 0.7);
  border-radius: 15px;
  padding: 20px;
  width: 100%;
  text-align: left;
  transition: all 0.3s ease;
  margin-bottom: 20px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.lycee-item:hover {
  transform: translateY(-10px);
  background-color: rgba(255, 255, 255, 0.8);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
}

.lycee-header {
  margin-bottom: 15px;
}

.lycee-name {
  font-size: 1.5rem;
  margin-bottom: 5px;
  color: #333;
}

.lycee-date {
  font-size: 1rem;
  color: #333;
  margin-bottom: 10px;
}

.lycee-description {
  font-size: 1rem;
  color: #333;
  line-height: 1.6;
  margin-top: 10px;
}
</style>