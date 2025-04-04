<script setup>
import { ref, onMounted } from 'vue';
import CompName from './blocks/CompName.vue';
import CertifName from './blocks/CertifName.vue';
import LyceeName from './blocks/LyceeName.vue';
import ExpeName from './blocks/ExpeName.vue';

//dans la partie centres d'intérets, je vousdrais que l'item nature sois un carrousel d'image en fonction d'iun nombre d'image qu'il récupèrera en bdd

//dans la partie centres d'intérets, je vousdrais que l'item sois un carrousel d'image en fonction d'iun nombre d'image qu'il récupèrera en bdd

// Variable pour le carrousel d'images de nature
const nombreImagesNature = ref(5); // Nombre d'images à afficher dans le carrousel
const currentImageNature = ref(0); // Index de l'image actuellement affichée

// Fonction pour passer à l'image suivante
const nextImageNature = () => {
  currentImageNature.value = (currentImageNature.value + 1) % nombreImagesNature.value;
};

// Fonction pour passer à l'image précédente
const prevImageNature = () => {
  currentImageNature.value = (currentImageNature.value - 1 + nombreImagesNature.value) % nombreImagesNature.value;
};

// Fonction pour afficher une image spécifique
const showImageNature = (index) => {
  currentImageNature.value = index;
};

// Fonction pour générer l'URL de l'image de nature
const getNatureImageUrl = (index) => {
  return `https://portoimages.duckdns.org/${index + 1}.jpeg`;
};

const competences = ref([]);
const certifications = ref([]);
const lycees = ref([]);
const experiences = ref([]);

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

const getExperiences = () => {
  fetch('https://axilio.duckdns.org/Profesionel/getexperience')
    .then(response => response.json())
    .then(data => {
      experiences.value = data.content;
      console.log("experiences du fetch", experiences.value);
    })
    .catch(error => console.error(error));
};

const downloadCV = () => {
  // Accès direct au PDF dans le dossier des images (pas besoin de passer par l'API)
  const cvUrl = 'https://portoimages.duckdns.org/cv.pdf';

  // Crée un lien temporaire pour télécharger le fichier
  const link = document.createElement('a');
  link.href = cvUrl;
  link.target = '_blank'; // Ouvre dans un nouvel onglet
  link.download = 'CV_LEDA_Mathis.pdf'; // Nom du fichier téléchargé

  // Déclenche le téléchargement
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
};

