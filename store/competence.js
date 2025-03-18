import { ref, computed } from "vue";
import { defineStore } from "pinia";

export const useCompetenceStore = defineStore("competence", () => {
  const competences = ref([]);
  const test = ref("test");

  // Fonction pour récupérer les lycées depuis une API
  async function getCompetences() {
    try {
        const response = await fetch('portfolio.api/competence/getcompetence')
        if (response.status){
            const json = await response.json()
            competences.value = json
            console.log("competence récupérésé" ,competences.value)
            return competences.value
        } else {
            console.error('Erreur lors de la récupération des compt', error);
        }
    } catch (error) {
        console.error('Erreur reseau', error);
    }
  }


  return {
    competences,
    test,
    getCompetences
  };
});