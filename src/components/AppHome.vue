<!-- src/views/Home.vue -->
<template>
  <div class="home-container">
    <!-- Section d'accueil avec animation -->
    <section class="hero-section">
      <div class="hero-content">
        <div class="profile-image-container">
          <img src="https://portoimages.duckdns.org/profile.jpg" alt="Photo de profil" class="profile-image">
          <div class="profile-overlay"></div>
        </div>
        <div class="hero-text">
          <h1 class="hero-name">LEDA Mathis</h1>
          <p class="hero-title">Développeur Web Full Stack</p>
          <p class="hero-subtitle">Étudiant en BTS SIO option SLAM</p>
          <div class="hero-actions">
            <a href="#" class="hero-button primary" @click.prevent="navigateTo('profil')">
              <span>Mon profil</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
              </svg>
            </a>
            <a href="#" class="hero-button secondary" @click.prevent="downloadCV">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                <polyline points="7 10 12 15 17 10"></polyline>
                <line x1="12" y1="15" x2="12" y2="3"></line>
              </svg>
              <span>Télécharger mon CV</span>
            </a>
          </div>
        </div>
      </div>
      <div class="scroll-indicator">
        <span>Découvrir</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m6 9 6 6 6-6"></path>
        </svg>
      </div>
    </section>

    <!-- Navigation des sections -->
    <section class="sections-navigation">
      <h2 class="sections-heading">Découvrez mon parcours</h2>

      <div class="sections-grid">
        <div class="section-card" @click="navigateTo('profil')">
          <div class="section-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <h3 class="section-title">Profil</h3>
          <p class="section-description">Découvrez mon parcours, mes centres d'intérêt et mes compétences techniques.
          </p>
          <span class="section-link">Voir mon profil</span>
        </div>

        <div class="section-card" @click="navigateTo('projets')">
          <div class="section-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
            </svg>
          </div>
          <h3 class="section-title">Projets</h3>
          <p class="section-description">Explorez les différents projets sur lesquels j'ai travaillé pendant ma
            formation.</p>
          <span class="section-link">Voir mes projets</span>
        </div>

        <div class="section-card" @click="navigateTo('bts')">
          <div class="section-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
              <path d="M6 12v5c0 2 2 3 6 3s6-1 6-3v-5"></path>
            </svg>
          </div>
          <h3 class="section-title">BTS SIO</h3>
          <p class="section-description">En savoir plus sur ma formation en BTS Services Informatiques aux
            Organisations.</p>
          <span class="section-link">Découvrir la formation</span>
        </div>

        <div class="section-card" @click="navigateTo('veille')">
          <div class="section-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 7 17l-5-5"></path>
              <path d="m22 10-7.5 7.5L13 16"></path>
            </svg>
          </div>
          <h3 class="section-title">Veille technologique</h3>
          <p class="section-description">Découvrez ma démarche de veille technologique et les sujets qui m'intéressent.
          </p>
          <span class="section-link">Explorer ma veille</span>
        </div>
      </div>
    </section>

    <!-- Statistiques clés -->
    <section class="key-stats">
      <div class="stat-card">
        <div class="stat-number">{{ stats.skills }}</div>
        <div class="stat-label">Compétences</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">{{ stats.projects }}</div>
        <div class="stat-label">Projets</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">{{ stats.languages }}</div>
        <div class="stat-label">Technologies</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">{{ stats.experience }}</div>
        <div class="stat-label">Mois d'expérience</div>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { useRouter } from 'vue-router';

const router = useRouter();

// Statistiques (à ajuster selon vos données réelles)
const stats = ref({
  skills: 0,
  projects: 0,
  languages: 0,
  experience: 0
});

// Fonction améliorée pour naviguer vers une section
const navigateTo = (route) => {
  try {
    // Utiliser le chemin de route plutôt que le nom pour plus de fiabilité
    const routePaths = {
      'profil': '/profil',
      'projets': '/projet',
      'bts': '/bts',
      'veille': '/veille'
    };

    const path = routePaths[route] || `/${route}`;
    router.push(path);
  } catch (error) {
    console.error('Erreur de navigation:', error);
    // Méthode de secours - utiliser window.location si le router échoue
    window.location.href = `/#/${route}`;
  }
};

// Fonction pour télécharger le CV
const downloadCV = () => {
  const cvUrl = 'https://portoimages.duckdns.org/cv.pdf';
  const link = document.createElement('a');
  link.href = cvUrl;
  link.target = '_blank';
  link.download = 'CV_LEDA_Mathis.pdf';
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
};

// Animation de comptage pour les statistiques
const animateStats = () => {
  const finalStats = {
    skills: 12,
    projects: 8,
    languages: 6,
    experience: 10
  };

  const duration = 2000; // 2 secondes
  const steps = 50;
  const interval = duration / steps;

  let step = 0;
  const timer = setInterval(() => {
    step++;
    const progress = step / steps;

    stats.value = {
      skills: Math.round(progress * finalStats.skills),
      projects: Math.round(progress * finalStats.projects),
      languages: Math.round(progress * finalStats.languages),
      experience: Math.round(progress * finalStats.experience)
    };

    if (step >= steps) {
      clearInterval(timer);
    }
  }, interval);
};

onMounted(() => {
  // Observer pour déclencher l'animation des stats quand visible
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateStats();
        observer.disconnect();
      }
    });
  }, { threshold: 0.3 });

  const statsSection = document.querySelector('.key-stats');
  if (statsSection) {
    observer.observe(statsSection);
  }
});
</script>

<style scoped>
.home-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0;
}

/* Hero section */
.hero-section {
  height: 100vh;
  min-height: 600px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  position: relative;
  padding: 0 2rem;
}

