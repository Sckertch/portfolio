<template>
  <div class="container">
    <div class="container mb-5">
        <div class="title text-center border-bottom">
            <p class="h2">Stages</p>
        </div>
        <div class="row mt-3"> 
            <div class="col-md-7 d-flex align-items-center justify-content-center"> 
                <p>J'ai effectué mes stages de 1er et 2ème année à Segesia, une entreprise de développement web desing et solution de sauvegarde, ou j'ai effectué du développement web (VueJs, PHP), de la gestion de projet, du compte rendu client, du déploiment et de la mise en production </p> 
            </div> 
            <div class="col-md-5 d-flex align-items-center justify-content-center">
                <img src="../../assets/img/stage1/segesia.png" alt="segesia" class="img-fluid"> 
            </div> 
        </div>

        <button class="btn btn-primary custom-button position-relative" @click="showPopup = true"> 
            <img src="../../assets/img/stage1/fleche_droite.jpeg" alt="Button Image" class="img-fluid"> 
        </button>

        <transition name="fade">
            <div v-if="showPopup" class="overlay" @click.self="showPopup = false">
                <div class="modal fade show" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Résumé de stage</h5>
                            </div>
                            <div class="modal-body">
                                <StageResume />
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" @click="showPopup = false">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import StageResume from '@/components/projet/StageResume.vue';

const showPopup = ref(false);

</script>

<style scoped>

.modal { 
    display: block;
}

.modal.fade .modal-dialog { 
    transition: transform 0.3s ease-out; 
    transform: translateY(-50px); 
} 

.modal.show .modal-dialog { 
    transform: translateY(0); 
} 

.modal-backdrop { 
    background-color: rgba(0, 0, 0, 0.5);
}

.custom-button { 
    width: 75px;  
    height: 75px;
    position: absolute; 
    bottom: 0; 
    margin-bottom: 20px; 

}

.overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1050;
}

.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s;
}

.fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
  opacity: 0;
}
</style>