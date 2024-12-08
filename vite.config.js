import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/flickity.css',
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/flickity.pkgd.min.js'
            ],
            refresh: true,
        }),
    ],
});
