<template>
    <div class="bts-container">
        <section class="bts-header">
            <h1>BTS Services Informatiques aux Organisations</h1>
            <div class="bts-intro">
                <img :src="'https://portoimages.duckdns.org/sio.png'" alt="Logo BTS SIO" class="bts-logo">
                <p class="tagline">Formation diplômante de niveau Bac+2 aux métiers de l'informatique</p>
            </div>
        </section>

        <section class="bts-overview">
            <h2>Présentation générale</h2>
            <p>
                Le BTS SIO (Services Informatiques aux Organisations) est une formation sur deux ans qui prépare aux
                métiers de l'informatique d'entreprise. Ce diplôme d'État de niveau Bac+2 permet d'acquérir des
                compétences techniques et managériales pour répondre aux besoins informatiques des organisations.
            </p>
            <p>
                La formation combine enseignements théoriques, projets pratiques et stages en entreprise (10 à 12
                semaines réparties sur les deux années), offrant ainsi une expérience professionnelle concrète avant
                l'entrée sur le marché du travail.
            </p>
        </section>

        <section class="bts-options">
            <h2>Les deux options du BTS SIO</h2>

            <div class="option-card">
                <div class="option-header">
                    <h3>Option SLAM</h3>
                    <span class="option-subtitle">Solutions Logicielles et Applications Métiers</span>
                </div>
                <p>
                    L'option SLAM forme aux métiers du développement d'applications. Les étudiants apprennent à:
                </p>
                <ul>
                    <li>Analyser les besoins des utilisateurs</li>
                    <li>Concevoir des applications</li>
                    <li>Développer des solutions logicielles</li>
                    <li>Maintenir et faire évoluer les applications</li>
                    <li>Gérer des bases de données</li>
                    <li>Assurer la qualité des développements</li>
                </ul>
                <p>
                    <strong>Technologies étudiées :</strong> Java, PHP, JavaScript, HTML/CSS, SQL, UML, frameworks web,
                    méthodologies Agile...
                </p>
            </div>

            <div class="option-card">
                <div class="option-header">
                    <h3>Option SISR</h3>
                    <span class="option-subtitle">Solutions d'Infrastructure, Systèmes et Réseaux</span>
                </div>
                <p>
                    L'option SISR forme aux métiers liés aux infrastructures informatiques. Les étudiants apprennent à:
                </p>
                <ul>
                    <li>Administrer des systèmes et réseaux</li>
                    <li>Gérer l'infrastructure informatique</li>
                    <li>Sécuriser des réseaux et systèmes</li>
                    <li>Assurer la maintenance des équipements</li>
                    <li>Résoudre des incidents</li>
                    <li>Installer et configurer des solutions d'infrastructures</li>
                </ul>
                <p>
                    <strong>Technologies étudiées :</strong> Windows Server, Linux, TCP/IP, routage, pare-feu, cloud
                    computing, virtualisation, VPN...
                </p>
            </div>
        </section>

        <section class="bts-competences">
            <h2>Compétences développées</h2>

            <div class="competences-grid">
                <div class="competence-item">
                    <h4>Compétences techniques</h4>
                    <ul>
                        <li>Programmation et développement</li>
                        <li>Administration de systèmes et réseaux</li>
                        <li>Cybersécurité</li>
                        <li>Bases de données</li>
                        <li>Virtualisation et cloud</li>
                    </ul>
                </div>

                <div class="competence-item">
                    <h4>Compétences méthodologiques</h4>
                    <ul>
                        <li>Gestion de projet</li>
                        <li>Méthodes agiles</li>
                        <li>Documentation technique</li>
                        <li>Tests et validation</li>
                        <li>Veille technologique</li>
                    </ul>
                </div>

                <div class="competence-item">
                    <h4>Compétences transversales</h4>
                    <ul>
                        <li>Communication professionnelle</li>
                        <li>Travail en équipe</li>
                        <li>Anglais technique</li>
                        <li>Analyse et résolution de problèmes</li>
                        <li>Droit et économie</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="bts-debouches">
            <h2>Débouchés professionnels</h2>

            <div class="debouches-container">
                <div class="debouche-card">
                    <h4>Débouchés SLAM</h4>
                    <ul>
                        <li>Développeur d'applications</li>
                        <li>Programmeur analyste</li>
                        <li>Développeur web/mobile</li>
                        <li>Technicien d'études informatiques</li>
                        <li>Intégrateur d'applications</li>
                        <li>Gestionnaire de bases de données</li>
                    </ul>
                </div>

                <div class="debouche-card">
                    <h4>Débouchés SISR</h4>
                    <ul>
                        <li>Administrateur systèmes et réseaux</li>
                        <li>Technicien d'infrastructure</li>
                        <li>Technicien support</li>
                        <li>Technicien sécurité</li>
                        <li>Technicien cloud</li>
                        <li>Gestionnaire de parc informatique</li>
                    </ul>
                </div>

                <div class="debouche-card">
                    <h4>Poursuites d'études</h4>
                    <ul>
                        <li>Licence professionnelle (Bac+3)</li>
                        <li>École d'ingénieur informatique</li>
                        <li>Bachelor informatique</li>
                        <li>Masters spécialisés</li>
                        <li>Formation en alternance</li>
                        <li>Certification professionnelle</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="bts-personal">
            <h2>Mon parcours en BTS SIO</h2>
            <p>
                J'ai choisi la formation BTS SIO, option SLAM, pour approfondir ma passion pour le développement
                d'applications. Attiré par l'informatique depuis mon plus jeune âge, cette formation me permet
                d'acquérir des compétences techniques solides tout en me préparant au monde professionnel.
            </p>
            <p>
                Ce que j'apprécie particulièrement dans cette formation :
            </p>
            <ul>
                <li>L'équilibre entre théorie et pratique</li>
                <li>Les projets en équipe qui reflètent les conditions réelles de travail</li>
                <li>La découverte de nombreux langages et technologies</li>
                <li>L'opportunité de créer des applications complètes</li>
                <li>Les stages qui m'ont permis de mettre en application mes connaissances</li>
            </ul>
            <p>
                Cette formation constitue une base solide pour mon projet professionnel : devenir développeur full-stack
                spécialisé dans les applications web innovantes.
            </p>
        </section>
    </div>
