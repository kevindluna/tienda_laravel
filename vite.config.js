import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/style.css',
                'resources/css/pinateria.css',
                'resources/css/cacharreria.css',
                'resources/css/login.css',
                'resources/css/productos.css',
                'resources/css/producto.css',
                'resources/js/app.js',
                'resources/js/producto.js',
            ],
            refresh: true,
        }),
    ],
});
