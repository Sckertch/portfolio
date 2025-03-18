import { ref, computed } from "vue";
import { defineStore } from "pinia";

export const useSettingsStore = defineStore("settings", () => {
  const url = ref(null);

  // Fonction pour récupérer les lycées depuis une API
  function getUrl() {
    url.value = import.meta.env.VITE_API_BASE_URL;
    return url.value;
  }


  return {
    url,
    getUrl
  };
});