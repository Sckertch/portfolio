<template>
  <div class="container">
    <PartStage />
    <PartProjet />
  </div>
</template>

<script setup>
import PartStage from '@/components/projet/PartStage.vue';
import PartProjet from '@/components/projet/PartProjet.vue';
</script>

<style scoped>
.container {
  font-family: 'Roboto', sans-serif;
  color: #333;
  max-width: 1200px;
  margin: 0 auto;
  padding: 60px 20px;
  background-color: rgba(255, 255, 255, 0.3);
  /* Fond plus transparent */
}
</style>