<template>
    <div class="experience-box">
        <div class="experience-header">
            <h2 class="experience-name">{{ experience.nom }}</h2>
            <p class="experience-period">{{ experience.period }}</p>
        </div>
        <div class="experience-description">
            <p>{{ experience.description }}</p>
        </div>
        <div class="experience-subinfo">
            <p>{{ experience.sousDescription }}</p>
        </div>
    </div>
</template>

<script setup>
import { defineProps, onMounted } from 'vue';

const props = defineProps({
    experience: Object
});

onMounted(() => {
    console.log("experience", props.experience);
});
</script>

<style scoped>
.experience-box {
    background-color: rgba(255, 255, 255, 0.7);
    border-radius: 15px;
    padding: 20px;
    width: 100%;
    text-align: left;
    transition: all 0.3s ease;
    margin-bottom: 20px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.experience-box:hover {
    transform: translateY(-10px);
    background-color: rgba(255, 255, 255, 0.8);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
}

.experience-header {
    margin-bottom: 15px;
}

.experience-name {
    font-size: 1.5rem;
    margin-bottom: 5px;
    color: #333;
}

.experience-period {
    font-size: 1rem;
    color: #333;
    margin-bottom: 10px;
    font-style: italic;
}

.experience-description {
    font-size: 1rem;
    color: #333;
    line-height: 1.6;
    margin-top: 10px;
}

.experience-subinfo {
    font-size: 0.9rem;
    color: #555;
    line-height: 1.4;
    margin-top: 10px;
    padding-top: 10px;
    border-top: 1px dotted rgba(0, 0, 0, 0.2);
}
</style>
