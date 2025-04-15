<template>
    <div class="condition-utilisation">
        <h1>Conditions Générales d'Utilisation</h1>

        <section>
            <h2>1. Acceptation des conditions</h2>
            <p>En accédant et en utilisant ce site web portfolio, vous acceptez de vous conformer aux présentes
                Conditions Générales d'Utilisation. Si vous n'acceptez pas ces conditions, veuillez ne pas utiliser ce
                site.</p>
        </section>

        <section>
            <h2>2. Description du service</h2>
            <p>Ce site web a pour objet de présenter mon portfolio professionnel, mes compétences, expériences et
                réalisations en tant que développeur web.</p>
        </section>

        <section>
            <h2>3. Propriété intellectuelle</h2>
            <p>Tout le contenu présent sur ce site (textes, images, logos, code, design, etc.) est ma propriété
                exclusive ou celle de mes partenaires. Toute reproduction, distribution, modification ou utilisation du
                contenu sans mon autorisation écrite préalable est strictement interdite.</p>
            <p>Les projets présentés dans mon portfolio peuvent faire référence à des marques déposées appartenant à
                leurs propriétaires respectifs.</p>
        </section>

        <section>
            <h2>4. Utilisation autorisée</h2>
            <p>Vous êtes autorisé à :</p>
            <ul>
                <li>Consulter le contenu de ce site à titre personnel et non commercial</li>
                <li>Me contacter pour des opportunités professionnelles</li>
                <li>Partager le lien vers mon portfolio</li>
            </ul>

            <p>Vous n'êtes PAS autorisé à :</p>
            <ul>
                <li>Copier ou reproduire le design, la mise en page ou la structure du site</li>
                <li>Utiliser mon code source sans autorisation</li>
                <li>Reproduire mes travaux ou réalisations sans permission</li>
                <li>Utiliser des techniques d'extraction automatique de données (scraping)</li>
            </ul>
        </section>

        <section>
            <h2>5. Liens externes</h2>
            <p>Ce site peut contenir des liens vers des sites web tiers. Ces liens sont fournis uniquement pour votre
                commodité. Je n'ai aucun contrôle sur le contenu de ces sites et décline toute responsabilité quant à
                leur contenu ou pratiques.</p>
        </section>

        <section>
            <h2>6. Limitation de responsabilité</h2>
            <p>Je m'efforce de maintenir les informations de ce site à jour et exactes, mais ne garantis pas
                l'exhaustivité ou la précision de celles-ci. Je décline toute responsabilité quant aux dommages directs
                ou indirects résultant de l'accès ou de l'utilisation de ce site.</p>
        </section>

        <section>
            <h2>7. Protection des données</h2>
            <p>Les informations que vous pourriez me communiquer via les formulaires de contact sont exclusivement
                utilisées pour répondre à vos demandes. Aucune donnée n'est partagée avec des tiers sans votre
                consentement explicite.</p>
        </section>

        <section>
            <h2>8. Modification des conditions</h2>
            <p>Je me réserve le droit de modifier ces conditions d'utilisation à tout moment. Les modifications
                prendront effet dès leur publication sur le site.</p>
        </section>

        <section>
            <h2>9. Droit applicable</h2>
            <p>Les présentes conditions sont régies par le droit français. Tout litige relatif à l'interprétation ou à
                l'exécution de ces conditions sera soumis aux tribunaux compétents.</p>
        </section>

        <p class="last-update">Dernière mise à jour : {{ new Date().toLocaleDateString() }}</p>
    </div>
</template>

<script>
export default {
    name: 'ConditionUtilisation'
}
</script>

<style scoped>
.condition-utilisation {
    padding: 20px;
    color: #333;
    font-family: Arial, sans-serif;
}

h1 {
    color: #2c3e50;
    text-align: center;
    margin-bottom: 30px;
    border-bottom: 2px solid #3498db;
    padding-bottom: 15px;
}

h2 {
    color: #3498db;
    margin-top: 25px;
    margin-bottom: 15px;
    font-size: 1.5rem;
}

section {
    margin-bottom: 25px;
}

ul {
    padding-left: 20px;
}

li {
    margin-bottom: 10px;
}

.last-update {
    font-style: italic;
    color: #7f8c8d;
    text-align: right;
    margin-top: 30px;
    font-size: 0.9rem;
}
</style>
