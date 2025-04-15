<template>
    <div class="skill-card">
        <div class="skill-header">
            <h3 class="skill-title">{{ competence.nom }}</h3>
        </div>
        <div class="skill-body">
            <div class="skill-image-container" @click="emitImageClick">
                <img :src="imageUrl" alt="Image de la compétence" class="skill-image">
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
            <div class="skill-progress">
                <div class="progress-label">
                    <span>Niveau de maîtrise</span>
                    <span class="progress-value">{{ competence.niveau }}%</span>
                </div>
                <div class="progress-bar">
                    <div class="progress" :style="{ width: competence.niveau + '%' }"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { defineProps, defineEmits, computed } from 'vue';

const props = defineProps({
    competence: Object
});

const emit = defineEmits(['image-click']);

const imageUrl = computed(() => {
    return 'https://portoimages.duckdns.org/' + props.competence.image;
});

// Fonction pour émettre un événement au parent pour ouvrir le modal global
const emitImageClick = () => {
    emit('image-click', imageUrl.value);
};
</script>

<style scoped>
.skill-card {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.12);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.skill-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.skill-header {
    padding: 1.25rem;
    background-color: rgba(0, 0, 0, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.skill-title {
    margin: 0;
    font-size: 1.25rem;
    color: #ffffff;
    position: relative;
    padding-left: 1rem;
}

.skill-title::before {
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

.skill-body {
    padding: 1.25rem;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.skill-image-container {
    position: relative;
    margin-bottom: 1.25rem;
    cursor: pointer;
    overflow: hidden;
    border-radius: 8px;
}

.skill-image {
    width: 100%;
    aspect-ratio: 4/3;
    object-fit: contain;
    background-color: rgba(255, 255, 255, 0.05);
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

.skill-image-container:hover .image-overlay {
    opacity: 1;
}

.skill-image-container:hover .zoom-icon {
    transform: scale(1);
}

.skill-progress {
    margin-top: auto;
}

.progress-label {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 0.5rem;
    color: #ffffff;
    font-size: 0.9rem;
}

.progress-value {
    font-weight: 600;
    color: #ffd700;
}

.progress-bar {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    overflow: hidden;
    height: 10px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2);
}

.progress {
    background-color: #ffd700;
    height: 100%;
    transition: width 0.5s ease;
    position: relative;
    overflow: hidden;
}

.progress::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(90deg,
            rgba(255, 255, 255, 0.1),
            rgba(255, 255, 255, 0.2),
            rgba(255, 255, 255, 0.1));
    transform: translateX(-100%);
    animation: shimmer 2s infinite;
}

@keyframes shimmer {
    100% {
        transform: translateX(100%);
    }
}

@media (max-width: 768px) {
    .skill-title {
        font-size: 1.1rem;
    }
}

/* Supprimez tout le code du modal local car il sera remplacé par le modal global */
.skill-modal,
.modal-content,
.modal-close {
    display: none;
}
</style>