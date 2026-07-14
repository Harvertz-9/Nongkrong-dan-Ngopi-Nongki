import { defineStore } from 'pinia';

export const useAppStore = defineStore('app', {
    state: () => ({
        appName: 'Nongki',
    }),
    getters: {},
    actions: {},
});
