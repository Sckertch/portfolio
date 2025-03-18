<template>
    <div class="bandeau">
        <div class="name">
            <router-link to="/">
                <p>LEDA Mathis</p>
            </router-link>    
        </div>

            <!-- Bouton hamburger -->
        <div class="hamburger" @click="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <nav :class="['navbar', { open: isMenuOpen }]">
            <ul @click="hideMenu()">
                <li><router-link to="/">ACCUEIL</router-link></li>
                <li><router-link to="/profil">PROFIL</router-link></li>
                <li><router-link to="/bts">BTS SIO</router-link></li>
                <li><router-link to="/projet">PROJET</router-link></li>
                <li><router-link to="/veille">VEILLE</router-link></li>
            </ul>
        </nav>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const isMenuOpen = ref(false);

function toggleMenu() {
    isMenuOpen.value = !isMenuOpen.value;
}

function hideMenu() {
    isMenuOpen.value = false;
}


</script>

<style lang="scss">
.bandeau {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #000; /* Fond noir */
    padding: 0 20px;
    height: 70px;
    color: #fff; /* Texte blanc */
    font-size: 16px;
    font-weight: bold;
    font-family: 'Roboto', sans-serif;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3); /* Ombre légère */
    position: sticky;
    top: 0;
    z-index: 1000;
    width: 100%; /* Prend toute la largeur */

    .name {
        padding-top: 14px;

        a {
            text-decoration: none;
            color: #fff; /* Texte blanc */
            font-size: 20px;
            font-weight: 700;
            transition: color 0.3s ease;
        }

        &:hover {
            color: #ffd700; /* Changement de couleur au survol (jaune doré) */
        }
    }

    .hamburger {
        display: none;
        flex-direction: column;
        gap: 5px;
        cursor: pointer;

        div {
            width: 25px;
            height: 3px;
            background-color: #fff; /* Couleur des barres du hamburger */
            transition: transform 0.3s, opacity 0.3s;
        }
    }

    .navbar {
        padding-top: 23px;
        ul {
            list-style: none;
            display: flex;
            gap: 20px;

            li {
                margin: 0;

                a {
                    text-decoration: none;
                    color: #fff; /* Texte blanc */
                    padding: 8px 16px;
                    border-radius: 4px;
                    transition: background-color 0.3s, color 0.3s, transform 0.3s;

                    &:hover {
                        background-color: rgba(255, 255, 255, 0.1); /* Fond léger au survol */
                        color: #ffd700; /* Changement de couleur au survol (jaune doré) */
                        transform: translateY(-2px); /* Effet de levée */
                    }
                }
            }
        }
    }

    /* Media query pour les écrans de petite taille */
    @media (max-width: 655px) {
        .hamburger {
            display: flex;
        }

        .navbar {
            display: none;
            position: absolute;
            top: 70px;
            right: 0;
            background-color: #000; /* Fond noir */
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            z-index: 1000;

            ul {
                flex-direction: column;
                padding: 0;
                margin: 0;

                li {
                    width: 100%;
                    text-align: center;

                    a {
                        display: block;
                        padding: 12px;
                    }
                }
            }
        }

        .navbar.open {
            display: flex;
            flex-direction: column;
            animation: slideDown 0.3s ease forwards;
        }
    }

    /* Animation pour le menu déroulant */
    @keyframes slideDown {
        from {
            transform: translateY(-20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
}

@media (max-width: 655px) {
    .bandeau {
        display: flex;
        align-items: center;
        width: 100%;

        .name {
            flex: 1;
            text-align: center;
        }

        .navbar {
            flex: 0;
            margin-left: auto;
        }
    }
}
</style> 