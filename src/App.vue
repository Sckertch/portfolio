<template>
  <div id="app">
    <NavBar />
    <Transition name="page" mode="out-in">
      <router-view />
    </Transition>
    <FlouterDown />
  </div>
</template>

<script setup>
import NavBar from './components/NavBar.vue';
import { onMounted } from 'vue';
import { useCompetenceStore } from '../store/competence';
import { storeToRefs } from 'pinia';
import FlouterDown from './components/FlouterDown.vue';
</script>

<style>
:root {
  /* Palette de couleurs principale */
  --primary-dark: #14213d;
  --primary: #1a2a6c;
  --primary-light: #2a5298;
  --accent: #ffd700;
  --accent-light: #ffe55c;
  --accent-dark: #d4af37;

  /* Couleurs neutres */
  --dark: #111827;
  --gray-dark: #333;
  --gray: #555;
  --gray-light: #999;
  --light: #f5f5f5;
  --white: #ffffff;

  /* Espacements */
  --space-xs: 0.5rem;
  --space-sm: 1rem;
  --space-md: 1.5rem;
  --space-lg: 2.5rem;
  --space-xl: 4rem;

  /* Typographie */
  --font-sans: 'Inter', 'Helvetica', 'Arial', sans-serif;
  --font-serif: 'Georgia', 'Times New Roman', serif;
  --font-mono: 'Fira Code', 'Courier New', monospace;

  /* Tailles de police */
  --text-xs: 0.75rem;
  --text-sm: 0.875rem;
  --text-base: 1rem;
  --text-lg: 1.125rem;
  --text-xl: 1.25rem;
  --text-2xl: 1.5rem;
  --text-3xl: 1.875rem;
  --text-4xl: 2.25rem;
  --text-5xl: 3rem;

  /* Border radius */
  --radius-sm: 0.25rem;
  --radius-md: 0.5rem;
  --radius-lg: 1rem;
  --radius-xl: 1.5rem;
  --radius-full: 9999px;

  /* Shadows */
  --shadow-sm: 0 1px 2px rgba(0, 0, 0, 0.05);
  --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);

  /* Transitions */
  --transition-fast: 0.2s ease;
  --transition-normal: 0.3s ease;
  --transition-slow: 0.5s ease;
}

/* Styles globaux réinitialisés */
*,
*::before,
*::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html {
  font-size: 16px;
  scroll-behavior: smooth;
}

body {
  font-family: var(--font-sans);
  line-height: 1.6;
  color: var(--dark);
  background-color: var(--light);
}

h1,
h2,
h3,
h4,
h5,
h6 {
  line-height: 1.2;
  margin-bottom: var(--space-sm);
  font-weight: 700;
}

p {
  margin-bottom: var(--space-md);
}

a {
  color: var(--primary);
  text-decoration: none;
  transition: color var(--transition-fast);
}

a:hover {
  color: var(--primary-light);
}

img {
  max-width: 100%;
  height: auto;
}

ul,
ol {
  margin-bottom: var(--space-md);
  padding-left: var(--space-lg);
}

/* Styles principaux de l'application */
#app {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  background: linear-gradient(135deg, var(--primary-dark), var(--primary), var(--primary-light));
  min-height: 100vh;
  position: relative;
}

/* Animations de page */
.page-enter-active,
.page-leave-active {
  transition: opacity 0.4s ease, transform 0.4s ease;
}

.page-enter-from,
.page-leave-to {
  opacity: 0;
  transform: translateY(20px);
}

/* Utilitaires */
.container {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 var(--space-md);
}

.text-center {
  text-align: center;
}

.text-primary {
  color: var(--primary);
}

.text-accent {
  color: var(--accent);
}

.bg-primary {
  background-color: var(--primary);
}

.bg-accent {
  background-color: var(--accent);
}

@media (max-width: 768px) {
  html {
    font-size: 14px;
  }
}
</style>