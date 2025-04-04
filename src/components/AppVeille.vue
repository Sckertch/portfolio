<template>
  <div class="veille-container">
    <h1 class="veille-title">Veille Technologique</h1>

    <div class="veille-section">
      <h2>Sujets de Veille</h2>

      <div class="topic-card">
        <div class="topic-header">
          <h3>Intelligence Artificielle</h3>
          <div class="topic-icon">
            <font-awesome-icon icon="robot" />
          </div>
        </div>
        <div class="topic-content">
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
        <div class="topic-header">
          <h3>Innovations Technologiques</h3>
          <div class="topic-icon">
            <font-awesome-icon icon="microchip" />
          </div>
        </div>
        <div class="topic-content">
          <p>
            Je suis attentivement les dernières innovations technologiques dans le domaine
            du matériel informatique, des objets connectés et des nouvelles interfaces utilisateur.
            Cette veille me permet de rester informé sur les tendances émergentes et
            d'anticiper leur impact sur le développement d'applications.
          </p>
        </div>
      </div>
    </div>

    <div class="veille-section">
      <h2>Mes Sources</h2>
      <div class="sources-container">
        <div class="source-category">
          <h3>Sources Web</h3>
          <div class="sources-list">
            <div class="source-card">
              <img src="https://portoimages.duckdns.org/frandroid.jpg" alt="Frandroid" class="source-logo">
              <div class="source-info">
                <h4>Frandroid</h4>
                <p>Actualités et tests sur les smartphones, applications et objets connectés</p>
                <a href="https://www.frandroid.com/" target="_blank" class="source-link">Visiter le site</a>
              </div>
            </div>

            <div class="source-card">
              <img src="https://portoimages.duckdns.org/lesnumeriques.jpg" alt="Les Numériques" class="source-logo">
              <div class="source-info">
                <h4>Les Numériques</h4>
                <p>Tests, actualités et guides d'achat produits high-tech</p>
                <a href="https://www.lesnumeriques.com/" target="_blank" class="source-link">Visiter le site</a>
              </div>
            </div>
          </div>
        </div>

        <div class="source-category">
          <h3>Sources YouTube</h3>
          <div class="sources-list">
            <div class="source-card">
              <img src="https://portoimages.duckdns.org/underscore.jpg" alt="Underscore" class="source-logo">
              <div class="source-info">
                <h4>Underscore</h4>
                <p>Chaîne YouTube sur l'actualité tech et les innovations</p>
                <a href="https://www.youtube.com/@Underscore_" target="_blank" class="source-link">Voir la chaîne</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="veille-section">
      <h2>Ressources et Articles</h2>
      <div class="resources-container">
        <div class="resources-list">
          <div class="resource-item" v-for="(article, index) in articles" :key="`article-${index}`">
            <div class="resource-icon">
              <font-awesome-icon :icon="article.type === 'video' ? 'video' : 'newspaper'" />
            </div>
            <div class="resource-content">
              <a :href="article.url" target="_blank" class="resource-title">{{ article.title }}</a>
              <div class="resource-meta">
                <span class="resource-source">{{ article.source }}</span>
                <span class="resource-date">{{ article.date }}</span>
                <span class="resource-type">{{ article.type === 'video' ? 'Vidéo' : 'Article' }}</span>
                <span class="resource-category">{{ article.category }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="veille-section">
      <h2>Ma méthode de veille</h2>
      <div class="method-card">
        <p>
          Pour rester à jour sur ces sujets, j'utilise plusieurs méthodes complémentaires :
        </p>
        <ul>
          <li>Suivi quotidien des sources spécialisées via des flux RSS</li>
          <li>Alertes Google sur des mots-clés spécifiques</li>
          <li>Participation à des webinaires et événements virtuels</li>
          <li>Inscription aux newsletters des sites spécialisés</li>
          <li>Veille sur les réseaux sociaux professionnels et techniques</li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'

// Liste unifiée des articles et vidéos
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
])

// Supprimé les variables distinctes articlesIA et articlesInnovations
</script>

<style scoped>
.veille-container {
  font-family: 'Roboto', sans-serif;
  color: #333;
  max-width: 1200px;
  margin: 0 auto;
  padding: 60px 20px;
  background-color: rgba(255, 255, 255, 0.3);
  /* Fond plus transparent */
}

/* Ajustements pour les sections spécifiques */
.veille-section {
  margin-bottom: 60px;
  background-color: rgba(255, 255, 255, 0.4);
  /* Plus transparent */
  border-radius: 15px;
  padding: 30px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  /* Ombre plus légère */
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.veille-section:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  /* Ombre plus légère au survol */
}

/* Style de bannière noire pour les h2 */
.veille-section h2 {
  font-size: 2rem;
  color: #fff;
  /* Texte blanc au lieu de #333 */
  margin-bottom: 25px;
  padding: 12px 20px;
  /* Padding pour créer l'effet de bannière */
  background-color: rgba(0, 0, 0, 0.8);
  /* Fond noir avec légère transparence */
  border-radius: 8px;
  /* Coins arrondis */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  /* Ombre pour effet de profondeur */
  border-bottom: 2px solid rgba(255, 215, 0, 0.5);
  /* Bordure dorée plus visible */
  text-transform: uppercase;
  /* Option : mettre en majuscules pour plus d'impact */
  letter-spacing: 1px;
  /* Espacement des lettres pour meilleure lisibilité */
}

