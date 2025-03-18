<!-- src/views/Home.vue -->
<template>
  <div id="cont-home">

    <div id="particles-js"></div>
    <div id="img-code">
      <div class="presentation">
        <h1>Bienvenue sur le portfolio de <span class="texte-jaune">LEDA Mathis</span></h1>
      </div>
      <div class="presentation-img">
      </div>
    </div> 
 
    <div class="home-cont-cont"><button><router-link id="router" to="/profil">
      <div class="text-fleche">
        <p>Découvrir mon profil</p>
      </div>
      <div class="home-right-fleche">
      </div>
    </router-link>
    </button></div>
  </div>
</template>

<script setup>

</script>



<style scoped>


/* Reset de base */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Arial', sans-serif;
  background-color: #f4f4f4;
  color: #333;
  line-height: 1.6;
}

/* Conteneur principal */
#cont-home {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100vh;
  text-align: center;
  padding: 20px;
  color: #fff;
  overflow: hidden;
  background: linear-gradient(135deg, #1e3c72, #2a5298, #6a11cb, #2575fc);
  background-size: 400% 400%;
  animation: gradientAnimation 10s ease infinite;
}

@keyframes gradientAnimation {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

/* Style pour l'image et le texte */
#img-code {
  margin-bottom: 40px;
}

.presentation h1 {
  font-size: 2.5rem;
  margin-bottom: 10px;
}

.texte-jaune {
  color: #FFD700; /* Jaune doré */
}

/* Style pour le bouton */
.home-cont-cont button {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 10px 20px;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  
}
.home-cont-cont button a#router {
  text-decoration: none;
  color: #fff;
}




.home-cont-cont button:hover {
  background-color: #555;
}

.text-fleche p {
  margin: 0;
  font-size: 1.2rem;
}

.home-right-fleche {
  margin-left: 10px;
  font-size: 1.2rem;
}

/* Animation pour la flèche */
.home-right-fleche::after {
  content: '';
  transition: transform 0.3s ease;
}

.home-cont-cont button:hover .home-right-fleche::after {
  transform: translateX(5px);
}

/* Responsive design */
@media (max-width: 768px) {
  .presentation h1 {
    font-size: 2rem;
  }

  .home-cont-cont button {
    padding: 8px 16px;
  }

  .text-fleche p {
    font-size: 1rem;
  }

  .home-right-fleche {
    font-size: 1rem;
  }
}
</style>
