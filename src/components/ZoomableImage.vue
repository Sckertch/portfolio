<template>
    <img :src="src" :alt="alt" :class="{ zoomed: isZoomed }" @mousedown="startZoom" @mouseup="stopZoom"
        @mouseleave="stopZoom" @touchstart="startZoom" @touchend="stopZoom" />
</template>

<script setup>
import { ref } from 'vue';

// Props pour l'image
const props = defineProps({
    src: {
        type: String,
        required: true,
    },
    alt: {
        type: String,
        default: '',
    },
});

// Variables réactives pour le zoom
const isZoomed = ref(false);
const zoomTimeout = ref(null);

// Fonction pour démarrer le zoom
const startZoom = () => {
    zoomTimeout.value = setTimeout(() => {
        isZoomed.value = true;
    }, 1000); // 1 seconde
};

// Fonction pour arrêter le zoom
const stopZoom = () => {
    clearTimeout(zoomTimeout.value);
    isZoomed.value = false;
};
</script>

<style scoped>
/* Style pour l'image zoomée */
img.zoomed {
    transform: scale(2);
    /* Zoom x2 */
    transition: transform 0.3s ease;
    cursor: zoom-out;
}

img {
    transition: transform 0.3s ease;
}
</style>
