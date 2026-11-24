import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // CSS files
                'resources/css/app.css',
                'resources/css/custom.css',
                'resources/css/sections.css',
                'resources/css/contact.css',
                'resources/css/aboutus.css',
                // JS files
                'resources/js/app.js',
                'resources/js/custom.js',
            ],
            refresh: true,
        }),
    ],
});