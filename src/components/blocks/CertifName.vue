<template>
  <div class="certification-card">
    <div class="certification-header">
      <h3 class="certification-title">{{ certification.nom }}</h3>
    </div>
    <div class="certification-body">
      <!-- Image en haut avec plus d'espace -->
      <div class="certification-image-container" @click="emitImageClick">
        <img :src="imageUrl" alt="Image de la certification" class="certification-image">
        <div class="image-overlay">
          <span class="zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="11" cy="11" r="8"></circle>
              <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
              <line x1="11" y1="8" x2="11" y2="14"></line>
              <line x1="8" y1="11" x2="14" y2="11"></line>
            </svg>
          </span>
        </div>
      </div>

      <!-- Description en dessous -->
      <div class="certification-info">
        <p class="certification-description">{{ certification.description }}</p>
      </div>
    </div>
  </div>
</template>

<script setup>
import { defineProps, defineEmits, computed } from 'vue';

const props = defineProps({
  certification: {
    type: Object,
    required: true
  }
});

const emit = defineEmits(['image-click']);

const imageUrl = computed(() => {
  return 'https://portoimages.duckdns.org/' + props.certification.image;
});

// Fonction pour émettre un événement pour ouvrir le modal global
const emitImageClick = () => {
  // S'assurer qu'on transmet bien l'URL de l'image
  emit('image-click', imageUrl.value);
  console.log('Image clicked:', imageUrl.value); // Log pour déboguer
};
</script>

<style scoped>
.certification-card {
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.12);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  display: flex;
  flex-direction: column;
}

.certification-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.certification-header {
  padding: 1.25rem;
  background-color: rgba(0, 0, 0, 0.2);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.certification-title {
  margin: 0;
  font-size: 1.25rem;
  color: #ffffff;
  position: relative;
  padding-left: 1rem;
}

.certification-title::before {
  content: '';
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  width: 4px;
  height: 70%;
  background-color: #ffd700;
  border-radius: 2px;
}

.certification-body {
  padding: 1.25rem;
  display: flex;
  flex-direction: column;
  gap: 1.25rem;
}

.certification-image-container {
  position: relative;
  cursor: zoom-in;
  overflow: hidden;
  border-radius: 8px;
  /* Utiliser aspect-ratio pour maintenir une proportion */
  aspect-ratio: 16/9;
  width: 100%;
}

.certification-image {
  width: 100%;
  height: 100%;
  object-fit: contain;
  background-color: rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  transition: transform 0.3s ease;
}

.image-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.zoom-icon {
  color: #ffffff;
  background-color: rgba(255, 215, 0, 0.7);
  border-radius: 50%;
  width: 48px;
  height: 48px;
  display: flex;
  align-items: center;
  justify-content: center;
  transform: scale(0.8);
  transition: transform 0.3s ease;
}

.certification-image-container:hover .image-overlay {
  opacity: 1;
}

.certification-image-container:hover .zoom-icon {
  transform: scale(1);
}

.certification-image-container:hover .certification-image {
  transform: scale(1.05);
}

.certification-info {
  padding: 0.5rem 0;
}

.certification-description {
  color: #ffffff;
  margin: 0;
  font-size: 1rem;
  line-height: 1.6;
  text-align: center;
}

@media (max-width: 768px) {
  .certification-image-container {
    aspect-ratio: 4/3;
  }
}
</style>