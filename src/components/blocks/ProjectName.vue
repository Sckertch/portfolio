<template>
    <div class="project-card">
        <div class="project-header">
            <h3 class="project-title">{{ projet.nom }}</h3>
        </div>
        <div class="project-body">
            <div class="project-image-container" @click="emitImageClick">
                <img :src="imageUrl" alt="Image du projet" class="project-image">
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

            <div class="project-content">
                <p class="project-description">{{ truncateDescription(projet.description) }}</p>

                <div class="project-info">
                    <div class="project-type" v-if="projet.realisation">
                        <span class="project-type-badge" :class="getTypeClass(projet.realisation)">
                            <svg v-if="projet.realisation === 'Individuelle'" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <svg v-else xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            {{ projet.realisation }}
                        </span>
                    </div>

                    <div class="project-languages" v-if="projet.Languages">
                        <div class="skill-tags">
                            <span class="skill-tag" v-for="(language, index) in parseLanguages(projet.Languages)"
                                :key="index" v-show="index < 2 || showAllLanguages">
                                {{ language.trim() }}
                            </span>
                            <button v-if="parseLanguages(projet.Languages).length > 2 && !showAllLanguages"
                                class="show-more-btn" @click.stop="showAllLanguages = true">
                                +{{ parseLanguages(projet.Languages).length - 2 }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { defineProps, defineEmits, ref, computed } from 'vue';

const props = defineProps({
    projet: {
        type: Object,
        required: true
    }
});

const emit = defineEmits(['image-click']);
const showAllLanguages = ref(false);

const imageUrl = computed(() => {
    return 'https://portoimages.duckdns.org/' + props.projet.image;
});

// Fonction pour émettre un événement au parent pour ouvrir le modal global
const emitImageClick = () => {
    emit('image-click', imageUrl.value, props.projet);
};

// Fonction pour parser la chaîne de langages en tableau
const parseLanguages = (languagesString) => {
    if (!languagesString) return [];
    return languagesString.split(',');
};

// Fonction pour déterminer la classe CSS en fonction du type de projet
const getTypeClass = (type) => {
    return type === 'Individuelle' ? 'individual' : 'group';
};

// Fonction pour tronquer la description
const truncateDescription = (description) => {
    if (!description) return '';
    return description.length > 100 ? description.substring(0, 100) + '...' : description;
};
</script>

<style scoped>
.project-card {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.12);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.project-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.project-header {
    padding: 1.25rem;
    background-color: rgba(0, 0, 0, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.project-title {
    margin: 0;
    font-size: 1.25rem;
    color: #ffffff;
    position: relative;
    padding-left: 1rem;
}

.project-title::before {
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

.project-body {
    padding: 0;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.project-image-container {
    position: relative;
    width: 100%;
    padding-top: 56.25%;
    /* Ratio 16:9 */
    overflow: hidden;
    cursor: pointer;
}

.project-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.project-image-container:hover .project-image {
    transform: scale(1.05);
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

.project-image-container:hover .image-overlay {
    opacity: 1;
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

.project-image-container:hover .zoom-icon {
    transform: scale(1);
}

.project-content {
    padding: 1.25rem;
    display: flex;
    flex-direction: column;
}

.project-description {
    color: #e0e0e0;
    margin-bottom: 1rem;
    line-height: 1.5;
}

.project-info {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    margin-top: auto;
}

.project-type {
    margin-bottom: 0.5rem;
}

.project-type-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.4rem 0.8rem;
    border-radius: 20px;
    font-size: 0.9rem;
}

.project-type-badge.individual {
    background-color: rgba(100, 200, 150, 0.1);
    color: #64c896;
    border: 1px solid rgba(100, 200, 150, 0.3);
}

.project-type-badge.group {
    background-color: rgba(100, 150, 255, 0.1);
    color: #6496ff;
    border: 1px solid rgba(100, 150, 255, 0.3);
}

.skill-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.skill-tag {
    display: inline-block;
    padding: 0.4rem 0.8rem;
    background-color: rgba(0, 0, 0, 0.2);
    color: #e0e0e0;
    border-radius: 20px;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.skill-tag:hover {
    background-color: rgba(255, 215, 0, 0.2);
    color: #ffd700;
    transform: translateY(-2px);
}

.show-more-btn {
    display: inline-block;
    padding: 0.4rem 0.8rem;
    background-color: rgba(255, 215, 0, 0.1);
    color: #ffd700;
    border: none;
    border-radius: 20px;
    font-size: 0.9rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.show-more-btn:hover {
    background-color: rgba(255, 215, 0, 0.2);
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .project-info {
        flex-direction: column;
    }
}
</style>