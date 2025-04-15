<template>
  <div class="education-card">
    <div class="education-header">
      <h3 class="education-name">{{ lycee.nom }}</h3>
      <span class="education-date">{{ lycee.date }}</span>
    </div>
    <div class="education-body">
      <p class="education-description">{{ lycee.description }}</p>
    </div>
  </div>
</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
  lycee: Object
});
</script>

<style scoped>
.education-card {
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.12);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  margin-bottom: 1.25rem;
}

.education-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.education-header {
  padding: 1rem;
  background-color: rgba(0, 0, 0, 0.2);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}

.education-name {
  margin: 0;
  font-size: 1.1rem;
  color: #ffffff;
  position: relative;
  padding-left: 0.75rem;
}

.education-name::before {
  content: '';
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  width: 3px;
  height: 70%;
  background-color: #ffd700;
  border-radius: 2px;
}

.education-date {
  padding: 0.25rem 0.75rem;
  background-color: rgba(255, 215, 0, 0.2);
  border-radius: 50px;
  font-size: 0.85rem;
  color: #ffd700;
  font-weight: 600;
}

.education-body {
  padding: 1rem;
}

.education-description {
  color: #ffffff;
  margin: 0;
  font-size: 0.95rem;
  line-height: 1.5;
}

@media (max-width: 576px) {
  .education-header {
    flex-direction: column;
    align-items: flex-start;
  }

  .education-date {
    margin-top: 0.5rem;
    align-self: flex-start;
  }
}
</style>