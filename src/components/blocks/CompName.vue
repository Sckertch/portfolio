<template>
    <div class="competence-item">
        <img :src="'http://portoimages.duckdns.org/' + competence.image" alt="Image de la compétence">
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
        console.log("competence",props.competence);
    });
    </script>
      
    <style>
        .competence-item {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 15px;
            width: 30%;
            text-align: center;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }
    
        .competence-item:hover {
            transform: translateY(-10px);
            background-color: rgba(255, 255, 255, 0.2);
        }
    
        .competence-item img {
            width: 100%;
            max-width: 150px;
            border-radius: 10px;
            margin-bottom: 15px;
        }
    
        .competence-item h2 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #ffd700;
        }
    
        .progress-bar {
            background-color: #ddd;
            border-radius: 10px;
            overflow: hidden;
            height: 10px;
            margin-top: 10px;
        }
    
        .progress {
            background-color: #ffd700;
            height: 100%;
            transition: width 0.3s ease;
        }
    </style>