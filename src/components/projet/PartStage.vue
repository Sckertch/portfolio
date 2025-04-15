<template>
    <section class="profile-section stage-section">
        <div class="section-header">
            <h2 class="section-title">Stages</h2>
        </div>
        <div class="section-content">
            <div class="stage-card">
                <div class="stage-content">
                    <div class="stage-header">
                        <div class="stage-logo">
                            <img src="../../assets/img/stage1/segesia.png" alt="Segesia" class="company-logo">
                        </div>
                        <div class="stage-info">
                            <h3 class="company-name">Segesia</h3>
                            <p class="stage-position">Développeur Web Full Stack</p>
                            <p class="stage-period">1ère et 2ème année BTS SIO</p>
                            <a href="https://www.zayann.boutique/" target="_blank" rel="noopener noreferrer"
                                class="client-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                    </path>
                                </svg>
                                <span>Visiter le site du client</span>
                            </a>
                        </div>
                    </div>

                    <div class="stage-description">
                        <p>J'ai effectué mes stages de 1ère et 2ème année à Segesia, une entreprise spécialisée dans le
                            développement web, le design et les solutions de sauvegarde.</p>

                        <div class="tasks-container">
                            <h4>Missions principales</h4>
                            <ul class="tasks-list">
                                <li>
                                    <span class="task-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="16 18 22 12 16 6"></polyline>
                                            <polyline points="8 6 2 12 8 18"></polyline>
                                        </svg>
                                    </span>
                                    <span class="task-text">Développement web (Vue.js, PHP)</span>
                                </li>
                                <li>
                                    <span class="task-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg>
                                    </span>
                                    <span class="task-text">Gestion de projet</span>
                                </li>
                                <li>
                                    <span class="task-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="task-text">Compte rendu client</span>
                                </li>
                                <li>
                                    <span class="task-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="23 4 23 10 17 10"></polyline>
                                            <polyline points="1 20 1 14 7 14"></polyline>
                                            <path
                                                d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="task-text">Déploiement et mise en production</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="stage-skills">
                        <h4>Technologies utilisées</h4>
                        <div class="skill-tags">
                            <span class="skill-tag">Vue.js</span>
                            <span class="skill-tag">PHP</span>
                            <span class="skill-tag">HTML/CSS</span>
                            <span class="skill-tag">JavaScript</span>
                            <span class="skill-tag">Git</span>
                            <span class="skill-tag">MySQL</span>
                        </div>
                    </div>

                    <button class="btn-primary resume-button" @click="openStageModal">
                        <span>Voir le rapport complet</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal global pour le rapport de stage -->
        <div v-if="modalOpen" class="global-modal" @click="closeStageModal">
            <div class="global-modal-content" @click.stop>
                <div class="modal-header">
                    <h3>Rapport de stage détaillé</h3>
                    <button class="global-modal-close" @click="closeStageModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <StageResume />
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, onBeforeUnmount } from 'vue';
import StageResume from '@/components/projet/StageResume.vue';

// Utiliser un nom plus spécifique pour éviter les conflits
const modalOpen = ref(false);

// Fonctions de gestion du modal
const openStageModal = () => {
    modalOpen.value = true;
    document.body.style.overflow = 'hidden'; // Bloquer le scroll du body
};

const closeStageModal = () => {
    modalOpen.value = false;
    document.body.style.overflow = ''; // Réactiver le scroll du body
};

// Nettoyer en cas de démontage du composant
onBeforeUnmount(() => {
    if (modalOpen.value) {
        document.body.style.overflow = '';
    }
});
</script>

<style scoped>
:root {
    --primary-dark: #14213d;
    --primary: #1a2a6c;
    --primary-light: #2a5298;
    --accent: #ffd700;
    --accent-light: #ffe55c;
    --accent-dark: #d4af37;

    --white: #ffffff;
    --light: #f5f5f5;
    --gray-light: #e0e0e0;
    --gray: #9e9e9e;
    --gray-dark: #424242;
    --dark: #212121;

    --shadow-sm: 0 2px 4px rgba(0, 0, 0, 0.1);
    --shadow-md: 0 4px 8px rgba(0, 0, 0, 0.12);
    --shadow-lg: 0 8px 16px rgba(0, 0, 0, 0.15);

    --radius-sm: 4px;
    --radius-md: 8px;
    --radius-lg: 16px;

    --transition-fast: 0.2s ease;
    --transition-normal: 0.3s ease;
    --transition-slow: 0.5s ease;
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
    border-radius: var(--radius-sm);
}

.stage-card {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.12);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.stage-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.stage-content {
    padding: 1.5rem;
}

.stage-header {
    display: flex;
    align-items: center;
    margin-bottom: 1.5rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    padding-bottom: 1rem;
}

.stage-logo {
    margin-right: 1.5rem;
}

.company-logo {
    width: 80px;
    height: 80px;
    object-fit: contain;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    padding: 0.5rem;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}

.stage-info {
    flex: 1;
}

.company-name {
    font-size: 1.5rem;
    color: #ffd700;
    margin-bottom: 0.5rem;
}

.stage-position {
    font-size: 1.1rem;
    color: #e0e0e0;
    margin-bottom: 0.3rem;
}

.stage-period {
    font-size: 0.9rem;
    color: #a0a0a0;
}

.stage-description {
    margin-bottom: 1.5rem;
    line-height: 1.6;
    color: #e0e0e0;
}

.tasks-container {
    margin-top: 1.25rem;
    background-color: rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    padding: 1.25rem;
    margin-bottom: 1.5rem;
}

.tasks-container h4 {
    font-size: 1.1rem;
    color: #ffd700;
    margin-bottom: 1rem;
}

.tasks-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.tasks-list li {
    display: flex;
    align-items: center;
    margin-bottom: 0.75rem;
}

.task-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 30px;
    height: 30px;
    background-color: rgba(255, 215, 0, 0.1);
    border-radius: 50%;
    margin-right: 1rem;
    color: #ffd700;
}

.task-text {
    font-size: 1rem;
    color: #e0e0e0;
}

.stage-skills {
    margin-bottom: 1.5rem;
}

.stage-skills h4 {
    font-size: 1.1rem;
    color: #ffd700;
    margin-bottom: 1rem;
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
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.skill-tag:hover {
    background-color: rgba(255, 215, 0, 0.2);
    color: #ffd700;
    transform: translateY(-2px);
}

.resume-button {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    background-color: #ffd700;
    color: #14213d;
    border: none;
    border-radius: 8px;
    padding: 0.8rem 1.5rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.resume-button:hover {
    background-color: #ffe55c;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.resume-button svg {
    margin-left: 0.5rem;
    transition: transform 0.3s ease;
}

.resume-button:hover svg {
    transform: translateX(3px);
}

/* Style pour le lien du site client */
.client-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: #9cbeff;
    font-size: 0.9rem;
    text-decoration: none;
    margin-top: 0.5rem;
    transition: all 0.3s ease;
}

.client-link:hover {
    color: #ffd700;
    transform: translateX(3px);
}

.client-link svg {
    width: 14px;
    height: 14px;
}

/* Modal global */
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
    padding: 0;
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

/* Media queries */
@media (max-width: 768px) {
    .stage-header {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .stage-logo {
        margin-right: 0;
        margin-bottom: 1rem;
    }
}

@media (max-width: 576px) {
    .stage-content {
        padding: 1rem;
    }

    .company-logo {
        width: 70px;
        height: 70px;
    }
}
</style>