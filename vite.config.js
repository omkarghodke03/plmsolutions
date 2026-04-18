import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/custom.css',
                'resources/js/cookies.js',
                'resources/css/sections.css', 
                'resources/js/cookie-consent.css',
                'resources/js/custom.js',
                'resources/js/cookie-consent.js',
                'resources/css/contact.css',
                'resources/css/aboutus.css',
                'resources/css/service/service.css'
            ],
            refresh: true,
        }),
    ],
});