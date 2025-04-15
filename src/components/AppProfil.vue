<script setup>
import { ref, onMounted, nextTick, onBeforeUnmount, watch } from 'vue';
import CompName from './blocks/CompName.vue';
import CertifName from './blocks/CertifName.vue';
import LyceeName from './blocks/LyceeName.vue';
import ExpeName from './blocks/ExpeName.vue';

// Variable pour le carrousel d'images de nature
const nombreImagesNature = ref(3); // Nombre d'images à afficher dans le carrousel
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

// Intervalle pour le défilement automatique (en millisecondes)
const autoScrollInterval = 3000; // 3 secondes

// Fonction pour démarrer le défilement automatique
const startAutoScroll = () => {
  setInterval(() => {
    nextImageNature();
  }, autoScrollInterval);
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

// Variable pour gérer l'état de zoom
const isZoomed = ref(false);
const zoomTimeout = ref(null);

// Fonction pour démarrer le zoom
const startZoom = () => {
  zoomTimeout.value = setTimeout(() => {
    isZoomed.value = true;
  }, 1000); // 1 seconde
};

// Fonction pour arrêter le zoom
const stopZoom = () => {
  clearTimeout(zoomTimeout.value);
  isZoomed.value = false;
};

const showModal = ref(false);
let pressTimer = null;

const startLongPress = () => {
  pressTimer = setTimeout(() => {
    showModal.value = true;
  }, 1000); // 1 seconde
};

const cancelLongPress = () => {
  clearTimeout(pressTimer);
};

const closeModal = () => {
  showModal.value = false;
};

// Ajout du modal global pour les images
const globalModal = ref(false);
const currentModalImage = ref('');

// Fonction pour ouvrir le modal global avec n'importe quelle image
const openGlobalModal = (imageUrl) => {
  currentModalImage.value = imageUrl;
  globalModal.value = true;
  // Désactiver le défilement quand le modal est ouvert
  document.body.style.overflow = 'hidden';
};

// Fonction pour fermer le modal global
const closeGlobalModal = () => {
  globalModal.value = false;
  // Réactiver le défilement
  document.body.style.overflow = '';
};

// Pour l'animation des compétences au défilement
const competenceRefs = ref([]);
const competenceStates = ref([]);

// Fonction pour initialiser les références des compétences
const initCompetenceRefs = () => {
  // Réinitialiser l'état si les compétences changent
  if (competences.value.length > 0) {
    competenceRefs.value = new Array(competences.value.length).fill(null);
    competenceStates.value = new Array(competences.value.length).fill(false);
  }
};

// Pour surveiller les changements dans les données des compétences
watch(competences, () => {
  initCompetenceRefs();
}, { immediate: true });

// Fonction pour définir la référence d'une compétence
const setCompetenceRef = (el, index) => {
  competenceRefs.value[index] = el;
};

// Fonction pour vérifier si une compétence est visible
const isCompetenceVisible = (index) => {
  return competenceStates.value[index];
};

// Configuration de l'Intersection Observer pour chaque compétence
const setupScrollReveal = () => {
  // S'assurer que les références existent avant de configurer l'observer
  if (!competenceRefs.value.length || !competences.value.length) {
    return;
  }

  const options = {
    threshold: 0.15,
    rootMargin: '0px 0px -10% 0px'
  };

  // Créer un nouvel IntersectionObserver
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        try {
          // Trouver l'index de l'élément dans le tableau des références
          const index = competenceRefs.value.findIndex(ref => ref === entry.target);
          if (index !== -1) {
            // Déclencher l'animation avec un délai basé sur l'index
            competenceStates.value[index] = true;

            // Arrêter d'observer cet élément une fois qu'il a été révélé
            observer.unobserve(entry.target);
          }
        } catch (error) {
          console.error("Erreur lors du traitement de l'entrée:", error);
        }
      }
    });
  }, options);

  // Observer chaque élément de compétence, avec vérification
  nextTick(() => {
    competenceRefs.value.forEach((ref, index) => {
      if (ref && !competenceStates.value[index]) { // Vérifier que la référence existe et n'est pas déjà révélée
        try {
          observer.observe(ref);
        } catch (error) {
          console.error(`Erreur lors de l'observation de l'élément ${index}:`, error);
        }
      }
    });
  });

  // Stocker l'observer pour pouvoir le nettoyer plus tard
  return observer;
};

