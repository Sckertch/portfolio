<template>
    <header class="navbar">
        <div class="container">
            <div class="navbar-brand">
                <router-link to="/">
                    <h1 class="brand-name">LEDA Mathis</h1>
                </router-link>
            </div>

            <div class="navbar-toggle" @click="toggleMenu" :class="{ 'is-active': isMenuOpen }">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <nav class="navbar-menu" :class="{ 'is-active': isMenuOpen }">
                <ul class="navbar-nav">
                    <li><router-link to="/" @click="hideMenu">ACCUEIL</router-link></li>
                    <li><router-link to="/profil" @click="hideMenu">PROFIL</router-link></li>
                    <li><router-link to="/bts" @click="hideMenu">BTS SIO</router-link></li>
                    <li><router-link to="/projet" @click="hideMenu">PROJET</router-link></li>
                    <li><router-link to="/veille" @click="hideMenu">VEILLE</router-link></li>
                </ul>
            </nav>
        </div>
    </header>
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
:root {
    --accent: #ffd700;
    --white: #ffffff;
    --text-sm: 0.875rem;
    --text-lg: 1.125rem;
    --space-sm: 1rem;
    --space-md: 1.5rem;
    --transition-normal: 0.3s ease;
}

.navbar {
    position: sticky;
    top: 0;
    width: 100%;
    background-color: rgba(20, 33, 61, 0.95);
    backdrop-filter: blur(10px);
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
    padding: 0.75rem 0;
    z-index: 1000;

    .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 var(--space-md);
        max-width: 1200px;
        margin: 0 auto;
    }
}

.navbar-brand {
    .brand-name {
        color: var(--accent);
        font-size: 1.5rem;
        font-weight: 700;
        margin: 0;
        letter-spacing: 0.5px;
        position: relative;
        transition: all var(--transition-normal);

        &::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--accent);
            transition: width var(--transition-normal);
        }

        &:hover {
            transform: translateY(-2px);

            &::after {
                width: 100%;
            }
        }
    }
}

.navbar-toggle {
    display: none;
    flex-direction: column;
    justify-content: space-between;
    width: 28px;
    height: 20px;
    cursor: pointer;

    span {
        display: block;
        height: 2px;
        width: 100%;
        background-color: var(--white);
        transition: all var(--transition-normal);
    }
}

.navbar-menu {
    display: flex;
    align-items: center;

    .navbar-nav {
        display: flex;
        flex-direction: row;
        list-style: none;
        margin: 0;
        padding: 0;

        li {
            margin: 0 var(--space-sm);
            display: inline-block;

            a {
                display: block;
                font-size: var(--text-sm);
                font-weight: 600;
                letter-spacing: 1px;
                color: var(--white);
                padding: 0.5rem 0.75rem;
                position: relative;
                transition: all var(--transition-normal);
                white-space: nowrap;

                &::after {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 0;
                    height: 2px;
                    background-color: var(--accent);
                    transition: width var(--transition-normal);
                }

                &:hover,
                &.router-link-active {
                    color: var(--accent);

                    &::after {
                        width: 100%;
                    }
                }
            }
        }
    }
}

@media (max-width: 768px) {
    .navbar-toggle {
        display: flex;
        z-index: 20;
    }

    .navbar-menu {
        position: fixed;
        top: 0;
        right: -100%;
        width: 70%;
        height: 100vh;
        background-color: rgba(20, 33, 61, 0.98);
        padding-top: 5rem;
        transition: right var(--transition-normal);
        z-index: 10;
        display: flex;
        justify-content: center;
        /* Centrer horizontalement le contenu */

        &.is-active {
            right: 0;
        }

        .navbar-nav {
            flex-direction: column;
            align-items: center;
            width: 100%;
            /* S'assurer que la liste prend toute la largeur */
            padding: 0;
            /* Éliminer le padding par défaut de la liste */

            li {
                margin: var(--space-sm) 0;
                width: 100%;
                text-align: center;
                display: flex;
                justify-content: center;
                /* Centrer les éléments li */

                a {
                    padding: var(--space-sm) 0;
                    font-size: var(--text-lg);
                    width: 80%;
                    /* Limiter la largeur du lien pour meilleur centrage */
                    display: flex;
                    justify-content: center;
                    /* Centrer le texte dans le lien */
                }
            }
        }
    }

    .navbar-toggle.is-active {
        span {
            &:first-child {
                transform: translateY(9px) rotate(45deg);
            }

            &:nth-child(2) {
                opacity: 0;
            }

            &:last-child {
                transform: translateY(-9px) rotate(-45deg);
            }
        }
    }
}
</style>