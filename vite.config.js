import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/fe/app.scss', 'resources/scss/be/app.scss', 'resources/js/fe/app.js', 'resources/js/be/app.js'],
            refresh: true,
        }),
    ],
});