// Variable pour stocker l'observer
let scrollObserver = null;

onMounted(() => {
  getCompetences();
  getCertifications();
  getLycees();
  getExperiences();
  console.log("experiences", experiences.value);
  console.log("competences", competences.value);
  console.log("certifications", certifications.value);
  console.log("lycees", lycees.value);
  startAutoScroll();

  // Attendre que le composant soit rendu et que les données soient chargées
  nextTick(() => {
    // Initialiser les références si les compétences existent déjà
    if (competences.value.length) {
      initCompetenceRefs();

      // Donner un peu de temps au DOM pour se mettre à jour
      setTimeout(() => {
        // Configurer et stocker l'observer
        scrollObserver = setupScrollReveal();
      }, 500);
    }
  });
});

// S'assurer que l'observer est détruit lorsque le composant est démonté
onBeforeUnmount(() => {
  if (scrollObserver) {
    scrollObserver.disconnect();
    scrollObserver = null;
  }
});

// Mettre à jour l'observer lorsque les compétences changent
watch(competences, () => {
  // Nettoyer l'ancien observer
  if (scrollObserver) {
    scrollObserver.disconnect();
  }

  // Initialiser les nouvelles références
  initCompetenceRefs();

  // Attendre que le DOM se mette à jour
  nextTick(() => {
    setTimeout(() => {
      // Créer un nouvel observer
      scrollObserver = setupScrollReveal();
    }, 500);
  });
}, { deep: true });
</script>

