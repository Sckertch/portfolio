<template>
  <div class="profile-container">
    <!-- Section titre et introduction -->
    <section class="profile-section veille-header-section">
      <div class="section-header">
        <h2 class="section-title">Veille Technologique</h2>
      </div>
      <div class="section-content">
        <div class="intro-container">
          <div class="intro-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M2 12h5"></path>
              <path d="M9 12h5"></path>
              <path d="M16 12h6"></path>
              <path d="M4 6h8"></path>
              <path d="M15 6h5"></path>
              <path d="M3 18h7"></path>
              <path d="M13 18h8"></path>
            </svg>
          </div>
          <p class="intro-text">Suivi régulier des innovations et avancées technologiques dans le domaine informatique
          </p>
        </div>
      </div>
    </section>

    <!-- Séparateur visuel -->
    <div class="section-separator"></div>

    <!-- Section sujets de veille -->
    <section class="profile-section topics-section">
      <div class="section-header">
        <h2 class="section-title">Sujets de Veille</h2>
      </div>
      <div class="section-content">
        <div class="topics-grid">
          <div class="topic-card">
            <div class="card-header">
              <h3 class="card-title">Intelligence Artificielle</h3>
            </div>
            <div class="card-body">
              <p>
                Je maintiens une veille active sur les avancées en intelligence artificielle,
                notamment sur les modèles de langage, l'apprentissage automatique et les applications
                pratiques de l'IA dans le développement logiciel. Je m'intéresse particulièrement
                aux évolutions des grands modèles comme GPT, Claude et Gemini, ainsi qu'aux questions
                éthiques liées à l'utilisation de l'IA.
              </p>
            </div>
          </div>

          <div class="topic-card">
            <div class="card-header">
              <h3 class="card-title">Innovations Technologiques</h3>
            </div>
            <div class="card-body">
              <p>
                Je suis attentivement les dernières innovations technologiques dans le domaine
                du matériel informatique, des objets connectés et des nouvelles interfaces utilisateur.
                Cette veille me permet de rester informé sur les tendances émergentes et
                d'anticiper leur impact sur le développement d'applications.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Séparateur visuel -->
    <div class="section-separator"></div>

    <!-- Section sources -->
    <section class="profile-section sources-section">
      <div class="section-header">
        <h2 class="section-title">Mes Sources</h2>
      </div>
      <div class="section-content">
        <div class="sources-grid">
          <!-- Sources Web -->
          <div class="source-card">
            <div class="source-image">
              <img src="https://portoimages.duckdns.org/frandroid.jpg" alt="Frandroid" class="source-logo">
            </div>
            <div class="source-info">
              <h3 class="source-title">Frandroid</h3>
              <p class="source-description">Actualités et tests sur les smartphones, applications et objets connectés
              </p>
              <a href="https://www.frandroid.com/" target="_blank" class="source-link btn-primary">
                <span>Visiter le site</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                  <polyline points="15 3 21 3 21 9"></polyline>
                  <line x1="10" y1="14" x2="21" y2="3"></line>
                </svg>
              </a>
            </div>
          </div>

          <div class="source-card">
            <div class="source-image">
              <img src="https://portoimages.duckdns.org/lesnumeriques.jpg" alt="Les Numériques" class="source-logo">
            </div>
            <div class="source-info">
              <h3 class="source-title">Les Numériques</h3>
              <p class="source-description">Tests, actualités et guides d'achat produits high-tech</p>
              <a href="https://www.lesnumeriques.com/" target="_blank" class="source-link btn-primary">
                <span>Visiter le site</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                  <polyline points="15 3 21 3 21 9"></polyline>
                  <line x1="10" y1="14" x2="21" y2="3"></line>
                </svg>
              </a>
            </div>
          </div>

          <!-- Sources YouTube -->
          <div class="source-card youtube-card">
            <div class="source-image">
              <img src="https://portoimages.duckdns.org/underscore.jpg" alt="Underscore" class="source-logo">
              <span class="source-badge">YouTube</span>
            </div>
            <div class="source-info">
              <h3 class="source-title">Underscore</h3>
              <p class="source-description">Chaîne YouTube sur l'actualité tech et les innovations</p>
              <a href="https://www.youtube.com/@Underscore_" target="_blank" class="source-link btn-primary">
                <span>Voir la chaîne</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                  <polyline points="15 3 21 3 21 9"></polyline>
                  <line x1="10" y1="14" x2="21" y2="3"></line>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Séparateur visuel -->
    <div class="section-separator"></div>

    <!-- Section articles et ressources -->
    <section class="profile-section resources-section">
      <div class="section-header">
        <h2 class="section-title">Ressources et Articles</h2>
      </div>
      <div class="section-content">
        <div class="resources-list">
          <div class="resource-card" v-for="(article, index) in articles" :key="`article-${index}`">
            <div class="resource-type" :class="{ 'video-type': article.type === 'video' }">
              <svg v-if="article.type === 'video'" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <polygon points="23 7 16 12 23 17 23 7"></polygon>
                <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
              </svg>
              <svg v-else xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
                <line x1="16" y1="13" x2="8" y2="13"></line>
                <line x1="16" y1="17" x2="8" y2="17"></line>
                <polyline points="10 9 9 9 8 9"></polyline>
              </svg>
              {{ article.type === 'video' ? 'Vidéo' : 'Article' }}
            </div>
            <a :href="article.url" target="_blank" class="resource-title">{{ article.title }}</a>
            <div class="resource-meta">
              <span class="resource-source">{{ article.source }}</span>
              <span class="resource-date">{{ article.date }}</span>
              <span class="resource-category">{{ article.category }}</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Séparateur visuel -->
    <div class="section-separator"></div>

    <!-- Section méthode de veille -->
    <section class="profile-section method-section">
      <div class="section-header">
        <h2 class="section-title">Ma méthode de veille</h2>
      </div>
      <div class="section-content">
        <div class="method-card">
          <p>Pour rester à jour sur ces sujets, j'utilise plusieurs méthodes complémentaires :</p>
          <ul class="method-list">
            <li>
              <span class="method-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 11a9 9 0 0 1 9 9"></path>
                  <path d="M4 4a16 16 0 0 1 16 16"></path>
                  <circle cx="5" cy="19" r="1"></circle>
                </svg>
              </span>
              <span class="method-text">Suivi quotidien des sources spécialisées via des flux RSS</span>
            </li>
            <li>
              <span class="method-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
              </span>
              <span class="method-text">Veille sur les réseaux sociaux professionnels et techniques</span>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';

