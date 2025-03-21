<template>
    <div class="projects-section">
        <div class="projects-container">
            <h2 class="section-title">Mes projets</h2>

            <div class="projects-grid" v-if="projets.length">
                <ProjectName v-for="projet in projets" :key="projet.id" :projet="projet" />
            </div>

            <div class="loading-message" v-else>
                <p>Chargement des projets...</p>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import ProjectName from '../blocks/ProjectName.vue';

const projets = ref([]);

const getProjets = () => {
    fetch('https://axilio.duckdns.org/projet/getprojet')
        .then(response => response.json())
        .then(data => {
            projets.value = data.content;
            console.log("projets du fetch", projets.value);
        })
        .catch(error => console.error(error));
};

onMounted(() => {
    getProjets();
});
</script>

<style scoped>
.projects-section {
    padding: 60px 0;
    background-color: #121212;
    color: #fff;
}

.projects-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.section-title {
    font-size: 2.5rem;
    color: #ffd700;
    text-align: center;
    margin-bottom: 50px;
    position: relative;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background-color: #ffd700;
}

.projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

.loading-message {
    text-align: center;
    font-size: 1.2rem;
    color: #ccc;
    padding: 40px 0;
}

@media (max-width: 768px) {
    .projects-grid {
        grid-template-columns: 1fr;
    }

    .section-title {
        font-size: 2rem;
    }
}
</style>
