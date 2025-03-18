
<script setup>
import { ref, onBeforeMount, onMounted, computed } from 'vue';

import CompName from './blocks/CompName.vue';

const competences = ref([]);

const getCompetences = () => {
    console.log(import.meta.env.VITE_API_BASE_URL);
    fetch(`http://axilio.duckdns.org/competence/getcompetence`)
        .then(response => response.json())
        .then(data => {
            competences.value = data.content;
            console.log("competences du ftch", competences.value);
        })
        .catch(error => console.error(error));
        
};

onMounted(() => {
    getCompetences();
    console.log("competences", competences.value);
});


</script>

<template>
  <div class="test">

    <section class="profil-section">
        <!-- À propos de moi -->
        <h1>À propos de moi 📄</h1>
        <p>
            Je m’appelle LEDA Mathis, je suis âgé de 18 ans. Je suis actuellement étudiant au lycée de Baimbridge, en première année de BTS Services Informatiques aux Organisations.
            Depuis que je suis petit, j’ai toujours été attiré par l’informatique et les nouvelles technologies. De ce fait, je me suis tourné vers ces études.
        </p>
        <a href="#" class="btn-cv">Télécharger mon CV</a>

        <!-- Centres d'intérêt -->
        <h1>Mes centres d'intérêt</h1>
        <div class="centres-interet">
            <div class="item">
                <h2>La mer</h2>
                <video autoplay muted loop>
                    <source src="../assets/img/img/vague.mp4" type="video/mp4">
                </video>
            </div>
            <div class="item">
                <h2>Taekwondo</h2>
                <img src="../assets/img/img/tkd.jpeg" alt="Taekwondo">
            </div>
            <div class="item">
                <h2>La musique</h2>
                <img src="../assets/img/img/note.png" alt="Musique">
            </div>
        </div>

        <!-- Mes qualités -->
        <h1>Mes qualités</h1>
        <div class="qualites">
            <div class="item">
                <h2>Esprit d'équipe</h2>
                <img src="../assets/img/img/teamwork.jpg" alt="Esprit d'équipe"></div>
            <div class="item">
                <h2>Adaptabilité</h2>
                <img src="../assets/img/img/adaptabilité.jpg" alt="Adaptabilité"></div>
            <div class="item">
                <h2>Prise d'initiative</h2>
                <img src="../assets/img/img/init.jpg" alt="Prise d'initiative"> </div>
            <div class="item">
                <h2>Rigoureux</h2>
                <img src="../assets/img/img/rigueur.jpg" alt="Rigueur">
            </div>
        </div>

        <!-- Mes compétences -->
        <h1>Mes compétences</h1>
        <div class="lescompetences" v-if="competences.length">
            <CompName />
            <CompName />
            <CompName />
            <CompName />
            <CompName />
            <CompName />
            <CompName />
            <CompName />
            <CompName />
        </div>

    </section>
    </div>
    
</template>


<style>
    /* Styles globaux */
    .test {
        font-family: 'Roboto', sans-serif;
        background: linear-gradient(135deg, #1e3c72, #2a5298, #6a11cb, #2575fc);
        background-size: 400% 400%;
        animation: gradientAnimation 10s ease infinite;
        color: #fff;
        margin: 0;
        padding: 0;
    }

    @keyframes gradientAnimation {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    h1, h2, h3, h4 {
        font-family: 'Rockwell', serif;
    }

    a {
        color: #fff;
        text-decoration: none;
    }

    a:hover {
        color: #ffd700;
    }

    /* Section À propos de moi */
    .profil-section {
        padding: 50px 20px;
        margin: 0 auto;
    }

    .profil-section h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        text-align: center;
        color: #ffd700;
    }

    .profil-section p {
        font-size: 1.1rem;
        line-height: 1.6;
        text-align: justify;
        margin-bottom: 30px;
    }

    /* Bouton de téléchargement du CV */
    .btn-cv {
        display: inline-block;
        padding: 12px 24px;
        background-color: #302c17;
        color: #ffffff;
        border-radius: 5px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.3s ease;
        margin-bottom: 40px;
    }

    .btn-cv:hover {
        background-color: #e6b800;
        transform: translateY(-2px);
    }

    /* Section Centres d'intérêt */
    .centres-interet {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        gap: 20px;
        margin-top: 40px;
    }

    .centres-interet .item {
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        padding: 15px;
        width: 30%;
        text-align: center;
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .centres-interet .item:hover {
        transform: translateY(-10px);
        background-color: rgba(255, 255, 255, 0.2);
    }

    .centres-interet .item img,
    .centres-interet .item video {
        width: 100%;
        max-width: 200px; /* Réduction de la taille des éléments */
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .centres-interet .item h2 {
        font-size: 1.2rem; /* Taille de police réduite */
        margin-bottom: 10px;
        color: #ffd700;
    }

    /* Section Qualités */
    .qualites {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        gap: 20px;
        margin-top: 40px;
    }

    .qualites .item {
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        padding: 15px;
        width: 22%;
        text-align: center;
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .qualites .item:hover {
        transform: translateY(-10px);
        background-color: rgba(255, 255, 255, 0.2);
    }

    .qualites .item img {
        width: 100%;
        max-width: 150px; /* Réduction de la taille des éléments */
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .qualites .item h2 {
        font-size: 1.2rem; /* Taille de police réduite */
        margin-bottom: 10px;
        color: #ffd700;
    }

    .qualites .item h4 {
        font-size: 0.9rem; /* Taille de police réduite */
        line-height: 1.4;
    }

    /* Styles spécifiques aux compétences */
 /* Section Compétences */
    /* Section Compétences */
    .competences {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); /* Grille flexible */
        gap: 20px; /* Espacement entre les éléments */
        margin-top: 40px;
        padding: 0 20px; /* Padding pour éviter que les éléments touchent les bords */
    }
    .competences .item {
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        padding: 15px;
        flex: 1 1 calc(25% - 40px); /* 4 éléments par ligne sur grand écran */
        text-align: center;
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .competences .item:hover {
        transform: translateY(-10px);
        background-color: rgba(255, 255, 255, 0.2);
    }

    .competences .item h2 {
        font-size: 1.2rem;
        margin-bottom: 10px;
        color: #ffd700;
    }

    .competences .item h4 {
        font-size: 0.9rem;
        line-height: 1.4;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .competences .item {
            flex: 1 1 calc(33.33% - 40px); /* 3 éléments par ligne */
        }
    }

    @media (max-width: 768px) {
        .centres-interet .item,
        .qualites .item,
        .competences .item {
            flex: 1 1 calc(50% - 40px); /* 2 éléments par ligne */
        }
    }

    @media (max-width: 480px) {
        .centres-interet .item,
        .qualites .item,
        .competences .item {
            flex: 1 1 100%; /* 1 élément par ligne */
        }
    }
</style>