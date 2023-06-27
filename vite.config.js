import laravel from 'laravel-vite-plugin'
import { defineConfig } from 'vite'
import { createProxyMiddleware } from 'http-proxy-middleware'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js', 'resources/scss/app.scss'],
        }),
    ],
})
