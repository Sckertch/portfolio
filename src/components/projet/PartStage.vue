<template>
    <div class="stage-section">
        <div class="stage-container">
            <h2 class="section-title">Mon expérience professionnelle</h2>

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
                        </div>
                    </div>

                    <div class="stage-description">
                        <p>J'ai effectué mes stages de 1ère et 2ème année à Segesia, une entreprise spécialisée dans le
                            développement web, le design et les solutions de sauvegarde.</p>

                        <div class="tasks-container">
                            <h4>Missions principales</h4>
                            <ul class="tasks-list">
                                <li>
                                    <span class="task-icon"><i class="fas fa-code"></i></span>
                                    <span class="task-text">Développement web (VueJs, PHP)</span>
                                </li>
                                <li>
                                    <span class="task-icon"><i class="fas fa-tasks"></i></span>
                                    <span class="task-text">Gestion de projet</span>
                                </li>
                                <li>
                                    <span class="task-icon"><i class="fas fa-comments"></i></span>
                                    <span class="task-text">Compte rendu client</span>
                                </li>
                                <li>
                                    <span class="task-icon"><i class="fas fa-rocket"></i></span>
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

                    <button class="resume-button" @click="showPopup = true">
                        <span>Voir le rapport complet</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>

        <transition name="fade">
            <div v-if="showPopup" class="overlay" @click.self="showPopup = false">
                <div class="modal-container">
                    <div class="modal-header">
                        <h3>Rapport de stage détaillé</h3>
                        <button class="close-button" @click="showPopup = false">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <StageResume />
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import StageResume from '@/components/projet/StageResume.vue';

const showPopup = ref(false);
</script>

<style scoped>
.stage-section {
    padding: 60px 0;
    background-color: rgba(255, 255, 255, 0.4);
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.stage-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.section-title {
    font-size: 2.5rem;
    color: #fff;
    text-align: center;
    margin-bottom: 50px;
    padding: 12px 20px;
    background-color: rgba(0, 0, 0, 0.8);
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    border-bottom: 2px solid rgba(255, 215, 0, 0.5);
    text-transform: uppercase;
    letter-spacing: 1px;
    position: relative;
}

.section-title::after {
    display: none;
}

.stage-card {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.stage-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
}

.stage-content {
    padding: 30px;
}

.stage-header {
    display: flex;
    align-items: center;
    margin-bottom: 25px;
}

.stage-logo {
    margin-right: 25px;
}

.company-logo {
    width: 100px;
    height: 100px;
    object-fit: contain;
    background-color: #fff;
    border-radius: 10px;
    padding: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.stage-info {
    flex: 1;
}

.company-name {
    font-size: 1.8rem;
    color: #ffd700;
    margin-bottom: 5px;
}

.stage-position {
    font-size: 1.2rem;
    color: #e0e0e0;
    margin-bottom: 5px;
}

.stage-period {
    font-size: 1rem;
    color: #a0a0a0;
}

.stage-description {
    margin-bottom: 25px;
    line-height: 1.6;
}

.tasks-container {
    margin-top: 20px;
    background-color: rgba(0, 0, 0, 0.296);
    border-radius: 10px;
    padding: 20px;
}

.tasks-container h4 {
    font-size: 1.2rem;
    color: #ffd700;
    margin-bottom: 15px;
}

.tasks-list {
    list-style: none;
    padding: 0;
}

.tasks-list li {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
}

.task-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 30px;
    height: 30px;
    background-color: rgba(255, 215, 0, 0.2);
    border-radius: 50%;
    margin-right: 15px;
    color: #ffd700;
}

.task-text {
    font-size: 1.1rem;
}

.stage-skills {
    margin-bottom: 30px;
}

.stage-skills h4 {
    font-size: 1.2rem;
    color: #ffd700;
    margin-bottom: 15px;
}

.skill-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.skill-tag {
    display: inline-block;
    padding: 8px 15px;
    background-color: rgba(0, 0, 0, 0.189);
    color: #fff;
    border-radius: 20px;
    font-size: 0.9rem;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.skill-tag:hover {
    background-color: rgba(255, 215, 0, 0.2);
    transform: translateY(-3px);
}

.resume-button {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(255, 215, 0, 0.1);
    color: #ffd700;
    border: 2px solid #ffd700;
    border-radius: 8px;
    padding: 12px 25px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    width: 100%;
}

.resume-button:hover {
    background-color: rgba(255, 215, 0, 0.2);
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

.resume-button i {
    margin-left: 10px;
    transition: transform 0.3s ease;
}

.resume-button:hover i {
    transform: translateX(5px);
}

/* Modal styles */
.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(5px);
}

.modal-container {
    background-color: #1e1e1e;
    width: 90%;
    max-width: 1000px;
    max-height: 90vh;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 30px;
    background-color: rgba(255, 215, 0, 0.1);
    border-bottom: 1px solid rgba(255, 215, 0, 0.3);
}

.modal-header h3 {
    color: #ffd700;
    font-size: 1.5rem;
    margin: 0;
}

.close-button {
    background: none;
    border: none;
    color: #ffd700;
    font-size: 1.5rem;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.close-button:hover {
    transform: rotate(90deg);
}

.modal-body {
    padding: 30px;
    overflow-y: auto;
    max-height: calc(90vh - 80px);
}

/* Animation transitions */
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.3s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}

/* Responsive styles */
@media (max-width: 768px) {
    .stage-header {
        flex-direction: column;
        text-align: center;
    }

    .stage-logo {
        margin-right: 0;
        margin-bottom: 20px;
    }

    .company-logo {
        width: 80px;
        height: 80px;
    }

    .modal-container {
        width: 95%;
    }
}
</style>