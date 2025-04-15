<template>
  <div class="profile-container">
    <PartStage />

    <!-- Séparateur visuel entre les sections -->
    <div class="section-separator"></div>

    <PartProjet />
  </div>
</template>

<script setup>
import PartStage from '@/components/projet/PartStage.vue';
import PartProjet from '@/components/projet/PartProjet.vue';
</script>

<style scoped>
.profile-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 2rem 1rem;
}

/* Séparateur stylisé entre les sections */
.section-separator {
  height: 2rem;
  margin: 2rem 0;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}

.section-separator::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  height: 1px;
  background: linear-gradient(to right, transparent, rgba(255, 215, 0, 0.5), transparent);
}

@media (max-width: 576px) {
  .profile-container {
    padding: 1rem 0.5rem;
  }

  .section-separator {
    margin: 1.5rem 0;
  }
}
</style>