// Liste des articles (existante)
const articles = ref([
  {
    title: "L'IA est en train de s'empoisonner elle-même (et personne n'en parle)",
    url: "https://www.youtube.com/watch?v=AfgAEIK9F8c",
    source: "Underscore",
    date: "26/04/2023",
    type: "video",
    category: "Intelligence Artificielle"
  },
  {
    title: "L'IA open source peut-elle tuer ChatGPT ? (interview Mistral AI)",
    url: "https://www.youtube.com/watch?v=bzs0wFP_6ck",
    source: "Underscore",
    date: "13/12/2023",
    type: "video",
    category: "Intelligence Artificielle"
  },
  {
    title: "Pourquoi Nvidia ne peut pas créer son propre processeur x86 comme ceux d'AMD et Intel",
    url: "https://www.frandroid.com/marques/nvidia/2463814_pourquoi-nvidia-ne-peut-pas-concevoir-un-processeur-x86-comme-ceux-damd-et-intel",
    source: "Frandroid",
    date: "25/02/2024",
    type: "article",
    category: "Innovations Technologiques"
  }
]);

// Nouvelles variables pour l'animation
const animatedElements = ref([]);
const observer = ref(null);

// Fonction pour gérer l'animation des éléments au défilement
const setupScrollAnimation = () => {
  // Options pour l'Intersection Observer
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1  // Déclenche lorsque 10% de l'élément est visible
  };

  // Créer l'observer
  observer.value = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Ajouter la classe d'animation lorsque l'élément est visible
        entry.target.classList.add('animate-in');
        // Arrêter d'observer une fois animé
        observer.value.unobserve(entry.target);
      }
    });
  }, options);

  // Sélectionner les éléments à animer
  animatedElements.value = document.querySelectorAll('.topic-card, .source-card, .resource-card, .method-list li');

  // Observer chaque élément
  animatedElements.value.forEach(el => {
    el.classList.add('pre-animation');
    observer.value.observe(el);
  });
};

// Configuration des événements de survol pour l'effet 3D
const setupTiltEffect = () => {
  const cards = document.querySelectorAll('.topic-card, .source-card');

  cards.forEach(card => {
    card.addEventListener('mousemove', handleTilt);
    card.addEventListener('mouseleave', resetTilt);
  });
};

