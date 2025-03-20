<template>
    <div class="stage-resume">
        <!-- En-tête du projet -->
        <div class="project-header">
            <div class="project-title-container">
                <h2 class="project-title">Zayann</h2>
                <p class="project-subtitle">Développement d'une solution e-commerce pour un primeur local</p>
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
    </div>
</template>

<script setup>
// Pas de logique supplémentaire nécessaire
</script>

<style scoped>
.stage-resume {
    color: #f0f0f0;
    max-width: 1200px;
    margin: 0 auto;
}

/* En-tête du projet */
.project-header {
    display: flex;
    align-items: center;
    margin-bottom: 30px;
    background-color: rgba(255, 255, 255, 0.05);
    border-radius: 10px;
    padding: 20px;
}

.project-title-container {
    flex: 2;
}

.project-title {
    font-size: 2.2rem;
    color: #ffd700;
    margin-bottom: 10px;
}

.project-subtitle {
    font-size: 1.1rem;
    color: #ccc;
}

.project-logo {
    flex: 1;
    display: flex;
    justify-content: center;
    margin-left: 20px;
}

.project-logo img {
    max-width: 150px;
    border-radius: 10px;
}

.project-description {
    margin-bottom: 30px;
    line-height: 1.6;
    background-color: rgba(255, 255, 255, 0.03);
    border-radius: 10px;
    padding: 20px;
}

/* Style de l'accordéon */
.accordion {
    margin-bottom: 30px;
}

.accordion-item {
    background-color: rgba(255, 255, 255, 0.05);
    border: none;
    margin-bottom: 15px;
    border-radius: 10px;
    overflow: hidden;
}

.accordion-button {
    background-color: rgba(255, 255, 255, 0.1);
    color: #fff;
    font-size: 1.2rem;
    padding: 16px 20px;
    font-weight: 500;
}

.accordion-button:not(.collapsed) {
    background-color: rgba(255, 215, 0, 0.1);
    color: #ffd700;
}

.accordion-button:focus {
    box-shadow: none;
    border-color: rgba(255, 215, 0, 0.2);
}

.accordion-button::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.accordion-button:not(.collapsed)::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffd700'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.year-badge {
    display: inline-block;
    background-color: #ffd700;
    color: #000;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    text-align: center;
    line-height: 25px;
    margin-right: 10px;
    font-weight: bold;
}

.accordion-body {
    background-color: rgba(0, 0, 0, 0.2);
    padding: 25px;
}

/* Sections de contenu */
.stage-section {
    margin-bottom: 35px;
}

.section-title {
    font-size: 1.5rem;
    color: #ffd700;
    margin-bottom: 15px;
    border-bottom: 1px solid rgba(255, 215, 0, 0.2);
    padding-bottom: 10px;
}

.problems-list {
    list-style-type: none;
    padding-left: 0;
}

.problems-list li {
    margin-bottom: 10px;
    padding-left: 25px;
    position: relative;
}

.problems-list li::before {
    content: "!";
    position: absolute;
    left: 0;
    top: 0;
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
    margin-bottom: 25px;
    background-color: rgba(255, 255, 255, 0.03);
    border-radius: 8px;
    padding: 20px;
}

.task-title {
    font-size: 1.2rem;
    color: #ccc;
    margin-bottom: 15px;
}

.task-description {
    margin-bottom: 15px;
    color: #aaa;
    font-style: italic;
}

.image-gallery {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    margin-top: 15px;
}

.gallery-item {
    flex: 1 1 300px;
    border-radius: 8px;
    overflow: hidden;
    background-color: rgba(0, 0, 0, 0.2);
    position: relative;
}

.gallery-item img {
    width: 100%;
    border-radius: 6px;
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
    font-size: 0.9rem;
    color: #999;
    text-align: center;
    padding: 8px 5px;
    margin: 0;
}

/* Technologies */
.tech-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.tech-badge {
    display: inline-block;
    background-color: rgba(255, 215, 0, 0.1);
    color: #ffd700;
    border: 1px solid rgba(255, 215, 0, 0.3);
    border-radius: 20px;
    padding: 5px 12px;
    font-size: 0.9rem;
}

/* Responsive design */
@media (max-width: 768px) {
    .project-header {
        flex-direction: column;
        text-align: center;
    }

    .project-logo {
        margin-left: 0;
        margin-top: 20px;
    }

    .gallery-item,
    .gallery-item-large,
    .gallery-item-xl {
        flex: 1 1 100%;
    }
}
</style>