<template>
  <div class="profile-container">
    <!-- Section À propos de moi -->
    <section class="profile-section about-section">
      <div class="section-header">
        <h2 class="section-title">À propos de moi</h2>
      </div>
      <div class="section-content">
        <div class="about-card">
          <div class="about-info">
            <p class="about-text">
              Je m'appelle LEDA Mathis, je suis âgé de 18 ans. Je suis actuellement étudiant au lycée de Baimbridge, en
              première année de BTS Services Informatiques aux Organisations.
              Depuis que je suis petit, j'ai toujours été attiré par l'informatique et les nouvelles technologies. De ce
              fait,
              je me suis tourné vers ces études.
            </p>
            <a href="#" class="btn-primary" @click.prevent="downloadCV">
              <span class="btn-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                  <polyline points="7 10 12 15 17 10"></polyline>
                  <line x1="12" y1="15" x2="12" y2="3"></line>
                </svg>
              </span>
              Télécharger mon CV
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Séparateur visuel -->
    <div class="section-separator"></div>

    <!-- Section Centres d'intérêt avec affichage amélioré des images -->
    <section class="profile-section interests-section">
      <div class="section-header">
        <h2 class="section-title">Mes centres d'intérêt</h2>
      </div>
      <div class="section-content">
        <div class="cards-grid">
          <!-- Carrousel pour La nature avec meilleure gestion des images -->
          <div class="interest-card">
            <div class="card-header">
              <h3 class="card-title">La nature</h3>
            </div>
            <div class="card-body">
              <div class="carousel-container">
                <div class="carousel-content">
                  <div class="image-wrapper" @click="openGlobalModal(getNatureImageUrl(currentImageNature))">
                    <img :src="getNatureImageUrl(currentImageNature)" alt="Image de la nature" class="interest-image">
                    <div class="image-overlay">
                      <span class="zoom-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <circle cx="11" cy="11" r="8"></circle>
                          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                          <line x1="11" y1="8" x2="11" y2="14"></line>
                          <line x1="8" y1="11" x2="14" y2="11"></line>
                        </svg>
                      </span>
                    </div>
                  </div>
                  <div class="carousel-controls">
                    <button class="carousel-button prev" @click="prevImageNature" aria-label="Image précédente">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6"></polyline>
                      </svg>
                    </button>
                    <div class="carousel-indicators">
                      <span v-for="(_, index) in nombreImagesNature" :key="index" class="indicator"
                        :class="{ active: index === currentImageNature }" @click="showImageNature(index)"></span>
                    </div>
                    <button class="carousel-button next" @click="nextImageNature" aria-label="Image suivante">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="interest-card">
            <div class="card-header">
              <h3 class="card-title">Taekwondo</h3>
            </div>
            <div class="card-body">
              <div class="image-wrapper" @click="openGlobalModal('https://portoimages.duckdns.org/tkd.jpeg')">
                <img src="../assets/img/img/tkd.jpeg" alt="Taekwondo" class="interest-image">
                <div class="image-overlay">
                  <span class="zoom-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <circle cx="11" cy="11" r="8"></circle>
                      <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                      <line x1="11" y1="8" x2="11" y2="14"></line>
                      <line x1="8" y1="11" x2="14" y2="11"></line>
                    </svg>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="interest-card">
            <div class="card-header">
              <h3 class="card-title">La musique</h3>
            </div>
            <div class="card-body">
              <div class="image-wrapper" @click="openGlobalModal('https://portoimages.duckdns.org/note.png')">
                <img src="../assets/img/img/note.png" alt="Musique" class="interest-image">
                <div class="image-overlay">
                  <span class="zoom-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <circle cx="11" cy="11" r="8"></circle>
                      <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                      <line x1="11" y1="8" x2="11" y2="14"></line>
                      <line x1="8" y1="11" x2="14" y2="11"></line>
                    </svg>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Séparateur visuel -->
    <div class="section-separator"></div>

    <!-- Section Qualités avec des icônes au lieu d'images -->
    <section class="profile-section qualities-section">
      <div class="section-header">
        <h2 class="section-title">Mes qualités</h2>
      </div>
      <div class="section-content">
        <div class="qualities-grid">
          <div class="quality-card">
            <div class="quality-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
            </div>
            <h3 class="quality-title">Esprit d'équipe</h3>
          </div>

          <div class="quality-card">
            <div class="quality-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
              </svg>
            </div>
            <h3 class="quality-title">Adaptabilité</h3>
          </div>

          <div class="quality-card">
            <div class="quality-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
              </svg>
            </div>
            <h3 class="quality-title">Prise d'initiative</h3>
          </div>

          <div class="quality-card">
            <div class="quality-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 20V10"></path>
                <path d="M18 20V4"></path>
                <path d="M6 20v-6"></path>
              </svg>
            </div>
            <h3 class="quality-title">Rigueur</h3>
          </div>
        </div>
      </div>
    </section>

    <!-- Séparateur visuel -->
    <div class="section-separator"></div>

    <!-- Section Compétences avec animation scroll reveal -->
    <section class="profile-section skills-section">
      <div class="section-header">
        <h2 class="section-title">Mes compétences</h2>
      </div>
      <div class="section-content">
        <div class="skills-grid" v-if="competences.length">
          <div v-for="(competence, index) in competences" :key="competence.nom" :ref="el => setCompetenceRef(el, index)"
            class="skill-item" :class="{ 'revealed': isCompetenceVisible(index) }">
            <CompName :competence="competence"
              @image-click="openGlobalModal(`https://portoimages.duckdns.org/${competence.image}`)" />
          </div>
        </div>
        <p v-else class="loading-message">Chargement des compétences...</p>
      </div>
    </section>

    <!-- Séparateur visuel -->
    <div class="section-separator"></div>

    <!-- Section Parcours -->
    <section class="profile-section path-section">
      <div class="section-header">
        <h2 class="section-title">Mon parcours</h2>
      </div>
      <div class="section-content">
        <div class="path-container">
          <!-- Formations -->
          <div class="path-column">
            <h3 class="column-title">Mes formations</h3>
            <div class="timeline-wrapper" v-if="lycees.length">
              <div v-for="(lycee, index) in lycees" :key="lycee.nom" class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                  <LyceeName :lycee="lycee" />
                </div>
              </div>
            </div>
            <p v-else class="loading-message">Chargement des formations...</p>
          </div>

          <!-- Expériences professionnelles -->
          <div class="path-column">
            <h3 class="column-title">Mes expériences professionnelles</h3>
            <div class="timeline-wrapper" v-if="experiences.length">
              <div v-for="(experience, index) in experiences" :key="experience.nom" class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                  <ExpeName :experience="experience" />
                </div>
              </div>
            </div>
            <p v-else class="loading-message">Chargement des expériences...</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Séparateur visuel -->
    <div class="section-separator"></div>

    <!-- Section Certifications -->
    <section class="profile-section certifications-section">
      <div class="section-header">
        <h2 class="section-title">Mes certifications</h2>
      </div>
      <div class="section-content">
        <div class="certifications-grid" v-if="certifications.length">
          <CertifName v-for="certification in certifications" :key="certification.nom" :certification="certification"
            @image-click="openGlobalModal" />
        </div>
        <p v-else class="loading-message">Chargement des certifications...</p>
      </div>
    </section>

    <!-- Modal pour les images -->
    <div v-if="showModal" class="modal" @click="closeModal">
      <div class="modal-content">
        <img :src="getNatureImageUrl(currentImageNature)" alt="Image agrandie">
        <button class="modal-close" @click.stop="closeModal">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </button>
      </div>
    </div>

    <!-- Modal global amélioré pour les images de différents formats -->
    <div v-if="globalModal" class="global-modal" @click="closeGlobalModal">
      <div class="global-modal-content" @click.stop>
        <div class="image-container">
          <img :src="currentModalImage" alt="Image agrandie" class="global-modal-image">
        </div>
        <button class="global-modal-close" @click="closeGlobalModal">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </button>
      </div>
    </div>
  </div>