// Fonction pour gérer l'effet d'inclinaison
const handleTilt = (e) => {
  const card = e.currentTarget;
  const rect = card.getBoundingClientRect();
  const x = e.clientX - rect.left; // Position X de la souris dans la carte
  const y = e.clientY - rect.top;  // Position Y de la souris dans la carte

  // Calculer l'inclinaison en fonction de la position de la souris
  const centerX = rect.width / 2;
  const centerY = rect.height / 2;

  const tiltX = ((y - centerY) / centerY) * 5; // Rotation sur l'axe X
  const tiltY = ((centerX - x) / centerX) * 5; // Rotation sur l'axe Y

  // Appliquer la transformation
  card.style.transform = `perspective(1000px) rotateX(${tiltX}deg) rotateY(${tiltY}deg) scale3d(1.02, 1.02, 1.02)`;
  card.style.zIndex = "1";

  // Effet de surbrillance
  const glareX = ((x / rect.width) * 100);
  const glareY = ((y / rect.height) * 100);
  card.style.backgroundImage = `radial-gradient(circle at ${glareX}% ${glareY}%, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 60%)`;
};

// Fonction pour réinitialiser l'inclinaison
const resetTilt = (e) => {
  const card = e.currentTarget;
  card.style.transform = '';
  card.style.zIndex = "";
  card.style.backgroundImage = '';
};

// Configuration au montage du composant
onMounted(() => {
  // Laisser le temps au DOM de se mettre à jour
  setTimeout(() => {
    setupScrollAnimation();
    setupTiltEffect();
  }, 200);
});

// Nettoyage lors du démontage
onBeforeUnmount(() => {
  if (observer.value) {
    observer.value.disconnect();
  }

  // Supprimer les écouteurs d'événements
  const cards = document.querySelectorAll('.topic-card, .source-card');
  cards.forEach(card => {
    card.removeEventListener('mousemove', handleTilt);
    card.removeEventListener('mouseleave', resetTilt);
  });
});
</script>

<style scoped>
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
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.profile-section:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
}

/* En-tête de section */
.section-header {
  padding: 1.5rem;
  background-color: rgba(20, 33, 61, 0.9);
  position: relative;
}

.section-title {
  color: #ffd700;
  font-size: 1.8rem;
  margin: 0;
  letter-spacing: 0.5px;
  position: relative;
  display: inline-block;
  padding-left: 1rem;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
}

.section-title::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 4px;
  background-color: #ffd700;
  border-radius: 4px;
}

.section-content {
  padding: 2rem;
  background-color: rgba(255, 255, 255, 0.08);
}

/* Introduction */
.intro-container {
  display: flex;
  align-items: center;
  gap: 1.5rem;
  background-color: rgba(255, 255, 255, 0.05);
  padding: 1.5rem;
  border-radius: 8px;
}

.intro-icon {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 64px;
  height: 64px;
  background-color: rgba(255, 215, 0, 0.1);
  border-radius: 50%;
  color: #ffd700;
}

.intro-text {
  font-size: 1.2rem;
  color: #e0e0e0;
  margin: 0;
  line-height: 1.5;
}

/* Sujets de veille */
.topics-grid {
  display: grid;
  grid-template-columns: repeat(2, minmax(300px, 450px));
  gap: 1.5rem;
  justify-content: center;
}

@media (max-width: 880px) {
  .topics-grid {
    grid-template-columns: minmax(300px, 600px);
  }
}

.topic-card {
  background-color: rgba(255, 255, 255, 0.05);
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  height: 100%;
}

.topic-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  background-color: rgba(255, 255, 255, 0.08);
}

.card-header {
  padding: 1.25rem;
  background-color: rgba(0, 0, 0, 0.2);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.card-title {
  margin: 0;
  font-size: 1.3rem;
  color: #ffd700;
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
  background-color: #ffd700;
  border-radius: 2px;
}

.card-body {
  padding: 1.5rem;
}

.card-body p {
  color: #e0e0e0;
  line-height: 1.6;
  margin: 0;
}

/* Sources */
.sources-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 1.5rem;
}

.source-card {
  background-color: rgba(255, 255, 255, 0.05);
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  display: flex;
  flex-direction: column;
  height: 100%;
}

.source-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  background-color: rgba(255, 255, 255, 0.08);
}

