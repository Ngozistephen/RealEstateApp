import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
       
       
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }), 
        vue({
            template: {
                transformAssetUrls: {
                   base: null,
                   includeAbsolute: false,
                },
            },
        })
    ],
    // Added this to my vite config and it started working
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
