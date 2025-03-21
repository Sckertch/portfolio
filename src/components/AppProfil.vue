<script setup>
import { ref, onMounted } from 'vue';
import CompName from './blocks/CompName.vue';
import CertifName from './blocks/CertifName.vue';
import LyceeName from './blocks/LyceeName.vue';

const competences = ref([]);
const certifications = ref([]);
const lycees = ref([]);

const getCompetences = () => {
  fetch('https://axilio.duckdns.org/competence/getcompetence')
    .then(response => response.json())
    .then(data => {
      competences.value = data.content;
      console.log("competences du fetch", competences.value);
    })
    .catch(error => console.error(error));
};

const getCertifications = () => {
  fetch('https://axilio.duckdns.org/certification/getcertification')
    .then(response => response.json())
    .then(data => {
      certifications.value = data.content;
      console.log("certifications du fetch", certifications.value);
    })
    .catch(error => console.error(error));
};

const getLycees = () => {
  fetch('https://axilio.duckdns.org/lycee/getlycee')
    .then(response => response.json())
    .then(data => {
      lycees.value = data.content;
      console.log("lycees du fetch", lycees.value);
    })
    .catch(error => console.error(error));
};

onMounted(() => {
  getCompetences();
  getCertifications();
  getLycees();
  console.log("competences", competences.value);
  console.log("certifications", certifications.value);
  console.log("lycees", lycees.value);
});
</script>

<template>
  <div class="test">
    <section class="profil-section">
      <!-- À propos de moi -->
      <h1>À propos de moi 📄</h1>
      <p>
        Je m’appelle LEDA Mathis, je suis âgé de 18 ans. Je suis actuellement étudiant au lycée de Baimbridge, en
        première année de BTS Services Informatiques aux Organisations.
        Depuis que je suis petit, j’ai toujours été attiré par l’informatique et les nouvelles technologies. De ce fait,
        je me suis tourné vers ces études.
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
          <img src="../assets/img/img/teamwork.jpg" alt="Esprit d'équipe">
        </div>
        <div class="item">
          <h2>Adaptabilité</h2>
          <img src="../assets/img/img/adaptabilité.jpg" alt="Adaptabilité">
        </div>
        <div class="item">
          <h2>Prise d'initiative</h2>
          <img src="../assets/img/img/init.jpg" alt="Prise d'initiative">
        </div>
        <div class="item">
          <h2>Rigoureux</h2>
          <img src="../assets/img/img/rigueur.jpg" alt="Rigueur">
        </div>
      </div>

      <!-- Mes compétences -->
      <h1>Mes compétences</h1>
      <div class="competences" v-if="competences.length">
        <CompName v-for="competence in competences" :key="competence.nom" :competence="competence" />
      </div>
      <p v-else>Chargement des compétences...</p>

      <!-- Mes Formations -->
      <h1>Mes formations</h1>
      <div class="lycees" v-if="lycees.length">
        <div v-for="(lycee, index) in lycees" :key="lycee.nom" class="lycee-item">
          <div class="timeline-dot"></div>
          <div class="lycee-content">
            <LyceeName :lycee="lycee" />
          </div>
        </div>
      </div>
      <p v-else>Chargement des lycées...</p>

      <!-- Mes certifications -->
      <h1>Mes certifications</h1>
      <div class="certifications" v-if="certifications.length">
        <CertifName v-for="certification in certifications" :key="certification.nom" :certification="certification" />
      </div>
      <p v-else>Chargement des certifications...</p>
    </section>
  </div>
</template>

<style scoped>
/* Styles globaux */
.test {
  font-family: 'Roboto', sans-serif;
  background-color: #000000;
  /* Fond noir */
  background-size: 400% 400%;
  color: #fff;
  margin: 0;
  padding: 0;
}

h1,
h2,
h3,
h4 {
  font-family: 'Rockwell', serif;
}

a {
  color: #fff;
  text-decoration: none;
  transition: color 0.3s ease;
}

a:hover {
  color: #ffd700;
}

/* Section À propos de moi */
.profil-section {
  padding: 60px 20px;
  margin: 0 auto;
  max-width: 1200px;
  background-color: #121212;
  /* Couleur de fond secondaire si nécessaire */
  border-radius: 15px;
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
}

.profil-section h1 {
  font-size: 2.5rem;
  margin-bottom: 30px;
  text-align: center;
  color: #ffd700;
  position: relative;
  padding-bottom: 15px;
}

.profil-section h1::after {
  content: '';
  position: absolute;
  bottom: -15px;
  left: 50%;
  transform: translateX(-50%);
  width: 80px;
  height: 3px;
  background-color: #ffd700;
}

.profil-section p {
  font-size: 1.1rem;
  line-height: 1.6;
  text-align: justify;
  margin-bottom: 30px;
  color: #e0e0e0;
}