.source-image {
  position: relative;
  height: 140px;
  overflow: hidden;
  background-color: rgba(0, 0, 0, 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
}

.source-logo {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
  /* Changé de 'cover' à 'contain' pour afficher l'image complète */
  transition: transform 0.3s ease;
}

.source-badge {
  position: absolute;
  top: 10px;
  right: 10px;
  background-color: rgba(255, 0, 0, 0.8);
  color: white;
  font-size: 0.8rem;
  padding: 0.2rem 0.6rem;
  border-radius: 4px;
  font-weight: bold;
}

.source-info {
  padding: 1.5rem;
  flex: 1;
  display: flex;
  flex-direction: column;
}

.source-title {
  font-size: 1.3rem;
  color: #ffd700;
  margin: 0 0 0.75rem 0;
}

.source-description {
  color: #e0e0e0;
  margin-bottom: 1rem;
  line-height: 1.5;
  flex: 1;
}

.source-link {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.6rem 1rem;
  background-color: rgba(255, 215, 0, 0.1);
  color: #ffd700;
  border-radius: 6px;
  text-decoration: none;
  font-weight: 500;
  transition: all 0.3s ease;
  align-self: flex-start;
  margin-top: auto;
}

.source-link:hover {
  background-color: rgba(255, 215, 0, 0.2);
  transform: translateY(-2px);
}

/* Ressources et articles */
.resources-list {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 1rem;
}

.resource-card {
  background-color: rgba(255, 255, 255, 0.05);
  border-radius: 8px;
  padding: 1.25rem;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
}

.resource-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
  background-color: rgba(255, 255, 255, 0.08);
}

.resource-type {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  background-color: rgba(0, 0, 0, 0.2);
  color: #e0e0e0;
  padding: 0.3rem 0.6rem;
  border-radius: 4px;
  font-size: 0.8rem;
  align-self: flex-start;
}

.resource-type.video-type {
  background-color: rgba(255, 0, 0, 0.2);
  color: #ff7675;
}

.resource-title {
  font-size: 1.1rem;
  font-weight: 500;
  color: #ffffff;
  text-decoration: none;
  line-height: 1.4;
  transition: color 0.3s ease;
}

.resource-title:hover {
  color: #ffd700;
}

.resource-meta {
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
  font-size: 0.85rem;
}

.resource-source {
  background-color: rgba(255, 215, 0, 0.1);
  color: #ffd700;
  padding: 0.3rem 0.6rem;
  border-radius: 4px;
}

.resource-date {
  background-color: rgba(255, 255, 255, 0.1);
  color: #e0e0e0;
  padding: 0.3rem 0.6rem;
  border-radius: 4px;
}

.resource-category {
  background-color: rgba(42, 82, 152, 0.2);
  color: #a0c4ff;
  padding: 0.3rem 0.6rem;
  border-radius: 4px;
}

/* Méthode de veille */
.method-card {
  background-color: rgba(255, 255, 255, 0.05);
  border-radius: 8px;
  padding: 1.5rem;
}

.method-card p {
  color: #e0e0e0;
  line-height: 1.6;
  margin-bottom: 1.5rem;
}

.method-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.method-list li {
  display: flex;
  align-items: center;
  gap: 1rem;
  padding: 0.75rem 1rem;
  background-color: rgba(0, 0, 0, 0.1);
  border-radius: 6px;
  transition: transform 0.3s ease, background-color 0.3s ease;
}

.method-list li:hover {
  transform: translateX(5px);
  background-color: rgba(0, 0, 0, 0.2);
}

.method-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 32px;
  height: 32px;
  background-color: rgba(255, 215, 0, 0.1);
  border-radius: 50%;
  color: #ffd700;
}

.method-text {
  font-size: 1rem;
  color: #e0e0e0;
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

/* Bouton primaire */
.btn-primary {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  background-color: #ffd700;
  color: #14213d;
  border: none;
  border-radius: 6px;
  padding: 0.6rem 1rem;
  font-weight: 500;
  text-decoration: none;
  transition: all 0.3s ease;
}

.btn-primary:hover {
  background-color: #ffe55c;
  transform: translateY(-2px);
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

/* Media queries */
@media (max-width: 768px) {
  .intro-container {
    flex-direction: column;
    text-align: center;
  }

  .sources-grid,
  .resources-list {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 576px) {
  .section-content {
    padding: 1.5rem 1rem;
  }

  .section-title {
    font-size: 1.5rem;
  }
}

/* Animations d'apparition des éléments */
.pre-animation {
  opacity: 0;
  transform: translateY(30px);
  transition: none;
}

.animate-in {
  animation: fadeInUp 0.6s ease forwards;
}

/* Animations retardées pour l'effet cascade */
.topic-card:nth-child(2),
.source-card:nth-child(2),
.resource-card:nth-child(2),
.method-list li:nth-child(2) {
  animation-delay: 0.1s;
}

.topic-card:nth-child(3),
.source-card:nth-child(3),
.resource-card:nth-child(3) {
  animation-delay: 0.2s;
}

/* Animation d'apparition */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }

  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Style pour l'effet de survol 3D */
.topic-card,
.source-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease, background-image 0.3s ease;
  transform-style: preserve-3d;
  backface-visibility: hidden;
}
</style>