</template>

<style scoped>
:root {
  --primary-dark: #14213d;
  --primary: #1a2a6c;
  --primary-light: #2a5298;
  --accent: #ffd700;
  --accent-light: #ffe55c;
  --accent-dark: #d4af37;

  --white: #ffffff;
  --light: #f5f5f5;
  --gray-light: #e0e0e0;
  --gray: #9e9e9e;
  --gray-dark: #424242;
  --dark: #212121;

  --shadow-sm: 0 2px 4px rgba(0, 0, 0, 0.1);
  --shadow-md: 0 4px 8px rgba(0, 0, 0, 0.12);
  --shadow-lg: 0 8px 16px rgba(0, 0, 0, 0.15);

  --radius-sm: 4px;
  --radius-md: 8px;
  --radius-lg: 16px;

  --transition-fast: 0.2s ease;
  --transition-normal: 0.3s ease;
  --transition-slow: 0.5s ease;

  --font-sans: 'Inter', 'Helvetica', 'Arial', sans-serif;
}

/* Container principal */
.profile-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 2rem 1rem;
}

/* Style des sections */
.profile-section {
  margin-bottom: 3rem;
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  transition: transform var(--transition-normal), box-shadow var(--transition-normal);
}

.profile-section:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
}

.section-header {
  padding: 1.5rem;
  background-color: rgba(20, 33, 61, 0.9);
  position: relative;
}

.section-title {
  color: var(--white);
  font-size: 1.8rem;
  margin: 0;
  letter-spacing: 0.5px;
  position: relative;
  display: inline-block;
  padding-left: 1rem;
}

.section-title::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 4px;
  background-color: var(--accent);
  border-radius: var(--radius-sm);
}

.section-content {
  padding: 2rem;
  background-color: rgba(255, 255, 255, 0.08);
}

/* Carte À propos */
.about-card {
  display: flex;
  flex-direction: column;
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: var(--radius-md);
  padding: 2rem;
  box-shadow: var(--shadow-md);
}

.about-text {
  font-size: 1.1rem;
  line-height: 1.7;
  color: var(--white);
  margin-bottom: 2rem;
}

.btn-primary {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 0.8rem 1.5rem;
  background-color: var(--accent);
  color: var(--primary-dark);
  font-weight: 600;
  border-radius: var(--radius-md);
  text-decoration: none;
  transition: all var(--transition-normal);
  box-shadow: var(--shadow-md);
  align-self: flex-start;
}

.btn-primary:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
  background-color: var(--accent-light);
}

.btn-icon {
  margin-right: 0.5rem;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Grilles pour les cartes */
.cards-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 1.5rem;
}

/* Cartes d'intérêt */
.interest-card,
.quality-card {
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: var(--radius-md);
  overflow: hidden;
  box-shadow: var(--shadow-md);
  transition: transform var(--transition-normal), box-shadow var(--transition-normal);
  height: 100%;
  display: flex;
  flex-direction: column;
}

