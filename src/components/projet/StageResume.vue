<template>
    <div class="stage-resume">
        <!-- En-tête du projet -->
        <div class="project-header">
            <div class="project-title-container">
                <h2 class="project-title">Zayann</h2>
                <p class="project-subtitle">Développement d'une solution e-commerce pour un primeur local</p>
                <a href="https://www.zayann.boutique/" target="_blank" rel="noopener noreferrer"
                    class="project-site-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                        <polyline points="15 3 21 3 21 9"></polyline>
                        <line x1="10" y1="14" x2="21" y2="3"></line>
                    </svg>
                    Visiter www.zayann.boutique
                </a>
            </div>
            <div class="project-logo">
                <img src="../../assets/img/stage1/zayann.png" alt="Logo Zayann" class="img-fluid">
            </div>
        </div>

        <div class="project-description">
            <p>
                Zayann est un primeur de fruits et légumes implanté à Sonis aux Abymes qui propose également des
                produits locaux
                tels que des épices, des jus locaux et du conditionnement de produits frais en barquette ou en panier.
            </p>
            <p>
                Mon entreprise avait pour mission de développer la présence en ligne de Zayann en proposant un click &
                collect
                et un service d'abonnement.
            </p>
        </div>

        <!-- Accordéon des années de stage -->
        <div class="accordion" id="stageAccordion">
            <!-- Première année -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFirstYear" aria-expanded="false" aria-controls="collapseFirstYear">
                        <span class="year-badge">1</span>Stage de première année
                    </button>
                </h2>
                <div id="collapseFirstYear" class="accordion-collapse collapse" data-bs-parent="#stageAccordion">
                    <div class="accordion-body">
                        <div class="stage-section">
                            <h3 class="section-title">Contexte initial</h3>
                            <p>
                                À mon arrivée à Segesia, Zayann disposait d'une caisse enregistreuse capable de gérer le
                                stock,
                                les transactions et le click & collect (services proposées par MAESTRO).
                            </p>
                        </div>

                        <div class="stage-section">
                            <h3 class="section-title">Problématiques rencontrées</h3>
                            <ul class="problems-list">
                                <li>Déstockage et mise à jour du stock lors de la confection de paniers car MAESTRO ne
                                    le permettait pas.</li>
                                <li>Le déstockage nécessite une transaction financière posant problème pour la
                                    confection des paniers. Les fruits devaient donc être comptabilisés comme offerts
                                    sur la caisse MAESTRO, faussant la marge brute.</li>
                                <li>La caisse ne permet pas d'avoir un suivi ou un compte-rendu des produits prélevés
                                    par x employés dans la confection des paniers.</li>
                                <li>Le site click & collect généré automatiquement par "Maestro" ne permet pas de gérer
                                    le design du site, et les abonnements récurrents que le client souhaite mettre en
                                    place.</li>
                            </ul>
                        </div>

                        <div class="stage-section">
                            <h3 class="section-title">Tâches réalisées</h3>

                            <div class="task-group">
                                <h4 class="task-title">Conception des maquettes</h4>
                                <div class="image-gallery">
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage1/moqups1.png" alt="Maquette 1"
                                            class="img-fluid">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage1/moqups2.png" alt="Maquette 2"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="task-group">
                                <h4 class="task-title">Organisation et gestion des tâches via Trello</h4>
                                <div class="image-gallery">
                                    <div class="gallery-item gallery-item-large">
                                        <img src="../../assets/img/stage1/trello.png" alt="Trello board"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="task-group">
                                <h4 class="task-title">Étude de la documentation API MAESTRO</h4>
                                <div class="image-gallery">
                                    <div class="gallery-item gallery-item-large">
                                        <img src="../../assets/img/stage1/api-maestro.png" alt="API MAESTRO"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="task-group">
                                <h4 class="task-title">Interface administrateur MAESTRO</h4>
                                <div class="image-gallery">
                                    <div class="gallery-item gallery-item-large">
                                        <img src="../../assets/img/stage1/maestro.png" alt="Interface MAESTRO"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="stage-section">
                            <h3 class="section-title">Développement PHP réalisé</h3>

                            <div class="task-group">
                                <h4 class="task-title">Récupération d'un produit</h4>
                                <div class="image-gallery code-gallery">
                                    <div class="gallery-item gallery-item-large">
                                        <img src="../../assets/img/stage1/code/product2.png"
                                            alt="Code récupération produit" class="img-fluid">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage1/code/debug2.png"
                                            alt="Debug récupération produit" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="task-group">
                                <h4 class="task-title">Récupération de tous les produits</h4>
                                <div class="image-gallery code-gallery">
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage1/code/debug4.png" alt="Debug liste produits"
                                            class="img-fluid">
                                    </div>
                                    <div class="gallery-item gallery-item-large">
                                        <img src="../../assets/img/stage1/code/listing1.png" alt="Code liste produits"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="task-group">
                                <h4 class="task-title">Conteneur d'injection de dépendance</h4>
                                <div class="image-gallery code-gallery">
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage1/code/container.png"
                                            alt="Conteneur d'injection" class="img-fluid">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage1/code/app.png" alt="Application"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="task-group">
                                <h4 class="task-title">Mise en place d'un routing</h4>
                                <div class="image-gallery code-gallery">
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage1/code/routing1.png" alt="Routing 1"
                                            class="img-fluid">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage1/code/routing2.png" alt="Routing 2"
                                            class="img-fluid">
                                    </div>
                                    <div class="gallery-item gallery-item-xl">
                                        <img src="../../assets/img/stage1/code/routing3.png" alt="Routing 3"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="task-group">
                                <h4 class="task-title">Récupération des remises et test</h4>
                                <div class="image-gallery code-gallery">
                                    <div class="gallery-item gallery-item-large">
                                        <img src="../../assets/img/stage1/code/remise.png" alt="Code remises"
                                            class="img-fluid">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage1/code/remise2.png" alt="Test remises"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="stage-section">
                            <h3 class="section-title">Technologies utilisées</h3>
                            <div class="tech-badges">
                                <span class="tech-badge">Postman</span>
                                <span class="tech-badge">Talend</span>
                                <span class="tech-badge">GitLab</span>
                                <span class="tech-badge">VSCode</span>
                                <span class="tech-badge">Trello</span>
                                <span class="tech-badge">Moqups</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Deuxième année -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSecondYear" aria-expanded="false" aria-controls="collapseSecondYear">
                        <span class="year-badge">2</span>Stage de deuxième année
                    </button>
                </h2>
                <div id="collapseSecondYear" class="accordion-collapse collapse" data-bs-parent="#stageAccordion">
                    <div class="accordion-body">
                        <div class="stage-section">
                            <h3 class="section-title">Contexte de la deuxième année</h3>
                            <p>
                                À mon retour dans l'entreprise, le site de Zayann avait été lancé dans sa version 1.
                                Cependant, il fallait répondre aux nouvelles demandes du client, comme l'ajout de
                                fonctionnalités
                                ou l'optimisation de fonctionnalités existantes afin de les intégrer à la version 1.1 du
                                site.
                            </p>
                            <p>
                                Trello a également été remplacé par OpenProject pour une meilleure gestion du projet.
                            </p>
                            <div class="image-gallery">
                                <div class="gallery-item gallery-item-large">
                                    <img src="../../assets/img/stage2/openproject/openproject.png" alt="OpenProject 1"
                                        class="img-fluid">
                                </div>
                                <div class="gallery-item gallery-item-large">
                                    <img src="../../assets/img/stage2/openproject/openproject2.png" alt="OpenProject 2"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="stage-section">
                            <h3 class="section-title">Missions réalisées</h3>

                            <div class="task-group">
                                <h4 class="task-title">Configuration Apache pour test local</h4>
                                <div class="image-gallery">
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage2/config/configdns.png" alt="Configuration DNS"
                                            class="img-fluid">
                                        <p class="image-caption">Configuration DNS</p>
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage2/config/vhost.png" alt="Virtual Host"
                                            class="img-fluid">
                                        <p class="image-caption">Configuration VHost</p>
                                    </div>
                                </div>
                            </div>

                            <div class="task-group">
                                <h4 class="task-title">Implémentation de la recherche</h4>
                                <p class="task-description">Développement d'une fonctionnalité de recherche performante
                                    pour les produits</p>
                                <div class="image-gallery code-gallery">
                                    <div class="gallery-item gallery-item-large">
                                        <img src="../../assets/img/stage2/openproject/recherche.png"
                                            alt="Tâche OpenProject" class="img-fluid">
                                        <p class="image-caption">Suivi de la tâche dans OpenProject</p>
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage2/code/recherche.png" alt="Code recherche 1"
                                            class="img-fluid">
                                        <p class="image-caption">Code PHP implémentant la recherche</p>
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage2/code/recherche2.png" alt="Code recherche 2"
                                            class="img-fluid">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage2/code/recherche3.png" alt="Code recherche 3"
                                            class="img-fluid">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage2/code/recherche5.png" alt="Code recherche 5"
                                            class="img-fluid">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage2/code/recherche4.png" alt="Code recherche 4"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="task-group">
                                <h4 class="task-title">Service d'envoi de SMS</h4>
                                <p class="task-description">Mise en place d'un système de notifications par SMS pour les
                                    commandes</p>
                                <div class="image-gallery code-gallery">
                                    <div class="gallery-item gallery-item-large">
                                        <img src="../../assets/img/stage2/openproject/sms.png" alt="Tâche SMS"
                                            class="img-fluid">
                                        <p class="image-caption">Suivi de la tâche dans OpenProject</p>
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/smsgit.png" alt="SMS Git" class="img-fluid">
                                        <p class="image-caption">Gestion Git du développement</p>
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/smsapp.png" alt="App SMS" class="img-fluid">
                                    </div>
                                    <div class="gallery-item gallery-item-large">
                                        <img src="../../assets/img/stage2/code/sms.png" alt="Code SMS"
                                            class="img-fluid">
                                        <p class="image-caption">Implémentation du service SMS</p>
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/smsdoc.png" alt="Documentation SMS"
                                            class="img-fluid">
                                        <p class="image-caption">Documentation du service</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Autres fonctionnalités -->
                            <div class="task-group">
                                <h4 class="task-title">Gestion de jetons d'authentification</h4>
                                <div class="image-gallery code-gallery">
                                    <div class="gallery-item gallery-item-large">
                                        <img src="../../assets/img/stage2/openproject/token.png" alt="Tâche Token"
                                            class="img-fluid">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/token2.png" alt="Token 2" class="img-fluid">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage2/code/tokeng.png" alt="Token génération"
                                            class="img-fluid">
                                        <p class="image-caption">Génération de token</p>
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage2/code/tokenv.png" alt="Token vérification"
                                            class="img-fluid">
                                        <p class="image-caption">Vérification de token</p>
                                    </div>
                                </div>
                            </div>

                            <div class="task-group">
                                <h4 class="task-title">Upload d'images</h4>
                                <div class="image-gallery code-gallery">
                                    <div class="gallery-item gallery-item-large">
                                        <img src="../../assets/img/stage2/openproject/upload.png" alt="Tâche Upload"
                                            class="img-fluid">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage2/code/uploadphp1.png" alt="Upload PHP 1"
                                            class="img-fluid">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage2/code/uploadphp2.png" alt="Upload PHP 2"
                                            class="img-fluid">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage2/code/uploadvue1.png" alt="Upload Vue 1"
                                            class="img-fluid">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/stage2/code/uploadvue2.png" alt="Upload Vue 2"
                                            class="img-fluid">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/uploadex.png" alt="Exemple d'upload"
                                            class="img-fluid">
                                        <p class="image-caption">Résultat final de l'upload</p>
                                    </div>
                                </div>
                            </div>

                            <div class="task-group">
                                <h4 class="task-title">Mise en production</h4>
                                <div class="image-gallery">
                                    <div class="gallery-item">
                                        <img src="../../assets/img/dm1.png" alt="Mise en production 1"
                                            class="img-fluid">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="../../assets/img/dm3.png" alt="Mise en production 3"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="stage-section">
                            <h3 class="section-title">Technologies utilisées</h3>
                            <div class="tech-badges">
                                <span class="tech-badge">Postman</span>
                                <span class="tech-badge">Talend</span>
                                <span class="tech-badge">GitLab</span>
                                <span class="tech-badge">VSCode</span>
                                <span class="tech-badge">OpenProject</span>
                                <span class="tech-badge">Vue.js</span>
                                <span class="tech-badge">PHP</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal global pour les images zoomées -->
        <div v-if="modalOpen" class="global-modal" @click="closeGlobalModal">
            <div class="global-modal-content" @click.stop>
                <img :src="currentModalImage" alt="Image agrandie" class="global-modal-image">
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

