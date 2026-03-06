import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/custom.css',
                'resources/js/cookies.js',
                'resources/css/sections.css',   
                'resources/js/custom.js',
            ],
            refresh: true,
        }),
    ],
});