onMounted(() => {
  getCompetences();
  getCertifications();
  getLycees();
  getExperiences();
  console.log("experiences", experiences.value);
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
      <a href="#" class="btn-cv" @click.prevent="downloadCV">Télécharger mon CV</a>

      <!-- Centres d'intérêt -->
      <h1>Mes centres d'intérêt</h1>
      <div class="centres-interet">
        <!-- Carrousel pour La nature -->
        <div class="item carousel">
          <h2>La nature</h2>
          <div class="carousel-container">
            <button class="carousel-btn prev" @click="prevImageNature">&lt;</button>
            <div class="carousel-content">
              <img :src="getNatureImageUrl(currentImageNature)" alt="Image de la nature">
              <div class="carousel-indicators">
                <span v-for="index in nombreImagesNature" :key="index - 1"
                  :class="{ active: index - 1 === currentImageNature }" @click="showImageNature(index - 1)"></span>
              </div>
            </div>
            <button class="carousel-btn next" @click="nextImageNature">&gt;</button>
          </div>
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


      <!-- Section Mon Parcours -->
      <h1>Mon parcours</h1>
      <div class="parcours-container">
        <!-- Formations -->
        <div class="parcours-section">
          <h2 class="parcours-subtitle">Mes formations</h2>
          <div class="lycees" v-if="lycees.length">
            <div v-for="(lycee, index) in lycees" :key="lycee.nom" class="lycee-item">
              <div class="timeline-dot"></div>
              <div class="lycee-content">
                <LyceeName :lycee="lycee" />
              </div>
            </div>
          </div>
          <p v-else>Chargement des formations...</p>
        </div>

        <!-- Expériences professionnelles -->
        <div class="parcours-section">
          <h2 class="parcours-subtitle">Mes expériences professionnelles</h2>
          <div class="experiences" v-if="experiences.length">
            <div v-for="(experience, index) in experiences" :key="experience.nom" class="experience-item">
              <div class="timeline-dot"></div>
              <div class="experience-content">
                <ExpeName :experience="experience" />
              </div>
            </div>
          </div>
          <p v-else>Chargement des expériences...</p>
        </div>
      </div>

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
  background-color: rgba(255, 255, 255, 0.3);
  /* Fond plus transparent */
  color: #333;
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
  color: #333;
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
  background-color: rgba(255, 255, 255, 0.4);
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

/* Style de bannière noire pour les h1 */
.profil-section h1 {
  font-size: 2rem;
  color: #fff;
  margin-bottom: 25px;
  padding: 12px 20px;
  background-color: rgba(0, 0, 0, 0.8);
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  border-bottom: 2px solid rgba(255, 215, 0, 0.5);
  text-transform: uppercase;
  letter-spacing: 1px;
  text-align: center;
  position: relative;
}

.profil-section h1::after {
  display: none;
}

section:hover h1 {
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
  background-color: rgba(0, 0, 0, 0.9);
}

.profil-section p {
  font-size: 1.1rem;
  line-height: 1.6;
  text-align: justify;
  margin-bottom: 30px;
  color: #333;
}

/* Bouton de téléchargement du CV */
.btn-cv {
  display: inline-block;
  padding: 12px 24px;
  background-color: rgba(255, 215, 0, 0.1);
  color: #333;
  border: 2px solid #ffd700;
  border-radius: 8px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  transition: all 0.3s ease;
  margin-bottom: 40px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
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
  background-color: rgba(255, 255, 255, 0.7);
  border-radius: 15px;
  padding: 20px;
  width: 30%;
  text-align: center;
  transition: all 0.3s ease;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.centres-interet .item:hover {
  transform: translateY(-10px);
  background-color: rgba(255, 255, 255, 0.8);
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
  color: #333;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
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
  background-color: rgba(255, 255, 255, 0.7);
  border-radius: 15px;
  padding: 20px;
  width: 22%;
  text-align: center;
  transition: all 0.3s ease;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.qualites .item:hover {
  transform: translateY(-10px);
  background-color: rgba(255, 255, 255, 0.8);
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
  color: #333;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
}

.qualites .item h4 {
  font-size: 1rem;
  line-height: 1.4;
  color: #333;
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

/* Section Certifications */
.certifications {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin-top: 40px;
  justify-content: space-around;
}

.certification-item {
  background-color: rgba(255, 255, 255, 0.7);
  border-radius: 15px;
  padding: 20px;
  width: 75%;
  text-align: center;
  transition: all 0.3s ease;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.certification-item:hover {
  transform: translateY(-10px);
  background-color: rgba(255, 255, 255, 0.8);
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
  color: #333;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
}

.certification-item p {
  font-size: 1rem;
  color: #333;
}

/* Section Lycées */
.lycees {
  position: relative;
  padding-left: 20px;
  margin-top: 40px;
}

.lycees::before {
  content: '';
  position: absolute;
  left: 9px;
  top: 0;
  bottom: 0;
  width: 2px;
  background-color: #333;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

.lycee-item {
  display: flex;
  align-items: center;
  margin-bottom: 30px;
  position: relative;
}

.timeline-dot {
  width: 20px;
  height: 20px;
  background-color: #333;
  border-radius: 50%;
  flex-shrink: 0;
  margin-right: 20px;
  position: relative;
  z-index: 1;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.lycee-item:hover .timeline-dot {
  transform: scale(1.2);
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
}

.lycee-content {
  flex-grow: 1;
  transition: transform 0.3s ease;
}

.lycee-item:hover .lycee-content {
  transform: translateX(5px);
}

.profil-section>h1 {
  margin-top: 60px;
}

.item,
.competence-item,
.certification-item,
.lycee-item,
.timeline-dot,
.lycee-content {
  transition: all 0.3s ease;
}

p[v-else] {
  text-align: center;
  font-size: 1.2rem;
  color: #333;
  padding: 40px 0;
  background-color: rgba(255, 255, 255, 0.3);
  border-radius: 10px;
  margin-top: 20px;
}

/* Section Parcours */
.parcours-container {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  margin-top: 40px;
}

.parcours-section {
  flex: 1;
  min-width: 300px;
}

.parcours-subtitle {
  font-size: 1.6rem;
  color: #333;
  margin-bottom: 25px;
  text-align: center;
  padding-bottom: 10px;
  border-bottom: 2px solid rgba(0, 0, 0, 0.2);
}

/* Adapter la section experiences comme lycees */
.experiences {
  position: relative;
  padding-left: 20px;
}

.experiences::before {
  content: '';
  position: absolute;
  left: 9px;
  top: 0;
  bottom: 0;
  width: 2px;
  background-color: #333;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

.experience-item {
  display: flex;
  align-items: center;
  margin-bottom: 30px;
  position: relative;
}

.experience-item:hover .timeline-dot {
  transform: scale(1.2);
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
}

.experience-content {
  flex-grow: 1;
  transition: transform 0.3s ease;
}

.experience-item:hover .experience-content {
  transform: translateX(5px);
}

/* Responsive Design pour le parcours */
@media (max-width: 768px) {
  .parcours-container {
    flex-direction: column;
  }
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

/* Styles spécifiques pour le carrousel */
.carousel-container {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  margin: 0 auto;
}

.carousel-content {
  position: relative;
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.carousel-btn {
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  border: none;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  font-size: 18px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 10px;
  transition: background-color 0.3s ease;
  z-index: 10;
}

.carousel-btn:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

.carousel-indicators {
  display: flex;
  justify-content: center;
  margin-top: 15px;
  width: 100%;
}

.carousel-indicators span {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: rgba(0, 0, 0, 0.3);
  margin: 0 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.carousel-indicators span.active {
  background-color: #ffd700;
}

.item.carousel img {
  width: 100%;
  max-width: 200px;
  height: 200px;
  object-fit: cover;
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease;
}
</style>