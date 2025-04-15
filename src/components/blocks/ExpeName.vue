<template>
    <div class="experience-card">
        <div class="experience-header">
            <h3 class="experience-name">{{ experience.nom }}</h3>
            <!-- Correction: utiliser experience.period au lieu de date/periode -->
            <span class="experience-date" v-if="experience.period">{{ experience.period }}</span>
        </div>
        <div class="experience-body">
            <div class="experience-position" v-if="experience.poste">{{ experience.poste }}</div>

            <!-- Affichage de la description principale -->
            <p class="experience-description">{{ experience.description }}</p>

            <!-- Affichage de la sous-description si elle existe -->
            <p class="experience-sub-description" v-if="experience.sousDescription">{{ experience.sousDescription }}</p>
        </div>
    </div>
</template>

<script setup>
import { defineProps, onMounted } from 'vue';

const props = defineProps({
    experience: Object
});

// Debug pour voir le contenu de l'objet experience
onMounted(() => {
    console.log('Contenu de l\'expérience :', props.experience);
});
</script>

<style scoped>
.experience-card {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.12);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin-bottom: 1.25rem;
}

.experience-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.experience-header {
    padding: 1rem;
    background-color: rgba(0, 0, 0, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.experience-name {
    margin: 0;
    font-size: 1.1rem;
    color: #ffffff;
    position: relative;
    padding-left: 0.75rem;
}

.experience-name::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 3px;
    height: 70%;
    background-color: #ffd700;
    border-radius: 2px;
}

.experience-date {
    padding: 0.25rem 0.75rem;
    background-color: rgba(255, 215, 0, 0.2);
    border-radius: 50px;
    font-size: 0.85rem;
    color: #ffd700;
    font-weight: 600;
}

.experience-body {
    padding: 1rem;
}

.experience-position {
    color: #ffd700;
    font-weight: 600;
    margin-bottom: 0.5rem;
    font-size: 0.95rem;
    padding-bottom: 0.5rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.experience-description {
    color: #ffffff;
    margin: 0;
    font-size: 0.95rem;
    line-height: 1.5;
}

/* Ajouter un style pour la sous-description */
.experience-sub-description {
    color: #e0e0e0;
    margin-top: 0.75rem;
    font-size: 0.9rem;
    line-height: 1.5;
    font-style: italic;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding-top: 0.75rem;
}

@media (max-width: 576px) {
    .experience-header {
        flex-direction: column;
        align-items: flex-start;
    }

    .experience-date {
        margin-top: 0.5rem;
        align-self: flex-start;
    }
}
</style>
