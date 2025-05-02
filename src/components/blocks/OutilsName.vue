<script setup>
const props = defineProps({
    outil: {
        type: Object,
        required: true
    }
});

const emit = defineEmits(['image-click']);

const handleImageClick = (imageUrl) => {
    emit('image-click', imageUrl);
};
</script>

<template>
    <div class="outil-card">
        <div class="outil-image-container" @click="handleImageClick(`https://portoimages.duckdns.org/${outil.image}`)">
            <img :src="`https://portoimages.duckdns.org/${outil.image}`" :alt="outil.nom" class="outil-image">
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
        <h3 class="outil-name">{{ outil.nom }}</h3>
        <p v-if="outil.description" class="outil-description">{{ outil.description }}</p>
    </div>
</template>

<style scoped>
.outil-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
}

.outil-image-container {
    position: relative;
    width: 80px;
    height: 80px;
    margin-bottom: 1rem;
    overflow: hidden;
    border-radius: 12px;
    cursor: pointer;
}

.outil-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: transform 0.3s ease;
}

.outil-image-container:hover .outil-image {
    transform: scale(1.1);
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

.outil-image-container:hover .image-overlay {
    opacity: 1;
}

.zoom-icon {
    color: #ffffff;
    background-color: rgba(255, 215, 0, 0.7);
    border-radius: 50%;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    transform: scale(0.8);
    transition: transform 0.3s ease;
}

.outil-image-container:hover .zoom-icon {
    transform: scale(1);
}

.outil-name {
    margin: 0 0 0.5rem;
    font-size: 1rem;
    font-weight: 600;
    color: #ffffff;
    text-align: center;
}

.outil-description {
    margin: 0;
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.8);
    text-align: center;
}
</style>