.hero-content {
  display: flex;
  align-items: center;
  gap: 3rem;
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 16px;
  padding: 3rem;
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
  backdrop-filter: blur(5px);
  animation: fadeIn 1s ease-out;
}

.profile-image-container {
  position: relative;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  overflow: hidden;
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
}

.profile-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.profile-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(135deg, rgba(26, 42, 108, 0.3), rgba(255, 215, 0, 0.2));
  opacity: 0.7;
  transition: opacity 0.5s ease;
}

.profile-image-container:hover .profile-image {
  transform: scale(1.05);
}

.profile-image-container:hover .profile-overlay {
  opacity: 0.4;
}

.hero-text {
  flex: 1;
}

.hero-name {
  font-size: 3rem;
  font-weight: 700;
  margin: 0 0 1rem;
  color: #ffd700;
  text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
  animation: slideInRight 0.8s ease-out;
}

.hero-title {
  font-size: 1.5rem;
  color: #ffffff;
  margin: 0 0 0.5rem;
  animation: slideInRight 0.8s ease-out 0.2s both;
}

.hero-subtitle {
  font-size: 1.2rem;
  color: #e0e0e0;
  margin: 0 0 2rem;
  animation: slideInRight 0.8s ease-out 0.4s both;
}

.hero-actions {
  display: flex;
  gap: 1rem;
  animation: slideInRight 0.8s ease-out 0.6s both;
}

.hero-button {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.8rem 1.5rem;
  border-radius: 8px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
}

.hero-button.primary {
  background-color: #ffd700;
  color: #14213d;
  box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
}

.hero-button.primary:hover {
  background-color: #ffe55c;
  transform: translateY(-3px);
  box-shadow: 0 6px 20px rgba(255, 215, 0, 0.4);
}

.hero-button.secondary {
  background-color: rgba(255, 255, 255, 0.1);
  color: #ffffff;
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.hero-button.secondary:hover {
  background-color: rgba(255, 255, 255, 0.2);
  transform: translateY(-3px);
}

.scroll-indicator {
  position: absolute;
  bottom: 2rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.5rem;
  color: #ffffff;
  animation: bounce 2s infinite;
  cursor: pointer;
}

.scroll-indicator span {
  font-size: 0.9rem;
  letter-spacing: 1px;
}

/* Sections navigation */
.sections-navigation {
  padding: 6rem 2rem;
  background-color: rgba(255, 255, 255, 0.05);
  border-radius: 16px;
  margin: 2rem;
}

.sections-heading {
  text-align: center;
  color: #ffd700;
  font-size: 2rem;
  margin-bottom: 3rem;
  position: relative;
  display: inline-block;
  left: 50%;
  transform: translateX(-50%);
}

.sections-heading::after {
  content: '';
  position: absolute;
  bottom: -10px;
  left: 0;
  width: 100%;
  height: 3px;
  background: linear-gradient(to right, transparent, #ffd700, transparent);
}

.sections-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
}

.section-card {
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 12px;
  padding: 2rem;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}

.section-card:hover {
  transform: translateY(-10px);
  background-color: rgba(255, 255, 255, 0.15);
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
}

.section-icon {
  width: 80px;
  height: 80px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  background-color: rgba(255, 215, 0, 0.1);
  margin-bottom: 1.5rem;
  color: #ffd700;
  transition: all 0.3s ease;
}

.section-card:hover .section-icon {
  background-color: rgba(255, 215, 0, 0.2);
  transform: scale(1.1);
}

.section-title {
  font-size: 1.4rem;
  color: #ffffff;
  margin-bottom: 1rem;
}

.section-description {
  color: #e0e0e0;
  margin-bottom: 1.5rem;
  line-height: 1.6;
  flex-grow: 1;
}

.section-link {
  color: #ffd700;
  font-weight: 600;
  position: relative;
  padding-bottom: 5px;
}

.section-link::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  background-color: #ffd700;
  transition: width 0.3s ease;
}

.section-card:hover .section-link::after {
  width: 100%;
}

/* Statistiques */
.key-stats {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 2rem;
  padding: 2rem;
  margin: 2rem;
  background-color: rgba(255, 255, 255, 0.05);
  border-radius: 16px;
}

.stat-card {
  text-align: center;
  padding: 2rem;
  background-color: rgba(26, 42, 108, 0.3);
  border-radius: 12px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.stat-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.stat-number {
  font-size: 3rem;
  font-weight: 700;
  color: #ffd700;
  margin-bottom: 0.5rem;
}

.stat-label {
  font-size: 1.1rem;
  color: #e0e0e0;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* Animations */
@keyframes fadeIn {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

@keyframes slideInRight {
  from {
    opacity: 0;
    transform: translateX(-20px);
  }

  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes bounce {

  0%,
  20%,
  50%,
  80%,
  100% {
    transform: translateY(0);
  }

  40% {
    transform: translateY(-10px);
  }

  60% {
    transform: translateY(-5px);
  }
}

/* Media queries */
@media (max-width: 992px) {
  .hero-content {
    flex-direction: column;
    gap: 2rem;
    padding: 2rem;
  }

  .hero-text {
    text-align: center;
  }

  .hero-actions {
    justify-content: center;
  }
}

@media (max-width: 768px) {
  .sections-grid {
    grid-template-columns: 1fr;
  }

  .key-stats {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 576px) {
  .hero-section {
    padding: 0 1rem;
  }

  .hero-name {
    font-size: 2rem;
  }

  .hero-title {
    font-size: 1.2rem;
  }

  .hero-subtitle {
    font-size: 1rem;
  }

  .hero-actions {
    flex-direction: column;
  }

  .key-stats {
    grid-template-columns: 1fr;
  }
}
</style>
