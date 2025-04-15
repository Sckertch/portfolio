<template>
    <section class="profile-section projects-section">
        <div class="section-header">
            <h2 class="section-title">Mes projets</h2>
        </div>
        <div class="section-content">
            <div class="projects-grid" v-if="projets.length">
                <ProjectName v-for="projet in projets" :key="projet.id" :projet="projet"
                    @image-click="openProjectModal" />
            </div>
            <p v-else class="loading-message">Chargement des projets...</p>
        </div>

        <!-- Modal global pour les images de projets -->
        <div v-if="modalOpen" class="global-modal" @click="closeProjectModal">
            <div class="global-modal-content" @click.stop>
                <div class="modal-header">
                    <h3>{{ selectedProject?.nom || 'Aperçu du projet' }}</h3>
                    <button class="global-modal-close" @click="closeProjectModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="project-modal-content">
                        <img :src="currentModalImage" alt="Image agrandie" class="project-modal-image">
                        <div class="project-modal-details" v-if="selectedProject">
                            <p class="project-modal-description">{{ selectedProject.description }}</p>

                            <div class="project-modal-tech" v-if="selectedProject.Languages">
                                <h4>Technologies utilisées</h4>
                                <div class="skill-tags">
                                    <span class="skill-tag"
                                        v-for="(language, index) in parseLanguages(selectedProject.Languages)"
                                        :key="index">
                                        {{ language.trim() }}
                                    </span>
                                </div>
                            </div>

                            <div class="project-modal-links" v-if="selectedProject.lien">
                                <a :href="selectedProject.lien" target="_blank" rel="noopener noreferrer"
                                    class="github-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                        </path>
                                    </svg>
                                    Voir sur GitHub
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import ProjectName from '../blocks/ProjectName.vue';

const projets = ref([]);
const modalOpen = ref(false);
const currentModalImage = ref('');
const selectedProject = ref(null);

const getProjets = () => {
    fetch('https://axilio.duckdns.org/projet/getprojet')
        .then(response => response.json())
        .then(data => {
            projets.value = data.content;
            console.log("projets du fetch", projets.value);
        })
        .catch(error => console.error(error));
};

const openProjectModal = (imageUrl, project) => {
    currentModalImage.value = imageUrl;
    selectedProject.value = project;
    modalOpen.value = true;
    document.body.style.overflow = 'hidden'; // Bloquer le scroll du body
};

const closeProjectModal = () => {
    modalOpen.value = false;
    document.body.style.overflow = ''; // Réactiver le scroll du body
};

// Fonction pour parser la chaîne de langages en tableau
const parseLanguages = (languagesString) => {
    if (!languagesString) return [];
    return languagesString.split(',');
};

// Nettoyer en cas de démontage du composant
onBeforeUnmount(() => {
    if (modalOpen.value) {
        document.body.style.overflow = '';
    }
});

onMounted(() => {
    getProjets();
});
</script>

<style scoped>
/* Grille de projets */
.projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 1.5rem;
}

/* Message de chargement */
.loading-message {
    text-align: center;
    font-size: 1.1rem;
    color: var(--white);
    padding: 2rem;
    background-color: rgba(255, 255, 255, 0.05);
    border-radius: var(--radius-md);
}

/* Modal global pour les projets */
.global-modal {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.9);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    padding: 2rem;
    animation: fadeIn 0.3s ease;
}

.global-modal-content {
    position: relative;
    width: 90%;
    max-width: 1200px;
    height: 90vh;
    background-color: #1a2a6c;
    border-radius: 16px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    animation: scaleIn 0.3s ease;
    border: 1px solid rgba(255, 215, 0, 0.2);
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.25rem 1.5rem;
    background-color: rgba(20, 33, 61, 0.95);
    border-bottom: 1px solid rgba(255, 215, 0, 0.3);
}

.modal-header h3 {
    color: #ffd700;
    font-size: 1.5rem;
    margin: 0;
    font-weight: 600;
}

.modal-body {
    flex: 1;
    overflow-y: auto;
    padding: 1.5rem;
}

.global-modal-close {
    background-color: #ffd700;
    color: #14213d;
    border: none;
    border-radius: 50%;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.global-modal-close:hover {
    transform: rotate(90deg);
    background-color: #ffe55c;
}

/* Contenu du modal de projet */
.project-modal-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
}

.project-modal-image {
    width: 100%;
    max-height: 70vh;
    object-fit: contain;
    border-radius: 8px;
    background-color: rgba(0, 0, 0, 0.3);
}

.project-modal-details {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.project-modal-description {
    color: #e0e0e0;
    line-height: 1.6;
    font-size: 1.1rem;
}

.project-modal-tech h4 {
    color: #ffd700;
    margin-bottom: 1rem;
    font-size: 1.2rem;
}

.project-modal-links {
    margin-top: auto;
}

.github-link {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.8rem 1.5rem;
    background-color: rgba(255, 255, 255, 0.1);
    color: #e0e0e0;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
}

.github-link:hover {
    background-color: rgba(255, 215, 0, 0.15);
    color: #ffd700;
    transform: translateY(-3px);
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

@keyframes fadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

@keyframes scaleIn {
    from {
        transform: scale(0.95);
    }

    to {
        transform: scale(1);
    }
}

/* Amélioration du titre de la section */
.section-header {
    padding: 1.5rem;
    background-color: rgba(20, 33, 61, 0.9);
    position: relative;
}

.section-title {
    color: #ffd700;
    /* Utilisation de la couleur d'accent pour une meilleure visibilité */
    font-size: 1.8rem;
    margin: 0;
    letter-spacing: 0.5px;
    position: relative;
    display: inline-block;
    padding-left: 1rem;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    /* Ajout d'une ombre pour améliorer la lisibilité */
}

.section-title::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 4px;
    background-color: #ffd700;
    border-radius: 4px;
}

/* Media queries */
@media (max-width: 768px) {
    .project-modal-content {
        grid-template-columns: 1fr;
    }
}
</style>
