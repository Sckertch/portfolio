<template>
    <div class="competence-item">
        <img :src="'https://portoimages.duckdns.org/' + competence.image" alt="Image de la compétence">
        <h2>{{ competence.nom }}</h2>
        <div class="progress-bar">
            <div class="progress" :style="{ width: competence.niveau + '%' }"></div>
        </div>
    </div>
</template>

<script setup>
import { defineProps, onMounted } from 'vue';

const props = defineProps({
    competence: Object
});

onMounted(() => {
    console.log("competence", props.competence);
});
</script>

<style scoped>
.competence-item {
    background-color: rgba(255, 255, 255, 0.7);
    border-radius: 15px;
    padding: 20px;
    width: 30%;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.competence-item:hover {
    transform: translateY(-10px);
    background-color: rgba(255, 255, 255, 0.8);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
}

.competence-item img {
    width: 100%;
    max-width: 150px;
    border-radius: 10px;
    margin-bottom: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.competence-item h2 {
    font-size: 1.3rem;
    margin-bottom: 10px;
    color: #333;
    border-bottom: 1px solid rgba(0, 0, 0, 0.2);
}

.progress-bar {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    overflow: hidden;
    height: 10px;
    margin-top: 10px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2);
}

.progress {
    background-color: #ffd700;
    height: 100%;
    transition: width 0.3s ease;
}
</style>