.interest-card:hover,
.quality-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.card-header {
  padding: 1.25rem;
  background-color: rgba(0, 0, 0, 0.2);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.card-title {
  margin: 0;
  font-size: 1.25rem;
  color: var(--white);
  position: relative;
  padding-left: 1rem;
}

.card-title::before {
  content: '';
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  width: 4px;
  height: 70%;
  background-color: var(--accent);
  border-radius: var(--radius-sm);
}

.card-body {
  padding: 1.25rem;
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

/* Nouveau style pour les images avec meilleur ratio */
.image-wrapper {
  position: relative;
  width: 100%;
  padding-top: 75%;
  /* Ratio 4:3 par défaut */
  overflow: hidden;
  border-radius: var(--radius-sm);
  cursor: pointer;
  background-color: rgba(0, 0, 0, 0.1);
}

.image-wrapper .image-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: opacity var(--transition-normal);
  z-index: 2;
}

.image-wrapper:hover .image-overlay {
  opacity: 1;
}

.interest-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: contain;
  /* Permet d'afficher l'image entière sans déformation */
  background-color: rgba(0, 0, 0, 0.1);
  transition: transform var(--transition-normal);
}

.image-wrapper:hover .interest-image {
  transform: scale(1.05);
}

.zoom-icon {
  color: #ffffff;
  background-color: rgba(255, 215, 0, 0.7);
  border-radius: 50%;
  width: 48px;
  height: 48px;
  display: flex;
  align-items: center;
  justify-content: center;
  transform: scale(0.8);
  transition: transform 0.3s ease;
  z-index: 3;
}

.image-wrapper:hover .zoom-icon {
  transform: scale(1);
}

/* Carrousel */
.carousel-container {
  position: relative;
  width: 100%;
  margin-bottom: 20px;
}

.carousel-content {
  position: relative;
}

/* Supprimer cette règle qui cache les images */
.card-image {
  display: none;
}

/* Ne pas masquer les images du carrousel */
.carousel-content img {
  display: block;
  /* Remplacer "none" par "block" */
}

/* Style optimisé pour les images du carrousel */
.image-wrapper .interest-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  /* Changé de "contain" à "cover" pour les images de nature */
  transition: transform var(--transition-normal);
}

/* Styles spécifiques pour les autres images d'intérêt */
.interest-card:not(:first-child) .interest-image {
  object-fit: contain;
  /* Garder "contain" pour les autres images */
}

.carousel-controls {
  display: flex;
  align-items: center;
  justify-content: space-between;
  position: absolute;
  bottom: 10px;
  left: 0;
  right: 0;
  padding: 0 10px;
  z-index: 3;
}

.carousel-button {
  background-color: rgba(0, 0, 0, 0.6);
  color: white;
  border: none;
  border-radius: 50%;
  width: 36px;
  height: 36px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: background-color var(--transition-normal);
  z-index: 4;
}

/* Grille de compétences */
.skills-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 1.5rem;
}

/* Style pour les items de compétence avec animation de scroll reveal */
.skill-item {
  opacity: 0;
  transform: translateY(50px);
  transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

.skill-item.revealed {
  opacity: 1;
  transform: translateY(0);
}

/* Ajouter une couleur de début distincte pour voir clairement l'animation */
.skill-item:nth-child(odd) {
  transform: translateY(50px) translateX(-20px);
}

.skill-item:nth-child(even) {
  transform: translateY(50px) translateX(20px);
}

.skill-item.revealed:nth-child(odd),
.skill-item.revealed:nth-child(even) {
  transform: translateY(0) translateX(0);
}

/* Supprimer les anciennes animations qui ne sont plus nécessaires */
.animate-skills>* {
  animation: none;
}

@keyframes fadeInUp {

  /* Cette animation n'est plus utilisée, mais on la garde pour compatibilité */
  0% {
    opacity: 0;
    transform: translateY(40px);
  }

  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Section Parcours */
.path-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
}

.path-column {
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: var(--radius-md);
  padding: 1.5rem;
  box-shadow: var(--shadow-md);
}

.column-title {
  font-size: 1.4rem;
  color: var(--white);
  margin-bottom: 1.5rem;
  padding-bottom: 0.8rem;
  border-bottom: 2px solid var(--accent);
  text-align: center;
}

.timeline-wrapper {
  position: relative;
  padding-left: 28px;
}

.timeline-wrapper::before {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  left: 9px;
  width: 2px;
  background-color: rgba(255, 255, 255, 0.2);
}

.timeline-item {
  position: relative;
  margin-bottom: 1.5rem;
}

.timeline-marker {
  position: absolute;
  left: -28px;
  top: 0;
  width: 18px;
  height: 18px;
  border-radius: 50%;
  background-color: var(--accent);
  z-index: 1;
  box-shadow: 0 0 0 4px rgba(255, 215, 0, 0.3);
  transition: transform var(--transition-normal), box-shadow var(--transition-normal);
}

.timeline-item:hover .timeline-marker {
  transform: scale(1.2);
  box-shadow: 0 0 0 6px rgba(255, 215, 0, 0.4);
}

.timeline-content {
  padding-bottom: 1rem;
}

/* Grille de certifications */
.certifications-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 1.5rem;
}

