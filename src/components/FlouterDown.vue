<template>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="https://portoimages.duckdns.org/logo.png" alt="Mon Logo" class="logo" />
            </div>

            <div class="footer-social">
                <h3>Suivez-moi</h3>
                <div class="social-links">
                    <a href="https://github.com/Sckertch" target="_blank" class="social-link">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                    <a href="https://instagram.com/_mleda_/" target="_blank" class="social-link">
                        <i class="fab fa-instagram"></i> Instagram
                    </a>
                    <a href="https://linkedin.com/in/leda-mathis-2607162a3/" target="_blank" class="social-link">
                        <i class="fab fa-linkedin"></i> LinkedIn
                    </a>
                    <a href="mailto:mleda971@outlook.fr" class="social-link">
                        <i class="fas fa-envelope"></i> Email
                    </a>
                </div>
            </div>

            <div class="footer-links">
                <h3>Informations</h3>
                <ul>
                    <li><a href="#" @click.prevent="showMentionLegale = true">Mentions légales</a></li>
                    <li><a href="#" @click.prevent="showConditions = true">Conditions d'utilisation</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; {{ new Date().getFullYear() }} - Mon Portfolio. Tous droits réservés.</p>
        </div>

        <!-- Modals pour les mentions légales et conditions d'utilisation -->
        <div v-if="showMentionLegale" class="modal">
            <div class="modal-content">
                <span class="close" @click="showMentionLegale = false">&times;</span>
                <MentionLegale />
            </div>
        </div>

        <div v-if="showConditions" class="modal">
            <div class="modal-content">
                <span class="close" @click="showConditions = false">&times;</span>
                <ConditionUtilisation />
            </div>
        </div>
    </footer>
</template>

<script>
import MentionLegale from './blocks/MentionLegale.vue';
import ConditionUtilisation from './blocks/ConditionUtilisation.vue';

export default {
    name: 'FlouterDown',
    components: {
        MentionLegale,
        ConditionUtilisation
    },
    data() {
        return {
            showMentionLegale: false,
            showConditions: false
        };
    }
};
</script>

<style scoped>
.footer {
    background-color: #2c3e50;
    color: #ecf0f1;
    padding: 2rem 0;
    margin-top: 3rem;
    width: 100%;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 0 2rem;
}

.footer-logo .logo {
    width: 100px;
    height: auto;
}

.footer-social,
.footer-links {
    margin-bottom: 1.5rem;
}

h3 {
    font-size: 1.2rem;
    margin-bottom: 1rem;
    color: #3498db;
}

.social-links {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.social-link {
    color: #ecf0f1;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: color 0.3s ease;
}

.social-link:hover {
    color: #3498db;
}

.footer-links ul {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin-bottom: 10px;
}

.footer-links a {
    color: #ecf0f1;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-links a:hover {
    color: #3498db;
}

.footer-bottom {
    text-align: center;
    border-top: 1px solid #34495e;
    padding-top: 1rem;
    margin-top: 1rem;
}

/* Style pour les modals */
.modal {
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal-content {
    background-color: #fff;
    color: #333;
    border-radius: 8px;
    padding: 20px;
    max-width: 800px;
    max-height: 80vh;
    overflow-y: auto;
    position: relative;
}

.close {
    position: absolute;
    right: 20px;
    top: 10px;
    font-size: 28px;
    cursor: pointer;
    color: #333;
}

.close:hover {
    color: #e74c3c;
}

@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
    }

    .footer-logo,
    .footer-social,
    .footer-links {
        width: 100%;
        margin-bottom: 2rem;
        text-align: center;
    }

    .footer-logo {
        display: flex;
        justify-content: center;
    }

    .social-links {
        align-items: center;
    }
}
</style>
