import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/custom.css',
                'resources/css/sections.css',
                'resources/css/cookie-consent.css',  
                'resources/css/contact.css',
                'resources/css/aboutus.css',
                'resources/css/service/list-service.css',
                'resources/css/service/service.css',
                'resources/css/case-study/cs-listing.css', 
                'resources/css/case-study/cs-page.css',    
                'resources/js/cookies.js',
                'resources/js/custom.js',
                'resources/js/cookie-consent.js',
                'resources/js/case-study.js',              
            ],
            refresh: true,
        }),
    ],
});