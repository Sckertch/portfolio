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
    background-color: rgba(255, 255, 255, 0.4);
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.projects-container {
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

.projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

.loading-message {
    text-align: center;
    font-size: 1.2rem;
    color: #333;
    padding: 40px 0;
    background-color: rgba(255, 255, 255, 0.3);
    border-radius: 10px;
    margin-top: 20px;
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