<script setup>
import { onMounted, ref } from 'vue';

// Variables pour le modal d'image
const modalOpen = ref(false);
const currentModalImage = ref('');

// Fonction pour ouvrir le modal avec une image
const openGlobalModal = (imageUrl) => {
    currentModalImage.value = imageUrl;
    modalOpen.value = true;
    // Désactiver le défilement du body
    document.body.style.overflow = 'hidden';
};

// Fonction pour fermer le modal
const closeGlobalModal = () => {
    modalOpen.value = false;
    // Réactiver le défilement du body
    document.body.style.overflow = '';
};

// Amélioration du chargement de Bootstrap
onMounted(() => {
    // Vérifier si une balise script pour Bootstrap existe déjà
    const existingScript = document.querySelector('script[src*="bootstrap.bundle.min.js"]');

    if (!existingScript) {
        // Créer et ajouter le script Bootstrap
        const script = document.createElement('script');
        script.src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js';
        script.integrity = 'sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz';
        script.crossOrigin = 'anonymous';
        document.head.appendChild(script);

        // Initialiser l'accordéon une fois le script chargé
        script.onload = () => {
            setTimeout(() => {
                // Ouvrir le premier panneau par défaut si Bootstrap est chargé
                if (window.bootstrap) {
                    const firstCollapse = document.getElementById('collapseFirstYear');
                    if (firstCollapse) {
                        new bootstrap.Collapse(firstCollapse, { toggle: true });
                    }
                }
            }, 300);
        };
    }

    // Ajouter des écouteurs de clic sur toutes les images de la galerie
    const galleryImages = document.querySelectorAll('.gallery-item img');
    galleryImages.forEach(img => {
        img.addEventListener('click', () => {
            openGlobalModal(img.src);
        });
        // Ajouter un style de curseur pour indiquer que l'image est cliquable
        img.style.cursor = 'pointer';

        // Créer et ajouter l'overlay et l'icône de zoom à chaque image
        const galleryItem = img.closest('.gallery-item');
        if (galleryItem) {
            // Vérifier si l'overlay existe déjà
            if (!galleryItem.querySelector('.image-overlay')) {
                // Créer l'overlay
                const overlay = document.createElement('div');
                overlay.className = 'image-overlay';

                // Créer l'icône de zoom
                const zoomIcon = document.createElement('span');
                zoomIcon.className = 'zoom-icon';
                zoomIcon.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        <line x1="11" y1="8" x2="11" y2="14"></line>
                        <line x1="8" y1="11" x2="14" y2="11"></line>
                    </svg>
                `;

                // Ajouter l'icône à l'overlay et l'overlay à l'élément parent
                overlay.appendChild(zoomIcon);
                galleryItem.style.position = 'relative';
                galleryItem.appendChild(overlay);
            }
        }
    });
});
</script>

<style scoped>
.stage-resume {
    color: #f0f0f0;
    max-width: 100%;
    height: 100%;
    overflow-y: auto;
    padding: 2rem;
    background-color: rgba(26, 42, 108, 0.2);
}

/* En-tête du projet */
.project-header {
    display: flex;
    align-items: center;
    margin-bottom: 1.5rem;
    background-color: rgba(26, 42, 108, 0.5);
    border-radius: 10px;
    padding: 1.25rem;
}

.project-title-container {
    flex: 2;
}

.project-title {
    font-size: 2rem;
    color: #ffd700;
    margin-bottom: 0.5rem;
}

.project-subtitle {
    font-size: 1rem;
    color: #e0e0e0;
}

.project-logo {
    flex: 1;
    display: flex;
    justify-content: center;
    margin-left: 1.25rem;
}

.project-logo img {
    max-width: 120px;
    border-radius: 8px;
}

.project-description {
    margin-bottom: 1.5rem;
    line-height: 1.6;
    background-color: rgba(255, 255, 255, 0.05);
    border-radius: 10px;
    padding: 1.25rem;
}

/* Style de l'accordéon */
.accordion {
    margin-bottom: 1.5rem;
}

.accordion-item {
    background-color: rgba(255, 255, 255, 0.05);
    border: none;
    margin-bottom: 1rem;
    border-radius: 10px;
    overflow: hidden;
}

.accordion-button {
    background-color: rgba(26, 42, 108, 0.8);
    color: #fff;
    font-size: 1.1rem;
    padding: 1rem 1.5rem;
    font-weight: 500;
}

.accordion-button:not(.collapsed) {
    background-color: rgba(255, 215, 0, 0.15);
    color: #ffd700;
}

.accordion-button:focus {
    box-shadow: none;
    border-color: rgba(255, 215, 0, 0.2);
}

.accordion-body {
    background-color: rgba(0, 0, 0, 0.2);
    padding: 1.5rem;
}

/* Sections de contenu */
.stage-section {
    margin-bottom: 1.5rem;
    background-color: rgba(255, 255, 255, 0.05);
    padding: 1.25rem;
    border-radius: 8px;
    border: 1px solid rgba(255, 215, 0, 0.1);
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
}

.section-title {
    font-size: 1.4rem;
    color: #ffd700;
    margin-bottom: 1rem;
    border-bottom: 1px solid rgba(255, 215, 0, 0.2);
    padding-bottom: 0.5rem;
}

.problems-list {
    list-style-type: none;
    padding-left: 0;
}

.problems-list li {
    margin-bottom: 0.75rem;
    padding-left: 25px;
    position: relative;
    color: #e0e0e0;
}

.problems-list li::before {
    content: "!";
    position: absolute;
    left: 0;
    top: 2px;
    width: 18px;
    height: 18px;
    background-color: rgba(255, 0, 0, 0.2);
    color: #ff5555;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.8rem;
    font-weight: bold;
}

/* Tâches et galeries d'images */
.task-group {
    margin-bottom: 1.25rem;
    background-color: rgba(0, 0, 0, 0.15);
    border-radius: 8px;
    padding: 1.25rem;
}

.task-title {
    font-size: 1.1rem;
    color: #ffd700;
    margin-bottom: 1rem;
}

.task-description {
    margin-bottom: 1rem;
    color: #d0d0d0;
    font-style: italic;
}

.image-gallery {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
    margin-top: 1rem;
}

.gallery-item {
    flex: 1 1 300px;
    border-radius: 8px;
    overflow: hidden;
    background-color: rgba(0, 0, 0, 0.2);
    position: relative;
    transition: transform 0.3s ease;
}

.gallery-item:hover {
    transform: translateY(-5px);
}

.gallery-item img {
    width: 100%;
    border-radius: 4px;
    transition: transform 0.3s ease;
}

.gallery-item:hover img {
    transform: scale(1.02);
}

.gallery-item-large {
    flex: 1 1 400px;
}

.gallery-item-xl {
    flex-basis: 100%;
}

.code-gallery .gallery-item {
    background-color: #1e1e1e;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

.image-caption {
    font-size: 0.85rem;
    color: #b0b0b0;
    text-align: center;
    padding: 0.5rem;
    margin: 0;
}

/* Technologies */
.tech-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.tech-badge {
    display: inline-block;
    background-color: rgba(255, 215, 0, 0.1);
    color: #ffd700;
    border: 1px solid rgba(255, 215, 0, 0.3);
    border-radius: 20px;
    padding: 0.3rem 0.8rem;
    font-size: 0.85rem;
    transition: all 0.3s ease;
}

.tech-badge:hover {
    background-color: rgba(255, 215, 0, 0.2);
    transform: translateY(-2px);
}

/* Styles généraux pour le texte */
p {
    color: #e0e0e0;
    margin-bottom: 0.75rem;
}

/* Scrollbar personnalisée */
.stage-resume::-webkit-scrollbar {
    width: 8px;
}

.stage-resume::-webkit-scrollbar-track {
    background: rgba(0, 0, 0, 0.2);
    border-radius: 4px;
}

.stage-resume::-webkit-scrollbar-thumb {
    background: rgba(255, 215, 0, 0.2);
    border-radius: 4px;
}

.stage-resume::-webkit-scrollbar-thumb:hover {
    background: rgba(255, 215, 0, 0.3);
}

/* Modal global pour les images agrandies */
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

.global-modal-image {
    max-width: 100%;
    max-height: 90vh;
    object-fit: contain;
    border-radius: 8px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
}

.global-modal-close {
    position: absolute;
    top: -20px;
    right: -20px;
    background-color: #ffd700;
    color: #14213d;
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
    background-color: #ffe55c;
}

/* Overlay et icône de zoom pour les images */
.image-overlay {
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
    transition: opacity 0.3s ease;
    z-index: 2;
}

.gallery-item:hover .image-overlay {
    opacity: 1;
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

.gallery-item:hover .zoom-icon {
    transform: scale(1);
}

/* Style pour le lien vers le site du projet */
.project-site-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background-color: rgba(255, 215, 0, 0.1);
    color: #ffd700;
    padding: 0.4rem 0.8rem;
    border-radius: 20px;
    text-decoration: none;
    font-size: 0.9rem;
    margin-top: 0.75rem;
    transition: all 0.3s ease;
}

.project-site-link:hover {
    background-color: rgba(255, 215, 0, 0.2);
    transform: translateY(-2px);
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
}

.project-site-link svg {
    width: 14px;
    height: 14px;
}

/* Animations pour le modal */
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

/* Media queries */
@media (max-width: 768px) {
    .project-header {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .project-logo {
        margin-left: 0;
        margin-top: 1rem;
    }

    .stage-resume {
        padding: 1rem;
    }

    .gallery-item,
    .gallery-item-large,
    .gallery-item-xl {
        flex: 1 1 100%;
    }
}
</style>