/* Message de chargement */
.loading-message {
  text-align: center;
  font-size: 1.1rem;
  color: var(--white);
  padding: 2rem;
  background-color: rgba(255, 255, 255, 0.05);
  border-radius: var(--radius-md);
}

/* Modal */
.modal {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.9);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1000;
  padding: 2rem;
}

.modal-content {
  position: relative;
  max-width: 90%;
  max-height: 90%;
}

.modal-content img {
  max-width: 100%;
  max-height: 80vh;
  border-radius: var(--radius-md);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
}

.modal-close {
  position: absolute;
  top: -20px;
  right: -20px;
  background-color: var(--accent);
  color: var(--primary-dark);
  border: none;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: background-color var(--transition-normal), transform var(--transition-normal);
}

.modal-close:hover {
  background-color: var(--accent-light);
  transform: rotate(90deg);
}

/* Nouvelle grille pour les qualités avec icônes */
.qualities-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 1.5rem;
}

.quality-card {
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: var(--radius-md);
  padding: 1.5rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  transition: all var(--transition-normal);
  box-shadow: var(--shadow-md);
}

.quality-card:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-lg);
  background-color: rgba(255, 255, 255, 0.15);
}

.quality-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background-color: rgba(255, 215, 0, 0.1);
  margin-bottom: 1rem;
  color: var(--accent);
  transition: all var(--transition-normal);
}

.quality-card:hover .quality-icon {
  transform: scale(1.1);
  background-color: rgba(255, 215, 0, 0.2);
}

.quality-title {
  margin: 0;
  font-size: 1.1rem;
  font-weight: 600;
  color: var(--white);
}

/* Styles pour le modal global */
.global-modal {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.9);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 9999;
  padding: 2rem;
  animation: fadeIn 0.3s ease;
}

.global-modal-content {
  position: relative;
  max-width: 90vw;
  max-height: 90vh;
  display: flex;
  justify-content: center;
  align-items: center;
  animation: scaleIn 0.3s ease;
}

.image-container {
  max-width: 90vw;
  max-height: 80vh;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}

.global-modal-image {
  max-width: 100%;
  max-height: 80vh;
  object-fit: contain;
  /* Affiche l'image complète sans la déformer */
  border-radius: var(--radius-md);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
}

.global-modal-close {
  position: absolute;
  top: -20px;
  right: -20px;
  background-color: var(--accent);
  color: var(--primary-dark);
  border: none;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
  z-index: 10;
}

.global-modal-close:hover {
  transform: rotate(90deg);
  background-color: var(--accent-light);
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

@keyframes scaleIn {
  from {
    transform: scale(0.9);
  }

  to {
    transform: scale(1);
  }
}

/* Séparateur stylisé entre les sections */
.section-separator {
  height: 2rem;
  margin: 2rem 0;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}

.section-separator::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  height: 1px;
  background: linear-gradient(to right, transparent, rgba(255, 215, 0, 0.5), transparent);
}

@media (max-width: 576px) {
  .section-separator {
    margin: 1.5rem 0;
  }
}

/* Media queries */
@media (max-width: 768px) {
  .cards-grid {
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  }

  .path-container {
    grid-template-columns: 1fr;
    gap: 2rem;
  }

  .section-title {
    font-size: 1.5rem;
  }
}

@media (max-width: 576px) {
  .profile-container {
    padding: 1rem 0.5rem;
  }

  .cards-grid {
    grid-template-columns: 1fr;
  }

  .section-content {
    padding: 1.5rem 1rem;
  }

  .about-card {
    padding: 1.5rem;
  }

  .section-title {
    font-size: 1.3rem;
  }
}
</style>