/* Optionnel : ajouter un effet au survol pour les bannières h2 */
.veille-section:hover h2 {
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
  background-color: rgba(0, 0, 0, 0.9);
}

.veille-title {
  text-align: center;
  font-size: 3rem;
  margin-bottom: 3rem;
  color: #333;
  position: relative;
}

h3 {
  font-size: 1.5rem;
  color: #333;
  margin-bottom: 15px;
}

h4 {
  font-size: 1.3rem;
  color: #333;
  margin-bottom: 15px;
}

p {
  font-size: 1.1rem;
  line-height: 1.6;
  margin-bottom: 15px;
  text-align: justify;
  color: #333;
}

ul {
  padding-left: 20px;
  margin-bottom: 20px;
}

li {
  font-size: 1.1rem;
  line-height: 1.6;
  margin-bottom: 8px;
  color: #333;
}

.sources-container {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: space-between;
}

.source-category {
  flex: 1;
  min-width: 300px;
}

.source-card {
  background-color: rgba(255, 255, 255, 0.7);
  /* Fond blanc plus léger */
  border-radius: 10px;
  padding: 20px;
  margin-bottom: 20px;
  transition: transform 0.3s ease, background-color 0.3s ease;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  display: flex;
  overflow: hidden;
}

.source-card:hover {
  transform: translateY(-10px);
  background-color: rgba(255, 255, 255, 0.15);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
}

.source-logo {
  width: 120px;
  height: 120px;
  object-fit: cover;
}

.source-info {
  padding: 1rem;
  flex: 1;
}

.source-info h4 {
  margin-top: 0;
  font-size: 1.2rem;
  color: #333;
}

.source-info p {
  font-size: 1rem;
  margin-bottom: 1rem;
}

.source-link {
  display: inline-block;
  background: #42b883;
  color: white;
  padding: 0.6rem 1.2rem;
  border-radius: 4px;
  text-decoration: none;
  font-size: 0.95rem;
  transition: background 0.3s ease;
}

.source-link:hover {
  background: #3aa876;
}

.topic-card {
  background-color: rgba(255, 255, 255, 0.7);
  /* Fond blanc plus léger */
  border-radius: 10px;
  padding: 20px;
  margin-bottom: 30px;
  transition: transform 0.3s ease, background-color 0.3s ease;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.topic-card:hover {
  transform: translateY(-10px);
  background-color: rgba(255, 255, 255, 0.15);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
}

.topic-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #e9ecef;
  padding: 0.2rem 0.5rem;
  border-radius: 4px;
}

.method-card {
  background: #f8f9fa;
  border-radius: 8px;
  padding: 1.5rem;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
}

.method-card p {
  margin-top: 0;
}

.method-card ul {
  padding-left: 1.5rem;
}

.method-card li {
  margin-bottom: 0.5rem;
}

@media (max-width: 768px) {
  .sources-container {
    flex-direction: column;
  }

  .source-category {
    width: 100%;
  }

  .source-card {
    flex-direction: column;
  }

  .source-logo {
    width: 100%;
    height: 160px;
  }

  .veille-container {
    padding: 1rem;
  }
}

/* Styles pour la section des ressources */
.resources-container {
  padding: 10px;
}

.resources-list {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.resource-item {
  display: flex;
  align-items: center;
  background-color: rgba(255, 255, 255, 0.7);
  border-radius: 8px;
  padding: 15px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
}

.resource-item:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
}

.resource-icon {
  font-size: 1.5rem;
  color: #42b883;
  margin-right: 15px;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  background-color: rgba(66, 184, 131, 0.1);
  border-radius: 50%;
}

.resource-content {
  flex: 1;
}

.resource-title {
  display: block;
  font-size: 1.1rem;
  font-weight: 500;
  color: #333;
  margin-bottom: 8px;
  text-decoration: none;
  transition: color 0.3s ease;
}

.resource-title:hover {
  color: #42b883;
}

.resource-meta {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  font-size: 0.9rem;
  color: #666;
}

.resource-source,
.resource-date,
.resource-type {
  background-color: #eee;
  padding: 3px 8px;
  border-radius: 4px;
}

.resource-source {
  color: #2c3e50;
  font-weight: 500;
}

.resource-type {
  background-color: #42b883;
  color: white;
}

.resource-category {
  background-color: #3aa876;
  color: white;
  padding: 3px 8px;
  border-radius: 4px;
  font-size: 0.8rem;
  margin-left: 5px;
}

/* Responsive pour la section des ressources */
@media (max-width: 768px) {
  .resource-item {
    flex-direction: column;
    align-items: flex-start;
  }

  .resource-icon {
    margin-bottom: 10px;
  }

  .resource-meta {
    margin-top: 10px;
  }
}
</style>