/* Bouton de téléchargement du CV */
.btn-cv {
  display: inline-block;
  padding: 12px 24px;
  background-color: rgba(255, 215, 0, 0.1);
  color: #ffd700;
  border: 2px solid #ffd700;
  border-radius: 8px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  transition: all 0.3s ease;
  margin-bottom: 40px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.btn-cv:hover {
  background-color: rgba(255, 215, 0, 0.2);
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
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
  border-radius: 15px;
  padding: 20px;
  width: 30%;
  text-align: center;
  transition: all 0.3s ease;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.centres-interet .item:hover {
  transform: translateY(-10px);
  background-color: rgba(255, 255, 255, 0.15);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
}

.centres-interet .item img,
.centres-interet .item video {
  width: 100%;
  max-width: 200px;
  border-radius: 10px;
  margin-bottom: 15px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.centres-interet .item h2 {
  font-size: 1.3rem;
  margin-bottom: 10px;
  color: #ffd700;
  border-bottom: 1px solid rgba(255, 215, 0, 0.2);
  padding-bottom: 10px;
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
  border-radius: 15px;
  padding: 20px;
  width: 22%;
  text-align: center;
  transition: all 0.3s ease;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.qualites .item:hover {
  transform: translateY(-10px);
  background-color: rgba(255, 255, 255, 0.15);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
}

.qualites .item img {
  width: 100%;
  max-width: 150px;
  border-radius: 10px;
  margin-bottom: 15px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.qualites .item h2 {
  font-size: 1.3rem;
  margin-bottom: 10px;
  color: #ffd700;
  border-bottom: 1px solid rgba(255, 215, 0, 0.2);
  padding-bottom: 10px;
}

.qualites .item h4 {
  font-size: 1rem;
  line-height: 1.4;
  color: #e0e0e0;
}

/* Section Compétences */
.competences {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin-top: 40px;
  justify-content: space-around;
}

.competence-item {
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 15px;
  padding: 20px;
  width: 30%;
  text-align: center;
  transition: all 0.3s ease;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.competence-item:hover {
  transform: translateY(-10px);
  background-color: rgba(255, 255, 255, 0.15);
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
  color: #ffd700;
  border-bottom: 1px solid rgba(255, 215, 0, 0.2);
  padding-bottom: 10px;
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

/* Section Certifications */
.certifications {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin-top: 40px;
  justify-content: space-around;
}

.certification-item {
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 15px;
  padding: 20px;
  width: 30%;
  text-align: center;
  transition: all 0.3s ease;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.certification-item:hover {
  transform: translateY(-10px);
  background-color: rgba(255, 255, 255, 0.15);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
}

.certification-item img {
  width: 100%;
  max-width: 250px;
  border-radius: 10px;
  margin-bottom: 15px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.certification-item h2 {
  font-size: 1.3rem;
  margin-bottom: 10px;
  color: #ffd700;
  border-bottom: 1px solid rgba(255, 215, 0, 0.2);
  padding-bottom: 10px;
}

.certification-item p {
  font-size: 1rem;
  color: #e0e0e0;
}

/* Section Lycées */
/* Conteneur principal des lycées */
.lycees {
  position: relative;
  padding-left: 20px;
  margin-top: 40px;
}

/* Ligne verticale de la timeline */
.lycees::before {
  content: '';
  position: absolute;
  left: 9px;
  top: 0;
  bottom: 0;
  width: 2px;
  background-color: #ffd700;
  box-shadow: 0 0 10px rgba(255, 215, 0, 0.3);
}

/* Conteneur de chaque lycée */
.lycee-item {
  display: flex;
  align-items: center;
  margin-bottom: 30px;
  position: relative;
}

/* Point de décoration */
.timeline-dot {
  width: 20px;
  height: 20px;
  background-color: #ffd700;
  border-radius: 50%;
  flex-shrink: 0;
  margin-right: 20px;
  position: relative;
  z-index: 1;
  box-shadow: 0 0 15px rgba(255, 215, 0, 0.5);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.lycee-item:hover .timeline-dot {
  transform: scale(1.2);
  box-shadow: 0 0 20px rgba(255, 215, 0, 0.7);
}

/* Contenu du lycée */
.lycee-content {
  flex-grow: 1;
  transition: transform 0.3s ease;
}

.lycee-item:hover .lycee-content {
  transform: translateX(5px);
}

/* Ajouter une marge supérieure aux sections pour espacement */
.profil-section>h1 {
  margin-top: 60px;
}

/* Animation de transition pour tous les éléments interactifs */
.item,
.competence-item,
.certification-item,
.lycee-item,
.timeline-dot,
.lycee-content {
  transition: all 0.3s ease;
}

/* Message de chargement */
p[v-else] {
  text-align: center;
  font-size: 1.2rem;
  color: #ccc;
  padding: 40px 0;
  background-color: rgba(255, 255, 255, 0.05);
  border-radius: 10px;
  margin-top: 20px;
}

/* Responsive Design */
@media (max-width: 768px) {
  .profil-section h1 {
    font-size: 2rem;
  }

  .centres-interet .item,
  .qualites .item,
  .competence-item,
  .certification-item {
    width: 45%;
  }
}

@media (max-width: 576px) {
  .profil-section h1 {
    font-size: 1.8rem;
  }

  .centres-interet .item,
  .qualites .item,
  .competence-item,
  .certification-item {
    width: 100%;
  }
}
</style>