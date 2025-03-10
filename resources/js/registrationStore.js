import { defineStore } from "pinia";


const useStore = defineStore('store', {
    state: {
        user: false,
        // Altres estats
    },
    getters: {
        user: state => state.user,
        // Altres getters
    },
    actions: {
    },
});

export default useStore;
