<template>
    <div class="project-card">
        <div class="project-header">
            <div class="project-title-container">
                <h2 class="project-title">{{ projet.nom }}</h2>
            </div>
            <div class="project-image">
                <img :src="'https://portoimages.duckdns.org/' + projet.image" :alt="projet.nom" class="img-fluid">
            </div>
        </div>

        <div class="project-description">
            <p>{{ projet.description }}</p>
        </div>

        <div class="project-actions">
            <button class="project-button" @click="showDetails = !showDetails">
                <span>Voir plus de détails</span>
                <i class="fas fa-chevron-down" :class="{ 'rotate': showDetails }"></i>
            </button>
        </div>

        <div v-if="showDetails" class="project-details">
            <!-- Type de réalisation (individuelle ou en groupe) -->
            <div class="realization-type">
                <h4>Type de réalisation</h4>
                <p class="realization-badge"
                    :class="{ 'individual': projet.realisation === 'Individuelle', 'group': projet.realisation === 'Groupe' }">
                    <i :class="projet.realisation === 'Individuelle' ? 'fas fa-user' : 'fas fa-users'"></i>
                    {{ projet.realisation }}
                </p>
            </div>

            <!-- Langages utilisés -->
            <div class="project-languages" v-if="projet.Languages">
                <h4>Langages utilisés</h4>
                <div class="skill-tags">
                    <span class="skill-tag" v-for="(language, index) in parseLanguages(projet.Languages)" :key="index">
                        {{ language.trim() }}
                    </span>
                </div>
            </div>

            <!-- Lien GitHub -->
            <div class="project-github" v-if="projet.lien">
                <h4>Lien vers le code source</h4>
                <a :href="projet.lien" target="_blank" rel="noopener noreferrer" class="github-link">
                    <i class="fab fa-github"></i>
                    Voir sur GitHub
                </a>
            </div>

            <!-- Anciennes sections maintenues pour compatibilité --
            <div class="tech-badges" v-if="projet.technologies">
                <span class="tech-badge" v-for="tech in projet.technologies" :key="tech">{{ tech }}</span>
            </div>
            <div class="project-gallery" v-if="projet.gallery">
                <div class="gallery-item" v-for="(image, index) in projet.gallery" :key="index">
                    <img :src="image.src" :alt="image.alt || 'Image du projet'" class="img-fluid">
                    <p class="image-caption" v-if="image.caption">{{ image.caption }}</p>
                </div>
            </div>-->
        </div>
    </div>
</template>

<script setup>
import { defineProps, ref } from 'vue';

const props = defineProps({
    projet: {
        type: Object,
        required: true
    }
});

const showDetails = ref(false);

// Fonction pour parser la chaîne de langages en tableau
const parseLanguages = (languagesString) => {
    if (!languagesString) return [];
    return languagesString.split(',');
};
</script>

<style scoped>
.project-card {
    background-color: rgba(255, 255, 255, 0.05);
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 30px;
    transition: transform 0.3s ease, background-color 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    overflow: hidden;
}

.project-card:hover {
    transform: translateY(-5px);
    background-color: rgba(255, 255, 255, 0.08);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
}

.project-header {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.project-title-container {
    flex: 2;
}

.project-title {
    font-size: 1.8rem;
    color: #ffd700;
    margin-bottom: 10px;
}

.project-image {
    flex: 1;
    display: flex;
    justify-content: center;
    margin-left: 20px;
}

.project-image img {
    max-width: 150px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
}

.project-image img:hover {
    transform: scale(1.05);
}

.project-description {
    color: #e0e0e0;
    line-height: 1.6;
    margin-bottom: 20px;
    text-align: justify;
}

.project-actions {
    margin-bottom: 15px;
}

.project-button {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding: 10px 15px;
    background-color: rgba(255, 215, 0, 0.1);
    color: #ffd700;
    border: 1px solid rgba(255, 215, 0, 0.3);
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.project-button:hover {
    background-color: rgba(255, 215, 0, 0.2);
}

.project-button i {
    margin-left: 10px;
    transition: transform 0.3s ease;
}

.project-button i.rotate {
    transform: rotate(180deg);
}

.project-details {
    margin-top: 20px;
    animation: fadeIn 0.3s ease;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.project-details h4 {
    font-size: 1.2rem;
    color: #ffd700;
    margin-bottom: 15px;
}

.realization-type {
    background-color: rgba(255, 255, 255, 0.05);
    border-radius: 10px;
    padding: 15px;
}

.realization-badge {
    display: inline-flex;
    align-items: center;
    padding: 8px 15px;
    border-radius: 20px;
    font-size: 1rem;
    margin-top: 5px;
}

.realization-badge i {
    margin-right: 10px;
}

.realization-badge.individual {
    background-color: rgba(100, 200, 150, 0.2);
    color: #64c896;
    border: 1px solid rgba(100, 200, 150, 0.3);
}

.realization-badge.group {
    background-color: rgba(100, 150, 255, 0.2);
    color: #6496ff;
    border: 1px solid rgba(100, 150, 255, 0.3);
}

.project-languages {
    background-color: rgba(255, 255, 255, 0.05);
    border-radius: 10px;
    padding: 15px;
}

.skill-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.skill-tag {
    display: inline-block;
    padding: 8px 15px;
    background-color: rgba(255, 255, 255, 0.1);
    color: #fff;
    border-radius: 20px;
    font-size: 0.9rem;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.skill-tag:hover {
    background-color: rgba(255, 215, 0, 0.2);
    transform: translateY(-3px);
}

.project-github {
    background-color: rgba(255, 255, 255, 0.05);
    border-radius: 10px;
    padding: 15px;
}

.github-link {
    display: inline-flex;
    align-items: center;
    background-color: rgba(255, 255, 255, 0.1);
    color: #fff;
    padding: 10px 20px;
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.github-link i {
    margin-right: 10px;
    font-size: 1.2rem;
}

.github-link:hover {
    background-color: rgba(255, 255, 255, 0.2);
    transform: translateY(-3px);
}

.tech-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 20px;
}

.tech-badge {
    display: inline-block;
    background-color: rgba(255, 215, 0, 0.1);
    color: #ffd700;
    border: 1px solid rgba(255, 215, 0, 0.3);
    border-radius: 20px;
    padding: 5px 12px;
    font-size: 0.9rem;
}

.project-gallery {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    margin-top: 20px;
}

.gallery-item {
    flex: 1 1 300px;
    border-radius: 8px;
    overflow: hidden;
    background-color: rgba(0, 0, 0, 0.2);
    position: relative;
}

.gallery-item img {
    width: 100%;
    border-radius: 6px;
    transition: transform 0.3s ease;
}

.gallery-item:hover img {
    transform: scale(1.02);
}

.image-caption {
    font-size: 0.9rem;
    color: #b0b0b0;
    text-align: center;
    padding: 8px 5px;
    margin: 0;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 768px) {
    .project-header {
        flex-direction: column;
    }

    .project-image {
        margin-left: 0;
        margin-top: 15px;
    }

    .project-title-container {
        text-align: center;
    }
}
</style>