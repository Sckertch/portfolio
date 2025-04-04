<template>
    <div class="mention-legale">
        <h1>Mentions Légales</h1>

        <section>
            <h2>1. Identification</h2>
            <p>Ce site web est édité par :</p>
            <ul>
                <li><strong>Nom/Prénom :</strong> John Doe</li>
                <li><strong>Statut :</strong> Développeur Web Freelance</li>
                <li><strong>Adresse :</strong> 123 Avenue des Développeurs, 75000 Paris</li>
                <li><strong>Email :</strong> contact@johndoe-portfolio.fr</li>
                <li><strong>Téléphone :</strong> 01 23 45 67 89</li>
            </ul>
        </section>

        <section>
            <h2>2. Hébergement</h2>
            <p>Le site est hébergé par :</p>
            <ul>
                <li><strong>Nom de l'hébergeur :</strong> Hébergement Pro</li>
                <li><strong>Raison sociale :</strong> Société Hébergement Pro SAS</li>
                <li><strong>Adresse :</strong> 456 Rue des Serveurs, 69000 Lyon</li>
                <li><strong>Téléphone :</strong> 04 56 78 90 12</li>
            </ul>
        </section>

        <section>
            <h2>3. Propriété intellectuelle</h2>
            <p>L'ensemble de ce site relève de la législation française et internationale sur le droit d'auteur et la
                propriété intellectuelle. Tous les droits de reproduction sont réservés, y compris pour les documents
                téléchargeables et les représentations iconographiques et photographiques.</p>
            <p>La reproduction de tout ou partie de ce site est formellement interdite sauf autorisation expresse de
                John Doe.</p>
        </section>

        <section>
            <h2>4. Données personnelles</h2>
            <p>Conformément au Règlement Général sur la Protection des Données (RGPD), vous disposez d'un droit d'accès,
                de rectification et de suppression des données vous concernant. Pour exercer ce droit, veuillez me
                contacter par email à l'adresse : contact@johndoe-portfolio.fr</p>
            <p>Aucune information personnelle n'est collectée à votre insu ni traitée sans votre consentement.</p>
        </section>

        <section>
            <h2>5. Cookies</h2>
            <p>Ce site utilise des cookies à des fins statistiques et pour améliorer votre expérience. Vous pouvez
                accepter ou refuser ces cookies en configurant les paramètres de votre navigateur.</p>
        </section>

        <section>
            <h2>6. Responsabilité</h2>
            <p>Les informations contenues sur ce site sont aussi précises que possible, mais peuvent contenir des
                inexactitudes. Je ne suis en aucun cas responsable des erreurs, omissions ou indisponibilités des
                informations.</p>
        </section>

        <section>
            <h2>7. Droit applicable et juridiction</h2>
            <p>Les présentes mentions légales sont soumises au droit français. En cas de litige, les tribunaux français
                seront seuls compétents.</p>
        </section>

        <p class="last-update">Dernière mise à jour : {{ new Date().toLocaleDateString() }}</p>
    </div>
</template>

<script>
export default {
    name: 'MentionLegale'
}
</script>

<style scoped>
.mention-legale {
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