</template>

<script setup>

</script>

<style scoped>
.bts-container {
    font-family: 'Roboto', sans-serif;
    color: #333;
    max-width: 1200px;
    margin: 0 auto;
    padding: 60px 20px;
    background-color: rgba(255, 255, 255, 0.3);
    /* Fond plus transparent */
}

/* Ajustements pour les sections spécifiques */
.bts-header {
    background-color: rgba(255, 255, 255, 0.4);
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.bts-overview,
.bts-options,
.bts-competences,
.bts-debouches,
.bts-personal {
    background-color: rgba(255, 255, 255, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

/* Ajuster les cartes pour qu'elles se fondent mieux aussi */
.option-card,
.competence-item,
.debouche-card {
    background-color: rgba(255, 255, 255, 0.5);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.option-card:hover,
.competence-item:hover,
.debouche-card:hover {
    background-color: rgba(255, 255, 255, 0.6);
}

/* Sections avec style similaire à PartStage et PartProjet - modifier ce bloc existant */
section {
    margin-bottom: 60px;
    background-color: rgba(255, 255, 255, 0.4);
    /* Plus transparent */
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    /* Ombre plus légère */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

section:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    /* Ombre plus légère au survol */
}

/* Style de bannière noire pour les h2 */
h2 {
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
section:hover h2 {
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    background-color: rgba(0, 0, 0, 0.9);
}

h3 {
    font-size: 1.5rem;
    color: #333;
    /* Au lieu de #ffd700 */
    margin-bottom: 15px;
}

h4 {
    font-size: 1.3rem;
    color: #333;
    /* Au lieu de #ffd700 */
    margin-bottom: 15px;
}

p {
    font-size: 1.1rem;
    line-height: 1.6;
    margin-bottom: 15px;
    text-align: justify;
    color: #333;
    /* Au lieu de #e0e0e0 */
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
    /* Au lieu de #e0e0e0 */
}

/* Cards avec style similaire au projet/stage */
.option-card {
    background-color: rgba(255, 255, 255, 0.7);
    /* Fond blanc plus léger */
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 30px;
    transition: transform 0.3s ease, background-color 0.3s ease;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.option-card:hover {
    transform: translateY(-10px);
    background-color: rgba(255, 255, 255, 0.15);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
}

.option-header {
    margin-bottom: 15px;
}

.option-subtitle {
    font-size: 1.1rem;
    color: #666;
    /* Au lieu de #ccc */
    font-style: italic;
}

.competences-grid,
.debouches-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: space-between;
}

.competence-item,
.debouche-card {
    background-color: rgba(255, 255, 255, 0.7);
    /* Fond blanc plus léger */
    border-radius: 10px;
    padding: 20px;
    width: calc(33% - 20px);
    transition: transform 0.3s ease, background-color 0.3s ease;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.competence-item:hover,
.debouche-card:hover {
    transform: translateY(-5px);
    background-color: rgba(255, 255, 255, 0.15);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
}

/* Section personnelle avec style similaire à la carte de stage */
.bts-personal {
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
}

.bts-personal:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
}

/* Responsive Design */
@media (max-width: 768px) {

    .competence-item,
    .debouche-card {
        width: calc(50% - 15px);
    }

    section {
        padding: 20px;
    }

    .bts-header h1 {
        font-size: 2rem;
    }
}

@media (max-width: 576px) {

    .competence-item,
    .debouche-card {
        width: 100%;
    }
}
</style>