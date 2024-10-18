import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/styles/app.css', 'resources/scripts/app.js'],
            refresh: true,
        }),
    ],
});
