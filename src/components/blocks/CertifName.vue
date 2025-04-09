<template>
  <div class="certification-item">
    <img :src="'https://portoimages.duckdns.org/' + certification.image" alt="Image de la certification"
      @mousedown="startLongPress" @mouseup="cancelLongPress" @mouseleave="cancelLongPress">
    <h2>{{ certification.nom }}</h2>
    <p>{{ certification.description }}</p>
  </div>

  <div v-if="showModal" class="modal-overlay" @click="closeModal">
    <div class="modal-content">
      <img :src="'https://portoimages.duckdns.org/' + certification.image" alt="Image de la certification en grand">
    </div>
  </div>
</template>

<script setup>
import { defineProps, ref, onMounted } from 'vue';

const props = defineProps({
  certification: Object
});

const showModal = ref(false);
let pressTimer = null;

const startLongPress = () => {
  pressTimer = setTimeout(() => {
    showModal.value = true;
  }, 1000); // 1 seconde
};

const cancelLongPress = () => {
  clearTimeout(pressTimer);
};

const closeModal = () => {
  showModal.value = false;
};

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

.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.8);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;
}

.modal-content {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
}

.modal-content img {
  max-width: 90%;
  max-height: 90%;
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  margin: auto;
  /* Assure un centrage vertical et horizontal */
}
</style>