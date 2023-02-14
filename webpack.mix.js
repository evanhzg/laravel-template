let mix = require('laravel-mix');

if (mix.inProduction()) {

    // disable notifications
    mix.disableNotifications();

    // version all the assets
    mix.version();

} else {

    mix.browserSync({
        files: [
            'app/**/*',
            'public/**/*',
            'resources/views/**/*',
            'resources/lang/**/*',
            'routes/**/*'
        ],
        proxy: 'http://localhost:80',
        notify: false,
        open: false
    });

}

mix.js('resources/js/app.js', 'dist').setPublicPath('dist');
